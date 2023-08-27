<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class QuestionController extends Controller
{
    public function index()
    {
        $questions = question::latest()->get();
        foreach ($questions as $question) {
            $question->setAttribute('added_at', $question->created_at->diffForHumans());
            $question->setAttribute('answers_count', $question->answers->count());
            $question->setAttribute('auther', $question->auther);
            $question->setAttribute('category', $question->category);
        }
        return response()->json($questions);
    }
    public function show(question $post)
    {
        return response()->json([
            'id' => $post->id,
            'slug' => $post->slug,
            'body' => $post->body,
            'added_at' => $post->created_at->diffForHumans(),
            'answers_count' => $post->answers->count(),
            'category' => $post->category,
            'auther' => $post->auther,
            'thumbnail' => $post->thumbnail,
            'answers' => $this->answersFormated($post->answers)
        ]);
    }
    public function answersFormated($answers)
    {
        $new_answers = [];
        foreach ($answers as $answer) {
            array_push($new_answers, [
                'id' => $answer->id,
                'body' => $answer->body,
                'auther' => $answer->auther,
                'added_at' => $answer->created_at->diffForHumans(),
            ]);
        }
        return $new_answers;
    }

    public function addQuestion(Request $request)
    {
        $filename = '';
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('img'), $filename);
        }
        $question = question::create([
            'category_id' => $request->category,
            'user_id' => Auth::id(),
            'slug' => Str::slug(fake()->sentence($nbWords = 3, $variableNbWords = true)),
            'thumbnail' => $filename,
            'body' => $request->body,
            'status' => 1,

        ]);
        return response()->json($question);
    }
    public function deleteQuestion($id)
    {
        $deleted = DB::table('questions')
            ->where('id', $id)
            ->delete();
        return response()->json($deleted);
    }
    public function updateQuestion(Request $request ,$id)
    {
        $question = question::find($id);
        $question->category_id = $request->category;
        $question->body = $request->body;
        $image = $request->thumbnail;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->thumbnail->move(public_path('img'), $imagename);
            $question->thumbnail = $imagename;
        }
        $question->save();

        return response()->json($question);
    }






    public function categoryquestions($slug)
    {
        $category = category::where('slug', $slug)->first();
        $questions = question::where('category_id', $category->id)->get();
        foreach ($questions as $question) {
            $question->setAttribute('added_at', $question->created_at->diffForHumans());
            $question->setAttribute('answers', $question->answers->count());
            $question->setAttribute('auther', $question->auther);
            $question->setAttribute('category', $question->category);
        }
        return response()->json($questions);
    }

    public function autherquestions($id)
    {
        $user = User::where('id', $id)->first();
        $questions = question::where('user_id', $user->id)->get();
        foreach ($questions as $question) {
            $question->setAttribute('added_at', $question->created_at->diffForHumans());
            $question->setAttribute('answers', $question->answers->count());
            $question->setAttribute('auther', $question->auther);
            $question->setAttribute('category', $question->category);
        }
        return response()->json($questions);
    }

    public function searchposts($query)
    {
        $questions = question::where('body', 'like', '%' . $query . '%')->with('auther')->get();
        foreach ($questions as $question) {
            $question->setAttribute('added_at', $question->created_at->diffForHumans());
            $question->setAttribute('answers', $question->answers->count());
            $question->setAttribute('auther', $question->auther);
            $question->setAttribute('category', $question->category);
        }

        return response()->json($questions);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function getQustion()
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

    public function consent(Request $request , $slug)
    {
        $affected = DB::table('questions')
            ->where('slug', $slug)
            ->update([
                'status' => 2,
                'category_id' => $request->category_id
            ]);

        return response()->json($affected);
    }

    public function rejeterQ($slug)
    {
        $deleted = DB::table('questions')
            ->where('slug', $slug)
            ->delete();
        return response()->json($deleted);
    }
    public function rejeterComm($id)
    {
        $deleted = DB::table('answers')
            ->where('id', $id)
            ->delete();
        return response()->json($deleted);
    }
    public function informComm($id)
    {
        $comment = DB::table('answers')
            ->where('id', $id)
            ->update([
                'is_inform' => 1
            ]);
        return response()->json($comment);
    }
    public function ignorComm($id)
    {
        $comment = DB::table('answers')
            ->where('id', $id)
            ->update([
                'is_inform' => 0
            ]);

        return response()->json($comment);
    }
    public function hidden(Request $request ,$slug)
    {
        $hidden = DB::table('questions')
            ->where('slug', $slug)
            ->update([
                'status' => 3,
                'category_id' => $request->category_id
            ]);
        return response()->json($hidden);
    }
}

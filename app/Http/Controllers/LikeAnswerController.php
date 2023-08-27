<?php

namespace App\Http\Controllers;

use App\Models\like_answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LikeAnswerController extends Controller
{
    public function like(Request $request)
    {
            $like_s = $request->like_s;
            $answer_id = $request->answer_id;
            $change_like = 0;
            $like = DB::table('like_answers')->where('answer_id', $answer_id)
                ->where('user_id', Auth::user()->id)
                ->first();
            if (!$like) {
                $new_like = new like_answer;
                $new_like->answer_id = $answer_id;
                $new_like->user_id = Auth::user()->id;
                $new_like->like = 1;
                $new_like->save();
                $is_like = 1;
            } elseif ($like->like == 1) {
                DB::table('like_answers')->where('answer_id', $answer_id)
                    ->where('user_id', Auth::user()->id)
                    ->delete();
                $is_like = 0;
            } else if ($like->like == 0) {
                DB::table('like_answers')->where('answer_id', $answer_id)
                    ->where('user_id', Auth::user()->id)
                    ->update(['like' => 1]);
                $is_like = 1;
                $change_like = 1;
            }
            $respons = array(
                'is_like' => $is_like,
                'change_like' => $change_like,
            );
            return response()->json($respons, 200);
    }
    public function dislike(Request $request)
    {
        $like_s = $request->like_s;
        $answer_id = $request->answer_id;
        $change_dislike = 0;
        $dislike = DB::table('like_answers')->where('answer_id', $answer_id)
            ->where('user_id', Auth::user()->id)
            ->first();
        if (!$dislike) {
            $new_like = new like_answer;
            $new_like->post_id = $answer_id;
            $new_like->user_id = Auth::user()->id;
            $new_like->like = 0;
            $new_like->save();
            $is_dislike = 1;
        } elseif ($dislike->like == 0) {
            DB::table('like_answers')->where('answer_id', $answer_id)
                ->where('user_id', Auth::user()->id)
                ->delete();
            $is_dislike = 0;
        } else if ($dislike->like == 1) {
            DB::table('like_answers')->where('answer_id', $answer_id)
                ->where('user_id', Auth::user()->id)
                ->update(['like' => 0]);
            $is_dislike = 1;
            $change_dislike = 1;
        }
        $respons = array(
            'is_dislike' => $is_dislike,
            'change_dislike' => $change_dislike,
        );
        return response()->json($respons, 200);
    }
}

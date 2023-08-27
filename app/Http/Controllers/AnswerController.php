<?php

namespace App\Http\Controllers;

use App\Models\answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function store(Request $request)
    {
        $answer = answer::create([
            'body'=>$request->body,
            'user_id'=>Auth::id(),
            'question_id'=>$request->question_id
        ]);
        return response()->json([
            'id'=>$answer->id,
            'body'=>$answer->body,
            'user'=>$answer->auther,
            'added_at'=>$answer->created_at->diffForHumans(),

        ]);

    }
}

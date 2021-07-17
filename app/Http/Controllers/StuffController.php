<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StuffController extends Controller
{
    public function quiz(){
        $quizzes=User::find(Auth::user()->id)->quizzes()->get();
        return view('dashboard.quiz',compact('quizzes'));
    }
    public function addQuiz(Request $request){
        $validated=$request->validate([
            'name' => 'required',
            'mark' => 'required|numeric'
        ]);
        $quiz=new Quiz();
        $quiz->user_id=Auth::user()->id;
        $quiz->name=$validated['name'];
        $quiz->mark=$validated['mark'];
        $quiz->save();
        return redirect('/quiz');
    }
}

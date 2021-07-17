<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StuffController extends Controller
{
    public function quiz(){
        $quizzes=User::find(Auth::user()->id)->quizzes()->get();
        return view('dashboard.quiz',compact('quizzes'));
    }
}

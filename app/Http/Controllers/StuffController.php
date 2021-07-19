<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StuffController extends Controller
{
    public function quiz()
    {
        $quizzes = User::find(Auth::user()->id)->quizzes()->get();
        return view('dashboard.quiz', compact('quizzes'));
    }

    public function addQuiz(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'mark' => 'required|numeric'
        ]);
        $quiz = new Quiz();
        $quiz->user_id = Auth::user()->id;
        $quiz->name = $validated['name'];
        $quiz->mark = $validated['mark'];
        $quiz->save();
        return redirect('/quiz');
    }

    public function movie()
    {
        $movies = User::find(Auth::user()->id)->movies()->get();
        return view('dashboard.movies', compact('movies'));
    }

    public function addMovie(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'movie' => 'required|file'
        ]);
        $movie = new Movie();
        $movie->user_id = Auth::user()->id;
        $movie->name = $validated['name'];
        $vidext = $request->file('movie')->getClientOriginalExtension();
        $vidname = uniqid() . '.' . $vidext;
        $path = $request->file('movie')->storeAs('public/videos', $vidname);
        $movie->address = $vidname;
        $movie->save();
        return redirect('/movie');
    }

    public function resume(){
        $resume=User::find(Auth::user()->id)->resume;
        return view('dashboard.resume',compact('resume'));
    }

    public function editResume(Request $request)
    {
        $validated=$request->validate(['resume'=>'required']);
        $user=User::find(Auth::user()->id);
        $user->resume=$validated['resume'];
        $user->save();
        return $this->resume();
    }
}

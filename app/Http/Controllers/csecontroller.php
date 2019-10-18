<?php

namespace App\Http\Controllers;
use auth;
use Illuminate\Http\Request;
use App\csequestions;
use Illuminate\Support\Facades\Redirect;
class csecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('cse.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $myquestion=csequestions::find($id);
      $count=csequestions::where('publish', '1')->count();
      if ((Auth::check()) && (auth::user()->role=="admins"))
      {
          return view('admin.admineditquestion')
          ->with('count', $count)
          ->with('myquestion', $myquestion);
      }
      else
      {
          return Redirect::back()->withMessage('Invalid Authentication');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      if ((Auth::check()) && (auth::user()->role=="admins"))
      {
          $cse=csequestions::find($id);
          $cse->question=$request->input('question');
          $cse->option1=$request->input('option1');
          $cse->option2=$request->input('option2');
          $cse->option3=$request->input('option3');
          $cse->option4=$request->input('option4');
          $cse->answer=$request->input('answer');
          $cse->save();    
          return Redirect::back()->withMessage('Edit Question Success');
      }
      else
      {
          return Redirect::back()->withMessage('Invalid Authentication');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cse=csequestions::find($id);
      if ((Auth::check()) && (auth::user()->role=="admins"))
      {
      $cse->delete();
      
      return redirect('/home')->withMessage('Question Deleted');
      }
      else
      {
          return Redirect::back()->withMessage('Invalid Authentication');
      }
    }

    public function english()
    {
      $myquestions=csequestions::where('subject', 'english')->inRandomOrder()->limit(10)->get();
      $keys=$myquestions->keys();
      $page="English";
        return view('cse.quiz')
      ->with('myquestions', $myquestions)
      ->with('keys', $keys)
      ->with('page', $page);
		}
		
    public function filipino()
    {
        $myquestions=csequestions::where('subject', 'filipino')->inRandomOrder()->limit(10)->get();
        $keys=$myquestions->keys();
        $page="Filipino";
          return view('cse.quiz')
        ->with('myquestions', $myquestions)
        ->with('keys', $keys)
        ->with('page', $page);
    }

    public function generaleducation()
    {
        $myquestions=csequestions::where('subject', 'gen-ed')->inRandomOrder()->limit(10)->get();
        $keys=$myquestions->keys();
        $page="General-education";
          return view('cse.quiz')
        ->with('myquestions', $myquestions)
        ->with('keys', $keys)
        ->with('page', $page);
    }

    public function math()
    {
        $myquestions=csequestions::where('subject', 'Math')->inRandomOrder()->limit(10)->get();
        $keys=$myquestions->keys();
        $page="Math";
          return view('cse.quiz')
        ->with('myquestions', $myquestions)
        ->with('keys', $keys)
        ->with('page', $page);
    }
    
    public function mockup(){

      if(auth::check())
      {

      
      $myquestions1=csequestions::where('subject', 'English')
      ->inRandomOrder()->limit(30);

      $myquestions2=csequestions::where('subject', 'Math')->inRandomOrder()->limit(30);

      $myquestions3=csequestions::where('subject', 'Filipino')->inRandomOrder()->limit(30);

      $myquestions3=csequestions::where('subject', 'Logic')->inRandomOrder()->limit(20);

      $myquestions=csequestions::where('subject', 'gen-ed')
      ->inRandomOrder()
      ->limit(10)
      ->union($myquestions1)
      ->union($myquestions2)
      ->union($myquestions3)
      ->get();
      
      $keys=$myquestions->keys();
      $page="Mockup";
        return view('cse.quiz')
      ->with('myquestions', $myquestions)
      ->with('keys', $keys)
      ->with('page', $page);
      }
      else
      {
        return Redirect('civil-service-examination-review')->withMessage('Login to take Mockup');
      }
  }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\csequestions;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
        $myquestions=csequestions::where('subject', 'english')->inRandomOrder()->limit(10)->get();
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
    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\csequestions;
use Illuminate\Support\Facades\Redirect;
class submitquestioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count=csequestions::where('publish', '1')->count();
			if(auth::check())
			{
				if(auth::user()->role=="admins")
				{
					return redirect('/admin-submit-question');
                }
                else
                {
                
                    return view('submitquestion.index')
                    ->with('count', $count);
                }
			}
			else
			{
      return view('submitquestion.index')
      ->with('count', $count);
   			}
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
        
        // Session::flash('message', 'This is a message!'); 

        $request->validate([
					'examtype' => 'required|max:8',
					'subject' => 'required|max:14',
					'question' => 'required|max:250',
					'option1' => 'required|max:250',
					'option2' => 'required|max:250',
					'option3' => 'required|max:250',
					'option4' => 'required|max:250',
					'answer' => 'required|max:250',
			]);
       
       if($request->examtype="cse")
       {
            $cse=new csequestions;
            $cse->question=$request->question;
            $cse->option1=$request->option1;
            $cse->option2=$request->option2;
            $cse->option3=$request->option3;
            $cse->option4=$request->option4;
            $cse->answer=$request->answer;
            $cse->subject=$request->subject;
            if($request->publish!='')
            {
                $cse->publish=$request->publish;
                $cse->save();
                return Redirect::back()->withMessage('Adding question to CSE success!');
            }else{
                $cse->save();
                return Redirect::back()->withMessage('Adding question to CSE success!');
            }
            
       }
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\blog;

use Illuminate\Support\Facades\Redirect;
class blogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs= blog::orderBy('created_at', 'DESC')->paginate(15);
        return view('blog.index')
        ->with('blogs',$blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ((Auth::check()) && (auth::user()->role=="admins"))
        {
            return view('blog.create');
        }
        else
        {
            return Redirect::back()->withMessage('Invalid Authentication');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ((Auth::check()) && (auth::user()->role=="admins"))
        {
            $this->validate($request,[
                'title'=>'required',
                'body'=>'required',
            ]);
            $gettitle=$request->input('title');
            $blog=new Blog;
            $blog->title=$request->input('title');
            $blog->body=$request->input('body');
            $blog->save();
            return Redirect::back()->withMessage('Adding Blog Success');
        
        }
        else
        {
            return Redirect::back()->withMessage('Invalid Authentication');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        // $blog=blog::where('title', $blog)->first();
        return view('blog.show')
        ->with('blog', $blog);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        if ((Auth::check()) && (auth::user()->role=="admins"))
        {
            return view('blog.edit')
            ->with('blog', $blog);
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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',

        ]);
        if ((Auth::check()) && (auth::user()->role=="admins"))
        {
            $blog=blog::find($id);
            $blog->title=$request->input('title');
            $blog->body=$request->input('body');
            $blog->save();    
            return Redirect::back()->withMessage('Edit Success');
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
    public function destroy(blog $blog)
    {
        if ((Auth::check()) && (auth::user()->role=="admins"))
        {
        $blog->delete();
        
        return redirect('/blog')->withMessage('Blog Deleted');
        }
        else
        {
            return Redirect::back()->withMessage('Invalid Authentication');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\csequestions;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $questions=csequestions::where('publish', 0)
        ->orderBy('subject', 'ASC')
        ->paginate(50);

        $math=csequestions::where('subject', 'math')
        ->count();

        $logic=csequestions::where('subject', 'logic')
        ->count();

        $english=csequestions::where('subject', 'english')
        ->count();

        $gened=csequestions::where('subject', 'gen-ed')
        ->count();

        $filipino=csequestions::where('subject', 'filipino')
        ->count();

        if(auth::user()->role=="user"){
            return view('home');
        }else if(auth::user()->role=="admins"){
            return view('admin.settings');
  
        }
}
}
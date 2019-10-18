
<?php
use App\csequestions;
use App\blog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $getblog5=blog::orderBy('created_at','DESC')->take(6)->get();
    $count=csequestions::count();
    $count=$count+500;
    if(count($getblog5) > 0)
    {
    $url0=str_replace(' ', '-', urldecode($getblog5->get(0)->title));
    $url1=str_replace(' ', '-', urldecode($getblog5->get(1)->title));
    $url2=str_replace(' ', '-', urldecode($getblog5->get(2)->title));
    $url3=str_replace(' ', '-', urldecode($getblog5->get(3)->title));
    $url4=str_replace(' ', '-', urldecode($getblog5->get(4)->title));
  
    return view('welcome')
    ->with('count', $count)
    ->with('getblog5',$getblog5)
    ->with('url0', $url0)
    ->with('url1', $url1)
    ->with('url2', $url2)
    ->with('url3', $url3)
    ->with('url4', $url4);
    }
    else
    {
        return view('welcome')
        ->with('count', $count)
        ->with('getblog5', $getblog5);
    }
});

Route::get('/logout', function () {
   Auth::logout();
   return Redirect::back();
});

Route::get('/admin-submit-question', function () {
    if((auth::check()) && (auth::user()->role=="admins"))
    {
    $count=csequestions::where('publish', '1')->count();
    return view('admin.adminsubmitquestion')
    ->with('count', $count);
    }
    else
    {
        return Redirect::back()->withMessage('Invalid Authentication');
    }
 });



Route::get('/get-started', function () {
    return view('unauth');
});

 Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
 Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes(['register' => false]);



Route::get('/home', 'HomeController@index')->name('home');


Route::resource('submit-question', 'submitquestioncontroller');


Route::resource('civil-service-examination-review', 'csecontroller');
Route::patch('/civil-service-examination-review/{id}', 'csecontroller@update');

Route::get('civil-service-examination-review-english', 'csecontroller@english');
Route::get('civil-service-examination-review-English', 'csecontroller@english');

Route::get('civil-service-examination-review-filipino', 'csecontroller@filipino');
Route::get('civil-service-examination-review-Filipino', 'csecontroller@filipino');

Route::get('civil-service-examination-review-general-education', 'csecontroller@generaleducation');
Route::get('civil-service-examination-review-General-education', 'csecontroller@generaleducation');


Route::get('civil-service-examination-review-math', 'csecontroller@math');
Route::get('civil-service-examination-review-Math', 'csecontroller@math');

Route::get('civil-service-examination-review-mockup-quiz', 'csecontroller@mockup');
Route::get('civil-service-examination-review-Mockup-quiz', 'csecontroller@mockup');



Route::resource('blog', 'blogcontroller');
Route::post('blog/create', 'blogcontroller@store');
Route::patch('/blog/{blog}', 'blogcontroller@update');
Route::get('blog/{blog}-{slug}', 'blogcontroller@show');



//adminsettings
Route::get('/admin-cse-unpublish', function () {
    
    if((auth::check()) && (auth::user()->role=="admins"))
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
    return view('admin.cse.cse-unpublish')
    ->with('questions',$questions)
    ->with('math', $math)
    ->with('logic', $logic)
    ->with('english', $english)
    ->with('gened', $gened)
    ->with('filipino', $filipino);
    }
    else
    {
        return Redirect::back()->withMessage('Invalid Authentication');
    }
 });


 Route::get('/admin-cse-publish', function () {
    
    if((auth::check()) && (auth::user()->role=="admins"))
    {
        $questions=csequestions::where('publish', 1)
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
    return view('admin.cse.cse-publish')
    ->with('questions',$questions)
    ->with('math', $math)
    ->with('logic', $logic)
    ->with('english', $english)
    ->with('gened', $gened)
    ->with('filipino', $filipino);
    }
    else
    {
        return Redirect::back()->withMessage('Invalid Authentication');
    }
 });

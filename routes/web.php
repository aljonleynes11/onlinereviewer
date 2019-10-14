
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
    $count=csequestions::count();
    $getblog5=blog::orderBy('created_at','DESC')->get();
    return view('welcome')
    ->with('count', $count)
    ->with('getblog5',$getblog5);
});

Route::get('/logout', function () {
   Auth::logout();
   return redirect('/');
});
Route::get('/admin-submit-question', function () {
    if(auth::user()->role=='admins')
    {
    $count=csequestions::where('publish', '1')->count();
    return view('admin.adminsubmitquestion')
    ->with('count', $count);
    }
 });



Route::get('/get-started', function () {
    return view('unauth');
});

 Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
 Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('csequiz', 'csequizcontroller');
Route::resource('submit-question', 'submitquestioncontroller');


Route::resource('civil-service-examination', 'csecontroller');

Route::get('civil-service-examination-english', 'csecontroller@english');
Route::get('civil-service-examination-English', 'csecontroller@english');

Route::get('civil-service-examination-filipino', 'csecontroller@filipino');
Route::get('civil-service-examination-Filipino', 'csecontroller@filipino');

Route::get('civil-service-examination-general-education', 'csecontroller@generaleducation');
Route::get('civil-service-examination-General-education', 'csecontroller@generaleducation');


Route::get('civil-service-examination-math', 'csecontroller@math');
Route::get('civil-service-examination-Math', 'csecontroller@math');


Route::resource('blog', 'blogcontroller');
Route::post('blog/create', 'blogcontroller@store');
Route::get('blog/{blog}-{slug}', 'blogcontroller@show');





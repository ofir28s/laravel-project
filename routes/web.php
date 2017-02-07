<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/session', 'HomeController@index');

// -- USERS --
Route::get('users', 'UsersController@index')->middleware('auth')->middleware('master');
Route::get('users/{user}', 'UsersController@show')->middleware('auth')->middleware('master');

// -- PAGES --
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');

// -- CARDS MANAGER --
Route::get('cards', 'CardsController@index')->middleware('auth');
Route::get('cards/{card}', 'CardsController@show');
Route::post('cards/{card}/notes', 'NotesController@store');
Route::get('notes/{note}/edit', 'NotesController@edit');
Route::patch('notes/{note}', 'NotesController@update');

// -- TASKS --
Route::get('tasks', 'TasksController@index');
Route::get('tasks/{task}', 'TasksController@show');

// -- POSTS --
Route::get('posts', 'PostsController@index');
Route::get('posts/create', 'PostsController@create');
Route::post('posts', 'PostsController@store');
Route::get('posts/{id}', 'PostsController@show');

Route::post('posts/{post}/comments', 'CommentsController@store');

// ---------------------------------------------------------------------
// -- page with login:
// Route::get('cards', 'CardsController@index')->middleware('auth');
// ---------------------------------------------------------------------

// -- ORIGINAL PHP CODE -- (ROUTES):

// -- (route with not controller [project posts]):

// -- POSTS -- (with not controller, with not model):
// Route::get('posts', function () {
// 	$posts = DB::table('posts')->get();
// 	return view('posts.index', compact('posts'));
// });

// Route::get('/posts/{post}', function ($id) {
// 	$post = DB::table('posts')->find($id);
// 	return view('posts.show', compact('post'));
// });

// ---------------------------------------------------------------------






//test-
// ---------------------------------------------------------------------

// class mailer
// {

// }

// class RegistersUsers
// {
// 	protected $mailer;
// 	public function _construct(mailer $mailer)
// 	{
// 		$this->mailer = $mailer;
// 	}
// }

// App::bind('RegistersUsers', function () {
// 	return new RegistersUsers(new mailer)
// });

//App::bind();
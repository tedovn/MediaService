<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function welcome()
	{
//        return "Hello from controller";
        $title = 'Начало';
        $page = 'home';
		// return View::make('home/index')->with('title',$title)->with("news",News::all())->with('page',$page);
		return View::make('home/index')->with('title',$title)->with('page',$page);
	}
    public  function redirect () {
        return Redirect::to('home');
    }

}

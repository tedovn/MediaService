<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('/user/index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('register');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        //validation
      $arrayRules = ['pass1.required'=>'The Password field is required.',
            'pass1.min'=>'The Password must be at least 7 characters.',
             'pass1.max'=>' The Password may not be greater than 50 characters.',
          'pass2.same'=>'The Repeat password Password must match.',
          'pass2.required'=>'The Repeat password field is required.'];
      $data= Input::all();
      $rules = ['email'=>'required|email',
                'pass1'=>'required|min:7|max:50',
                 'pass2'=>'required|same:pass1'];
      $validator = Validator::make($data,$rules,$arrayRules);
       if($validator->fails()){
           return Redirect::to('/user/create')->withErrors($validator)->withInput();
       } else{
          echo 'Data is OK';
       }
//		return View::make('email');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}

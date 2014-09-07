<?php

class ContactController extends \BaseController
{
    private $title = "Контакти";
    private $page = 'contact';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return View::make('/contact/index')->with('title', $this->title)->with('page', $this->page);
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // return View::make('/contact/register');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $RulesErrorMessage = ['name.required' => '<b>Името</b> е задължително.',
        'name.max' => '<b>Името</b> не може да бъде повече от 30 символа.',
        'subject.regex' => '<b>Относно</b> може да съдържа само букви.',
        'name.regex' => '<b>Името</b> може да съдържа само букви.',
        'email.required' => '<b>Пощата</b> е задължителна',
        'email.email' => '<b>Пощата</b> трябва да е валиден email адрес',
        'message.required'=> '<b>Съобщението</b> е задължително'];
        $allData = Input::all();
        $rules = ['email' => 'required|email',
        'name' => array('required','max:20','regex:/^[A-Za-z\s]+$/'),
        'subject' => array('required','max:30','regex:/^[A-Za-z\s]+$/'),
        'message' => 'required|max:200'];
        $validator = Validator::make($allData, $rules, $RulesErrorMessage);
        if ($validator->fails()) {
            Session::flash('errors',$validator->Errors());
            return Redirect::to('contact')->withInput();

        } else {

            Mail::send('emails.demo', array('name' => $allData['name'],
                'email' => $allData['email'],
                'subject' => $allData['subject'],
                'msg' => $allData['message']), function ($message) {
                $message->to('', 'WebAdmin')->subject('MediaService!');
              
            });

            Session::flash('success',array('Вашето запитване беше изпратено успешно.','Благодарим Ви за отделеното време.'));
            return Redirect::to('contact');

        }
        
    }




    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}

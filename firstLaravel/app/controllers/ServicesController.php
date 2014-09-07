<?php

class ServicesController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $title = 'Услуги';
        $page = 'services';
        return View::make('/services/index')->with('title', $title)->with('page', $page);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function advertising()
    {
        $temp = array('teddy' => '23 years');
        $title = 'Реклама';
        $page = 'services';
        return View::make('/services/advertising')->with('title', $title)->with('page', $page)->with('teddy', $temp['teddy']);
    }


    /**
     * [production description]
     * @return [type] [description]
     */
    public function production()
    {

        $title = 'Производство';
        $page = 'services';
        return View::make('/services/production')->with('title', $title)->with('page', $page);
    }

    /**
     * [gallery description]
     * @return [type] [description]
     */
    public function gallery()
    {

        $title = 'Галерия';
        $page = 'services';
        return View::make('/services/gallery')->with('title', $title)->with('page', $page);
    }

    /**
     * [press description]
     * @return [type] [description]
     */
    public function press()
    {

        $title = 'Печатна база';
        $page = 'services';
        return View::make('/services/press/index')->with('title', $title)->with('page', $page);
    }

    public function  pressEquipment()
    {
        $title = 'Печатна база - услуги';
        $page = 'services';
        return View::make('/services/press/equipment')->with('title', $title)->with('page', $page);
    }

    public function  pressRequirement()
    {
        $title = 'Печатна база - печат';
        $page = 'services';
        return View::make('/services/press/requirements')->with('title', $title)->with('page', $page);
    }
    public function  pressPortfolio()
    {
        $title = 'Печатна база - портфолио';
        $page = 'services';
        return View::make('/services/press/portfolio')->with('title', $title)->with('page', $page);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
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

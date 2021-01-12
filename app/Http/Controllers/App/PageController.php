<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome()
    {
        return view('app.home', [
            'head_title' => 'LumiArt – Arte a través de la iluminación',
            'title' => 'LumiArt – Arte a través de la iluminación',
            'description' => 'Somos una empresa peruana que brinda soluciones integrales en el mundo de la iluminación, ofreciéndoles productos de calidad y un excelente servicio, razón por la cual estamos posicionados en el mercado peruano con una trayectoria de más de 18 años en el sector iluminación. Para ello contamos con productos de marcas reconocidas a nivel mundial cumpliendo los requerimientos técnicos y certificaciones internacionales que soliciten.'
        ]);
    }

    public function getHome2()
    {
        return view('app.home', [
            'title' => 'Arte a través de la iluminación',
            'description' => 'Somos una empresa peruana que brinda soluciones integrales en el mundo de la iluminación, ofreciéndoles productos de calidad y un excelente servicio, razón por la cual estamos posicionados en el mercado peruano con una trayectoria de más de 18 años en el sector iluminación. Para ello contamos con productos de marcas reconocidas a nivel mundial cumpliendo los requerimientos técnicos y certificaciones internacionales que soliciten.'
        ]);
    }

    public function getHome3()
    {
        return view('app.home', [
            'title' => 'Arte a través de la iluminación',
            'description' => 'Somos una empresa peruana que brinda soluciones integrales en el mundo de la iluminación, ofreciéndoles productos de calidad y un excelente servicio, razón por la cual estamos posicionados en el mercado peruano con una trayectoria de más de 18 años en el sector iluminación. Para ello contamos con productos de marcas reconocidas a nivel mundial cumpliendo los requerimientos técnicos y certificaciones internacionales que soliciten.'
        ]);
    }

    public function getHome4()
    {
        return view('app.home', [
            'title' => 'Arte a través de la iluminación',
            'description' => 'Somos una empresa peruana que brinda soluciones integrales en el mundo de la iluminación, ofreciéndoles productos de calidad y un excelente servicio, razón por la cual estamos posicionados en el mercado peruano con una trayectoria de más de 18 años en el sector iluminación. Para ello contamos con productos de marcas reconocidas a nivel mundial cumpliendo los requerimientos técnicos y certificaciones internacionales que soliciten.'
        ]);
    }

    public function getHome5()
    {
        return view('app.home', [
            'title' => 'Arte a través de la iluminación',
            'description' => 'Somos una empresa peruana que brinda soluciones integrales en el mundo de la iluminación, ofreciéndoles productos de calidad y un excelente servicio, razón por la cual estamos posicionados en el mercado peruano con una trayectoria de más de 18 años en el sector iluminación. Para ello contamos con productos de marcas reconocidas a nivel mundial cumpliendo los requerimientos técnicos y certificaciones internacionales que soliciten.'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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

<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome()
    {
        return view('app.home.index', [
            'head_title' => 'LumiArt – Arte a través de la iluminación',
            'title' => 'LumiArt – Arte a través de la iluminación',
            'description' => 'Somos una empresa peruana que brinda soluciones integrales en el mundo de la iluminación, ofreciéndoles productos de calidad y un excelente servicio, razón por la cual estamos posicionados en el mercado peruano con una trayectoria de más de 18 años en el sector iluminación. Para ello contamos con productos de marcas reconocidas a nivel mundial cumpliendo los requerimientos técnicos y certificaciones internacionales que soliciten.'
        ]);
    }

    public function getAboutUs()
    {
        return view('app.about-us.index', [
            'head_title' => 'Nosotros – LumiArt',
            'title' => 'Nosotros',
            'breadcrumbs_description' => 'Business plan draws on a wide range of knowledge from different business<br> disciplines.
              Business draws on a wide range of different business.',
            'description' => 'Somos una empresa peruana que brinda soluciones integrales en el mundo de la iluminación, ofreciéndoles productos de calidad y un excelente servicio, razón por la cual estamos posicionados en el mercado peruano con una trayectoria de más de 18 años en el sector iluminación. Para ello contamos con productos de marcas reconocidas a nivel mundial cumpliendo los requerimientos técnicos y certificaciones internacionales que soliciten.'
        ]);
    }

    public function getCatalog()
    {
        return view('app.catalog.index', [
            'head_title' => 'Catálogo – LumiArt',
            'title' => 'Catálogo',
            'breadcrumbs_description' => 'Business plan draws on a wide range of knowledge from different business<br> disciplines.
              Business draws on a wide range of different business.',
            'description' => 'Somos una empresa peruana que brinda soluciones integrales en el mundo de la iluminación, ofreciéndoles productos de calidad y un excelente servicio, razón por la cual estamos posicionados en el mercado peruano con una trayectoria de más de 18 años en el sector iluminación. Para ello contamos con productos de marcas reconocidas a nivel mundial cumpliendo los requerimientos técnicos y certificaciones internacionales que soliciten.'
        ]);
    }

    public function getContactUs()
    {
        return view('app.contact-us.index', [
            'head_title' => 'Contáctanos – LumiArt',
            'title' => 'Contáctanos',
            'breadcrumbs_description' => 'Business plan draws on a wide range of knowledge from different business<br> disciplines.
              Business draws on a wide range of different business.',
            'description' => 'Somos una empresa peruana que brinda soluciones integrales en el mundo de la iluminación, ofreciéndoles productos de calidad y un excelente servicio, razón por la cual estamos posicionados en el mercado peruano con una trayectoria de más de 18 años en el sector iluminación. Para ello contamos con productos de marcas reconocidas a nivel mundial cumpliendo los requerimientos técnicos y certificaciones internacionales que soliciten.'
        ]);
    }

}

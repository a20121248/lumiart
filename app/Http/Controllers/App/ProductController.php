<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts()
    {
        return view('app.products.index', [
            'head_title' => 'Productos – LumiArt',
            'title' => 'Productos',
            'breadcrumbs_description' => 'Business plan draws on a wide range of knowledge from different business<br> disciplines.
              Business draws on a wide range of different business.',
            'description' => 'Somos una empresa peruana que brinda soluciones integrales en el mundo de la iluminación, ofreciéndoles productos de calidad y un excelente servicio, razón por la cual estamos posicionados en el mercado peruano con una trayectoria de más de 18 años en el sector iluminación. Para ello contamos con productos de marcas reconocidas a nivel mundial cumpliendo los requerimientos técnicos y certificaciones internacionales que soliciten.'
        ]);
    }

}

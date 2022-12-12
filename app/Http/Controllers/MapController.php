<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;


class MapController extends Controller
{
    public function index()
    {
        Mapper::map(51.58307608025242, 4.825826871626656);

        return view('locaties.breda');
}

}

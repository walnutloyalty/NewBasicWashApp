<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;


class MapController extends Controller
{
    public function index()
    {
        Mapper::map(51.58355531183388, 4.827942575325471);

        return view('locaties.breda');
}

}

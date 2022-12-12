<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;


class MapController extends Controller
{
    public function breda()
    {
        Mapper::map(51.58340864627517, 4.827727328060636);

        return view('locaties.breda');
    }
    public function hellevoetsluis()
    {
        Mapper::map(51.58340864627517, 4.827727328060636);

        return view('locaties.hellevoetsluis');
    }

    public function sint_willebrord()
    {
        Mapper::map(51.58340864627517, 4.827727328060636);

        return view('locaties.sint-willebrord');
    }

    public function terheijden()
    {
        Mapper::map(51.58340864627517, 4.827727328060636);

        return view('locaties.terheijden');
    }

}

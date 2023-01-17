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
        Mapper::map(51.83867769826151, 4.134274505423673);

        return view('locaties.hellevoetsluis');
    }

    public function sint_willebrord()
    {
        Mapper::map(51.55600050145903, 4.583887819251927);

        return view('locaties.sint-willebrord');
    }

    public function terheijden()
    {
        Mapper::map(51.649920028280285, 4.759403662259632);

        return view('locaties.terheijden');
    }

    public function ulvenhout()
    {
        Mapper::map(51.5474868531094, 4.798523662169291);

        return view('locaties.ulvenhout');
    }

    public function all_locations()
    {
        Mapper::map(51.58340864627517, 4.827727328060636, ['zoom' => 8]);
        Mapper::marker(51.58340864627517, 4.827727328060636);
        Mapper::marker(51.83867769826151, 4.134274505423673);
        Mapper::marker(51.55600050145903, 4.583887819251927);
        Mapper::marker(51.649920028280285, 4.759403662259632);
        Mapper::marker(51.5474868531094, 4.798523662169291);


        return view('locaties.index');
    }

}

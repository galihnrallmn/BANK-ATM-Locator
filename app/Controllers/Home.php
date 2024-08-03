<?php

namespace App\Controllers;

use App\Models\ModelMarker;
use App\Models\ModelPolygon;

class Home extends BaseController
{
    protected $ModelMarker;
    protected $ModelPolygon;

    public function __construct()
    {
        $this->ModelMarker = new ModelMarker();
        $this->ModelPolygon = new ModelPolygon();
    }

    public function index()
    {
        $data  = [
            'menu' => 'peta',
            'marker' => $this->ModelMarker->getMarker(),
            'polygon' => $this->ModelPolygon->getPolygon()
        ];
        return view('sig/index', $data);
    }
}

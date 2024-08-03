<?php

namespace App\Controllers;

use App\Models\ModelPolygon;

class Polygon extends BaseController
{
    protected $ModelPolygon;

    public function __construct()
    {
        $this->ModelPolygon = new ModelPolygon();
    }

    public function index()
    {
        $data = [
            'menu' => 'polygon',
            'polygon' => $this->formatPolygonData($this->ModelPolygon->findAll())
        ];

        return view('kelola/v_polygon', $data);
    }

    private function formatPolygonData($polygons)
    {
        foreach ($polygons as &$polygon) {
            $polygonData = json_decode($polygon['polygon'], true);
            if (count($polygonData) > 20) {
                $polygonData = array_slice($polygonData, 0, 20);
                $polygon['polygon'] = json_encode($polygonData) . '...';
            } else {
                $polygon['polygon'] = json_encode($polygonData);
            }
        }
        return $polygons;
    }

    public function InsertData()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'polygon' => $this->request->getPost('polygon'),
        ];

        $this->ModelPolygon->insert($data);

        session()->setFlashdata('insert', 'Data Berhasil ditambahkan.');

        return redirect()->to('/polygon');
    }

    public function UpdateData($id)
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'polygon' => $this->request->getVar('polygon'),
        ];

        $this->ModelPolygon->update($id, $data);

        session()->setFlashdata('update', 'Data Berhasil diedit.');

        return redirect()->to('/polygon');
    }

    public function Delete($id)
    {
        if ($this->ModelPolygon->delete($id)) {
            session()->setFlashdata('delete', 'Data Berhasil dihapus.');
        } else {
            session()->setFlashdata('delete', 'Data gagal dihapus.');
        }

        return redirect()->to('/polygon');
    }
}

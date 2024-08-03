<?php

namespace App\Controllers;

use App\Models\ModelMarker;

class Marker extends BaseController
{
    protected $ModelMarker;

    public function __construct()
    {
        $this->ModelMarker = new ModelMarker();
    }

    public function index()
    {
        $data = [
            'menu' => 'marker',
            'marker' => $this->formatMarkerData($this->ModelMarker->findAll())
        ];

        return view('kelola/v_marker', $data);
    }

    private function formatMarkerData($markers)
    {
        foreach ($markers as &$marker) {
            $name = $marker['name'];
            if (strlen($name) > 20) {
                $marker['name'] = substr($name, 0, 20) . '...';
            }

            $address = $marker['address'];
            if (strlen($address) > 20) {
                $marker['address'] = substr($address, 0, 20) . '...';
            }
        }
        return $markers;
    }

    public function InsertData()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude'),
            'type' => $this->request->getPost('type'),
        ];

        $this->ModelMarker->insert($data);

        session()->setFlashdata('insert', 'Data Berhasil ditambahkan.');

        return redirect()->to('/marker');
    }

    public function UpdateData($id)
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'address' => $this->request->getVar('address'),
            'latitude' => $this->request->getVar('latitude'),
            'longitude' => $this->request->getVar('longitude'),
            'type' => $this->request->getVar('type')
        ];

        $this->ModelMarker->update($id, $data);

        session()->setFlashdata('update', 'Data Berhasil diedit.');

        return redirect()->to('/marker');
    }

    public function Delete($id)
    {
        if ($this->ModelMarker->delete($id)) {
            session()->setFlashdata('delete', 'Data Berhasil dihapus.');
        } else {
            session()->setFlashdata('delete', 'Data gagal dihapus.');
        }

        return redirect()->to('/marker');
    }
}

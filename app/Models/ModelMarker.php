<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMarker extends Model
{
    protected $table      = 'marker';
    protected $primaryKey = 'idmarker';
    protected $allowedFields = ['name', 'address', 'latitude', 'longitude', 'type'];

    public function getMarker($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }
}

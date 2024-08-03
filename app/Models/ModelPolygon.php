<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPolygon extends Model
{
    protected $table      = 'polygon';
    protected $primaryKey = 'idpolygon';
    protected $allowedFields = ['name', 'polygon'];

    public function getPolygon($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['idpolygon' => $id])->first();
    }
}

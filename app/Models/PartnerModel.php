<?php

namespace App\Models;

use CodeIgniter\Model;

class PartnerModel extends Model
{
    protected $table = 'partners';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'logo', 'description', 'website', 'is_active',
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getActivePartners()
    {
        return $this->where('is_active', 1)->findAll();
    }
}
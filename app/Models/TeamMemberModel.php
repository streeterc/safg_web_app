<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamMemberModel extends Model
{
    protected $table = 'team_members';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'credentials',
        'company',
        'position',
        'description',
        'social_media',
        'is_active',
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Automatically decode JSON social_media field
    protected $afterFind = ['decodeSocialMedia'];

    protected function decodeSocialMedia(array $data)
    {
        if (isset($data['data']['social_media']) && is_string($data['data']['social_media'])) {
            $data['data']['social_media'] = json_decode($data['data']['social_media'], true);
        } elseif (isset($data['data']) && is_array($data['data'])) {
            foreach ($data['data'] as &$row) {
                if (isset($row['social_media']) && is_string($row['social_media'])) {
                    $row['social_media'] = json_decode($row['social_media'], true);
                }
            }
        }
        return $data;
    }

    // Get only active team members by default
    public function getActiveMembers()
    {
        return $this->where('is_active', 1)->findAll();
    }
}
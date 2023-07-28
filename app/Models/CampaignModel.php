<?php

namespace App\Models;

use CodeIgniter\Model;

class CampaignModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'program';
    protected $primaryKey       = 'id_program';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'slug', 'image', 'description', 'target_donation', 'status_donation', 'total_donation', 'start_date', 'end_date'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getTopCampaign()
    {
        $db      = \Config\Database::connect();

        $builder = $this->db->table('transaction');
        $builder->select('*');
        $builder->join('program', 'transaction.id_transaction = program.id_program');
        $query = $builder->get();

        $results = $query->getResult();

        // $query = $this->db->table('program')
        // ->select('*')
        // // ->join('transaction', 'transaction.id_program = program.id_program')
        // // ->where('table1.column', 'value')
        // ->get();

    $results = $query->getResult();
    }

}

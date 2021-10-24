<?php

namespace App\Models;
use CodeIgniter\Model;

class statusModel extends Model{
    protected $table = 'fr_status';
    protected $primaryKey = 's_id';
    protected $allowedFields = ['s_id','s_name'];
}
?>
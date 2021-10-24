<?php

namespace App\Models;
use CodeIgniter\Model;

class RunModel extends Model{
    protected $table = 'regis';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['ID','member','category_run','status_id'];
}
?>
<?php

namespace App\Models;

use CodeIgniter\Model;

class HelpdeskModel extends Model
{
    protected $table = 'helpdesks';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'address',
        'pincode',
        'phone'
    ];
}
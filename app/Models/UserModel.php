<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Ensure this matches your database table
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'role'];
    protected $useTimestamps = true;
}

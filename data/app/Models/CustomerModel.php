<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CustomerModel extends Authenticatable
{
    use HasFactory;
    protected $table = 'customer'; // Ensure this matches the actual table name in the database.
    protected $fillable = [
        'name', 
        'username', 
        'email', 
        'phone', 
        'pin', 
        'owner', 
        'balance', 
        'role',
    ];
}

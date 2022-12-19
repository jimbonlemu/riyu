<?php
namespace App\Models;

use Riyu\Database\Utils\Model;

class User extends Model
{
    protected $table = 'user';

    protected $fillable = [
        'name',
    ];
}
<?php
namespace App\Models;

use Riyu\Database\Utils\Model;

class Test extends Model
{
    protected $table = 'test';

    protected $fillable = [
        'name',
    ];
}
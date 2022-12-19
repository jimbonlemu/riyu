<?php
namespace App\Database\Schema;

use Riyu\Database\Schema\Blueprint;
use Riyu\Database\Schema\Schema;

class User extends Schema
{
    public function up()
    {
        return $this->create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
        });
    }

    public function down()
    {
        return $this->drop('user');
    }

} 
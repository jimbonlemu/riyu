<?php
namespace App\Database\Schema;

use Riyu\Database\Schema\Blueprint;
use Riyu\Database\Schema\Schema;

class Test extends Schema
{
    public function up()
    {
        return $this->create('test', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->unique();
            $table->integer('age')->nullable()->default(0);
            $table->text('description')->nullable();
            $table->foreign('user_id')->references('user');
        });
    }

    public function down()
    {
        return $this->drop('test');
    }

} 
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTables extends Migration
{
    protected $tables = ['admins', 'users'];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->eachTable(function ($table) {
            Schema::create($table, function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->string('name');
                $blueprint->string('email')->unique();
                $blueprint->string('password', 60);
                $blueprint->rememberToken();
                $blueprint->timestamps();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->eachTable(function ($table) {
            Schema::drop($table);
        });
    }

    protected function eachTable(Closure $action)
    {
        foreach ($this->tables as $table) {
            $action($table);
        }
    }
}

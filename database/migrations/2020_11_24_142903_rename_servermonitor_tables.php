<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameServermonitorTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('hosts', 'servermonitor_hosts');
        Schema::rename('checks', 'servermonitor_checks');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('servermonitor_checks', 'checks');
        Schema::rename('servermonitor_hosts', 'hosts');
    }
}

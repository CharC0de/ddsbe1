<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement("ALTER TABLE tbluser CHANGE COLUMN id userid INT(10);");
        DB::statement("ALTER TABLE tbluser MODIFY COLUMN userid INT(10) AUTO_INCREMENT");
    }

    public function down()
    {

        DB::statement("ALTER TABLE tbluser CHANGE COLUMN userid id INT(10);");
        DB::statement("ALTER TABLE tbluser MODIFY COLUMN id INT(10) AUTO_INCREMENT");
    }
};
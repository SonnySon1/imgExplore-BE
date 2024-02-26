<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::unprepared('
            CREATE TRIGGER name BEFORE INSERT ON users FOR EACH ROW
            BEGIN
                INSERT INTO triggers VALUES (NULL);
                SET NEW.name = CONCAT("user_", LPAD(LAST_INSERT_ID(), 10, "0"));
                END

       ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER "name"');
    }
};

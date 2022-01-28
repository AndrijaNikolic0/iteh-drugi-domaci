<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImePrezimePromena extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('poslaniks', function (Blueprint $table) {
            $table->renameColumn('ime_prezime', 'imePrezime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('poslaniks', function (Blueprint $table) {
            $table->renameColumn('imePrezime', 'ime_prezime');
        });
    }
}

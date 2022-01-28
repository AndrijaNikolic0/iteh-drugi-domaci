<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmailNovaKolona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('poslaniks', function (Blueprint $table) {
            $table->after('adresa', function ($table) {
                $table->string('email');
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
        Schema::table('poslaniks', function (Blueprint $table) {
            $table->dropColumn('email');
        });
    }
}

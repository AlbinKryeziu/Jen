<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddServicesToDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->longText('services_1')->nullable();
            $table->longText('services_2')->nullable();;
            $table->longText('services_3')->nullable();;
            $table->integer('price_1')->nullable();;
            $table->integer('price_2')->nullable();;
            $table->integer('price_3')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('services_1');
            $table->dropColumn('services_2');
            $table->dropColumn('services_3');
            $table->dropColumn('price_1');
            $table->dropColumn('price_2');
            $table->dropColumn('price_3');
        });
    }
}

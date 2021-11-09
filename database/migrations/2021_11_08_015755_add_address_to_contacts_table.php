<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressToContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // カラムを追加
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('address');
            $table->string('building_name')->nullable();
        });
        // カラム名を変更
        Schema::table('contacts', function (Blueprint $table) {
            $table->renameColumn('tel', 'postcode');
            $table->renameColumn('contents', 'opinion');
        });

        // 型を変更
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('postcode')->char(8)->change();
            $table->string('postcode')->notnull()->change();
            $table->string('gender')->tinyint()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
        });
    }
}

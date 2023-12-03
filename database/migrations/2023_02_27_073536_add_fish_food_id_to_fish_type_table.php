<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::table('fish_types', function (Blueprint $table) {
                $table->unsignedBigInteger('fish_food_id')->after('fcr')->required();
                $table->foreign('fish_food_id')->references('id')->on('fish_food');
            });
        }
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::table('fish_types', function (Blueprint $table) {
                $table->dropForeign(['fish_food_id']);
                $table->dropColumn('fish_food_id');
            });
        }
};

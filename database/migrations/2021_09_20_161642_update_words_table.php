<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('words', function (Blueprint $table) {
            $table->foreignId('category_id')
            ->nullable()
            ->after('id')
            ->constrained('categories')
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('words', function (Blueprint $table) {
            $table->dropForeign('words_category_id_foreign');
            $table->dropColumn('category_id');
        });
    }
}

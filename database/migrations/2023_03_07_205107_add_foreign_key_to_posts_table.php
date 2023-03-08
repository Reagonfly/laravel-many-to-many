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
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')
                ->nullable('')
                ->after('id');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('sett null');

            $table->string('excerpt', 150)->nullable();
            $table->string('author', 70)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('post_category_id_foreign');

            $table->dropColumn('category_id');
        });
    }
};

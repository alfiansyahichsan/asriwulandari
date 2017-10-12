<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsriblogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asriblogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');
            $table->integer('created_by');
            $table->text('title');
            $table->text('subtitle');
            $table->text('img_header')->nullable();
            $table->text('content');
            $table->string('category');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asriblogs');
    }
}

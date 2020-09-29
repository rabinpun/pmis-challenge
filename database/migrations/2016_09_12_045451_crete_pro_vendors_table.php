<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteProVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('contact');
            $table->string('image');
            $table->string('file');
            $table->text('description')->nullable();

            $table->timestamps();
            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('pro_users')->onDelete('cascade');
            $table->integer('updated_by')->unsigned();
            $table->foreign('updated_by')->references('id')->on('pro_users')->onDelete('cascade');
            $table->softDeletes();
            $table->boolean('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pro_vendors');
    }
}

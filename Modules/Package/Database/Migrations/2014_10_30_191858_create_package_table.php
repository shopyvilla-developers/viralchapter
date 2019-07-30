<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('price')->nullable();
            $table->integer('validity'); 
            $table->integer('number_of_listings');
            $table->integer('number_of_categories');
            $table->integer('number_of_tags');
            $table->integer('number_of_photos');
            $table->integer('ability_to_add_video')->nullable();
            $table->integer('ability_to_add_contact_form')->nullable();
            $table->integer('is_recommended')->nullable();
            $table->integer('featured')->nullable();
            $table->integer('packages_type')->comment('0 = Free, 1 = Paid');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}

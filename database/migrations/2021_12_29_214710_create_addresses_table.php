<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('address_type_id')->references('id')->on('address_types')->nullable();
            $table->foreignId('contact_id')->references('id')->on('contacts');
            $table->string('pobox_no', 10)->nullable();
            $table->string('unit_no', 10)->nullable();
            $table->string('street_no', 10)->nullable();
            $table->string('property_name', 50)->nullable();
            $table->string('street_name', 200)->nullable();
            $table->string('street_type', 100)->nullable();
            $table->string('suburb', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 20)->nullable();
            $table->string('post_code', 10)->nullable();
            $table->foreignId('created_by');
            $table->foreignId('updated_by');
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
        Schema::dropIfExists('addresses');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->char('first_name')->nullable()->default(null);
            $table->char('last_name')->nullable()->default(null);
            $table->char('full_name')->nullable()->default(null);
            $table->char('email')->nullable()->default(null);
            $table->char('phone_number')->nullable()->default(null);
            $table->text('facebook')->nullable()->default(null);
            $table->char('avatar')->nullable()->default(null);
            $table->boolean('is_actived');
            $table->boolean('is_blocked');
            $table->double('average_point');
            $table->char('register_source')->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->tinyInteger('status')->nullable()->default(0);
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
        Schema::drop('"customer"');
    }
}

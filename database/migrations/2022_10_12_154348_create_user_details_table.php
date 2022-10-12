<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('user_number');
            $table->string('gender');
            $table->string('blood_group');
            $table->text('address');
            $table->string('phone');
            $table->string('string');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_user')
            ->references('id')->on('users')
                ->onUpdate(DB::row('NO ACTION'))
                ->onDelete(DB::row('NO ACTION'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->string('username',30)->unique();
            $table->string('national_id',30)->unique();
            $table->string('phone',30);
            $table->string('thana',30)->nullable();
            $table->string('district',30)->nullable();
            $table->string('zip_code',30)->nullable();
            $table->string('address')->nullable();
            $table->integer('sponsor_id');
            $table->string('dealer_code',20);

            $table->string('rank',50)->nullable();
            $table->double('balance', 11,2);
            $table->double('bonus',11,2);
            $table->double('carry',11,2);
            $table->double('pv',11,2);
            $table->double('total_pv',11,2);
            $table->double('total_sponsor',11,2);
            $table->double('total_bonus',11,2);

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('transaction_password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

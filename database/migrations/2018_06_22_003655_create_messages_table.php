<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('msg')->unique();
            $table->integer('from_user_id');
            $table->integer('to_user_id');
            $table->timestamps();

             // `sender_id` field referenced the `id` field of `users` table:
            $table->foreign('from_user_id')
                  ->references('id')
                  ->on('users');

            // Let's add another foreign key on the same table,
            // but this time fot the `sent_to_id` field:
            $table->foreign('to_user_id')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}

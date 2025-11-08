<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsOutboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('sms_outboxes', function (Blueprint $table) {
        $table->id();
        $table->string('fullname')->nullable();
        $table->string('phone');
        $table->text('message');
        $table->enum('status', ['pending', 'sent', 'failed'])->default('pending');
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
        Schema::dropIfExists('sms_outboxes');
    }
}

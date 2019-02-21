<?php namespace Nathan\Contact\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('nathan_contact_messages', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('email_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nathan_contact_messages');
    }
}

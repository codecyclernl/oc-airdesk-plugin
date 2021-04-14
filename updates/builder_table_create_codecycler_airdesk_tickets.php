<?php namespace Codecycler\Airdesk\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodecyclerAirdeskTickets extends Migration
{
    public function up()
    {
        Schema::create('codecycler_airdesk_tickets', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('channel_id')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('due_at')->nullable();
            $table->integer('organisation_id')->nullable();
            $table->integer('contact_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('codecycler_airdesk_tickets');
    }
}

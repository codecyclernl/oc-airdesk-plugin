<?php namespace Codecycler\Airdesk\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodecyclerAirdeskLogs extends Migration
{
    public function up()
    {
        Schema::create('codecycler_airdesk_logs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('organisation_id')->nullable();
            $table->integer('contact_id')->nullable();
            $table->integer('type_id')->nullable();
            $table->text('notes')->nullable();
            $table->string('subject')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('codecycler_airdesk_logs');
    }
}

<?php namespace Codecycler\Airdesk\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodecyclerAirdeskOrganisations extends Migration
{
    public function up()
    {
        Schema::create('codecycler_airdesk_organisations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('status_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('codecycler_airdesk_organisations');
    }
}

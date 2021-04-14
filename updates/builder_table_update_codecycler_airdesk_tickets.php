<?php namespace Codecycler\Airdesk\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodecyclerAirdeskTickets extends Migration
{
    public function up()
    {
        Schema::table('codecycler_airdesk_tickets', function($table)
        {
            $table->dateTime('due_at')->nullable()->unsigned(false)->default(null)->change();
        });
    }

    public function down()
    {
        Schema::table('codecycler_airdesk_tickets', function($table)
        {
            $table->integer('due_at')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}

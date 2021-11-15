<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tasklists_id');
            $table->foreignId('user_id');
            $table->string('name');
            $table->date('reminder_datetime');
            $table->date('due_date');
            $table->text('attachment_url');
            $table->text('note');
            $table->boolean('is_complete')->default(0);
            $table->boolean('is_my_day')->default(0);
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
        Schema::dropIfExists('tasks');
    }
}

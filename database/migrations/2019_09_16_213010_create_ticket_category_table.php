<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export (1.5.0)
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateTicketCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid');
            $table->unsignedInteger('event_id');
            $table->string('ticket_category_name', 255);
            $table->text('ticket_category_description')->nullable();
            $table->decimal('ticket_category_price', 10, 2);
            $table->unsignedInteger('no_of_tickets')->nullable();
            $table->unsignedInteger('no_of_tickets_left')->nullable();
            $table->timestamp('ticket_category_start_date')->nullable();
            $table->timestamp('ticket_category_end_date')->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_categories');
    }
}

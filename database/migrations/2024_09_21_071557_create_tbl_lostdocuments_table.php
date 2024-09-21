<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_lostdocuments', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('gender', 50);
            $table->string('phone', 50);
            $table->string('status', 50);
            $table->char('doc_type', 1);
            $table->string('doc_no', 50);
            $table->string('doc_link', 255); // Assuming it's a URL
            $table->char('doc_county', 3);
            $table->text('doc_location');
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_lostdocuments');
    }
};

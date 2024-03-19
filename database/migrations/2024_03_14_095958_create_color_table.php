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
        Schema::create('color', function (Blueprint $table) {
            $table->string('name', 200)->nullable();
            $table->string('code')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('is_delete')->default(0);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('created_by')->nullable();
            $table->integer('id', true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('color');
    }
};

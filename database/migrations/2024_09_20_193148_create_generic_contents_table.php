<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenericContentsTable extends Migration
{
    public function up()
    {
        Schema::create('generic_contents', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->text('value');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('generic_contents');
    }
}

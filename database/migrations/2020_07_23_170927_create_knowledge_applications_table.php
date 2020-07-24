<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowledgeCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowledge_candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_candidate')->unsigned();
            $table->bigInteger('id_knowledge')->unsigned();
            $table->integer('grade')->unsigned();
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
        Schema::dropIfExists('knowledge_candidates');
    }
}

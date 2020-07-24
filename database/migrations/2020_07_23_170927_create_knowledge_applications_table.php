<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowledgeApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowledge_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_application')->unsigned();
            $table->bigInteger('id_knowledge')->unsigned();
            $table->integer('grade')->unsigned();
            $table->timestamps();

            $table->foreign('id_application')
                ->references('id')
                ->on('applications')
                ->onUpdate('NO ACTION')
                ->onDelete('CASCADE');
            $table->foreign('id_knowledge')
                ->references('id')
                ->on('knowledge')
                ->onUpdate('NO ACTION')
                ->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('knowledge_applications');
    }
}

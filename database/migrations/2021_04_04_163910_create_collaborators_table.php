<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaboratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained('users')
            ->onDelete('cascade');

            $table->foreignId('manager_id')->nullable();
            $table->foreignId('created_by')->nullable();

            $table->string('name')->nullable();
            $table->string('cpf', 14)->nullable();
            $table->string('cep')->nullable();
            $table->string('ocupattion')->nullable();
            $table->date('dt_birth')->nullable();
            $table->text('address')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('collaborators');
    }
}

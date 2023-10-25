<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('school')->comment('學校');
            $table->string('academic_system')->comment('學制');
            $table->foreignId('mid')->comment('縣市');
            $table->foreign('mid')
                    ->references('id')
                    ->on('mes')
                    ->onDelete('cascade');
            $table->string('public_and_private')->comment('公私立');
            $table->string('address')->comment('地址');
            $table->string('phone')->comment('電話');
            $table->double ('school_area')->comment('學校面積');
            $table->date ('year_of_establishment')->comment('成立年份');
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
        Schema::dropIfExists('schools');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Discussion;
use App\Models\Master;
use App\Models\Champion;

class CreateDiscussionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussions', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60);
            $table->text('message');
            $table->unsignedBigInteger('master_id')->nullable();
            $table->unsignedBigInteger('champion_id')->nullable();
            $table->foreign('master_id')->references('id')->on('masters')->onDelete('cascade');
            $table->foreign('champion_id')->references('id')->on('champions')->onDelete('cascade');
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
        Schema::dropIfExists('discussions');
    }
}

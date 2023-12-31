<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
/**
* Run the migrations.
*/
public function up(): void
{
Schema::create('bmis', function (Blueprint $table) {
$table->id();
$table->float('bmi');
$table->float('height');
$table->float('weight');


// $table->unsignedBigInteger('rec_id')->nullable();
// $table->foreign('rec_id')->references('id')->on('recommends');


$table->unsignedBigInteger('user_id');
$table->foreign('user_id')->references('id')->on('users');
$table->softDeletes();
$table->timestamps();
});
}


/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::dropIfExists('bmis');


}
};




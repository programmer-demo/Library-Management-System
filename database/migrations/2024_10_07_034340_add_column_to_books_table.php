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
        Schema::table('books', function (Blueprint $table) {
            $table->string('barcode')->uniqid();
            $table->string('author')->nullable();
            $table->datetime('written_in')->nullable();
        });
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->string('student_idcard')->nullable();
            $table->string('student_name')->nullable();
            $table->string('student_gender')->nullable();
            $table->string('student_faculty')->nullable();
            $table->unsignedBigInteger('book_id')->unsigned()
                ->foreign('book_id')
                ->references('id')
                ->on('books')
                ->onDelete('no action');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('barcode');
            $table->dropColumn('author');
            $table->dropColumn('written_in');
        });
        Schema::dropIfExists('borrows');
    }
};

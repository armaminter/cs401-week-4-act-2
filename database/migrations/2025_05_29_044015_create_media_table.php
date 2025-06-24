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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->comment('name of the file');
            $table->string('file_type')->comment('type of the file');
            $table->integer('file_size')->comment('size of the file')->nullable();
            $table->string('url')->comment('url of the media');
            $table->timestamp('upload_date')->comment('date of publication');
            $table->string('description')->comment('description of the media');
        
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};

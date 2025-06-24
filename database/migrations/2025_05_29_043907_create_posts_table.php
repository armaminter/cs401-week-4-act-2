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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('title of the post table');
            $table->text('description')->nullable()->comment('short summary or meta description of the post');
            $table->text('content')->comment('content of the post table');
            $table->string('slug')->comment('slug is the url identifier for the post');
            $table->timestamp('publication_date')->comment('timestamp of the post table')->nullable();
            $table->timestamp('last_modified_date')->comment('timestamp of the last modified date')->nullable();
            $table->string('status')->comment('D - Draft, P - Published, I - Inactive');
            $table->string('featured_image_url')->comment('url of the featured image');
            $table->integer('views_count')->comment('total view count')->default(0);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

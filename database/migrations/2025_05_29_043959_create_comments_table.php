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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment_content')->comment('the comment for the content');
            $table->timestamp('comment_date')->comment('date of the comment');
            $table->string('reviewer_name')->comment('the name of the reviewer');
            $table->string('reviewer_email')->comment('the email of the reviewer');
            $table->boolean('is_hidden')->comment('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};

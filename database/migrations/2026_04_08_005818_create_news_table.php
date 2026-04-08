<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('content');

            // Media
            $table->string('featured_image')->nullable();
            $table->string('featured_image_alt')->nullable();

            // Publishing
            $table->string('status')->default('draft');
            $table->timestamp('published_at')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('canonical_url')->nullable();

            // Relations
            $table->foreignId('author_id')->nullable()->constrained('users')->nullOnDelete();

            // Optional metrics / flags
            $table->unsignedBigInteger('views_count')->default(0);
            $table->boolean('is_featured')->default(false);

            // System
            $table->softDeletes();
            $table->timestamps();

            // Indexes
            $table->index('status');
            $table->index('published_at');
            $table->index('is_featured');
            $table->index(['status', 'published_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};

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
        Schema::create('joblistings', function (Blueprint $table) {
            $table->id();

            // Basic Info
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('employment_type', 50)->index();
            // full_time, part_time, contract, internship, freelance, temporary

            $table->string('workplace_type', 30)->index()->nullable();
            // onsite, remote, hybrid

            $table->string('department')->nullable()->index();
            $table->string('team')->nullable()->index();

            // Location
            $table->string('country', 100)->nullable()->index();
            $table->string('city', 100)->nullable()->index();
            $table->string('location_text')->nullable();
            // "Surabaya, Indonesia" / "Remote - Indonesia"

            // Content
            $table->longText('summary')->nullable();
            $table->longText('description');
            $table->longText('responsibilities')->nullable();
            $table->longText('requirements')->nullable();
            $table->longText('nice_to_have')->nullable();
            $table->longText('benefits')->nullable();

            // Salary
            $table->unsignedBigInteger('salary_min')->nullable();
            $table->unsignedBigInteger('salary_max')->nullable();
            $table->string('salary_period', 20)->nullable(); // monthly, yearly, hourly
            $table->boolean('salary_visible')->default(false)->index();

            // Vacancy / Hiring
            $table->unsignedInteger('vacancies')->nullable();
            $table->boolean('is_urgent')->default(false)->index();

            // Status & Visibility
            $table->string('status', 30)->default('draft')->index();
            // draft, published, closed, archived

            $table->boolean('is_active')->default(false)->index();
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamp('expires_at')->nullable()->index();
            $table->timestamp('closed_at')->nullable()->index();

            // SEO / Meta
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            // Audit
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
            $table->softDeletes();

            // Composite indexes for filtering
            $table->index(['status', 'is_active']);
            $table->index(['employment_type', 'workplace_type']);
            $table->index(['country', 'city']);
            $table->index(['published_at', 'expires_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joblistings');
    }
};

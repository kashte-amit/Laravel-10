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
            $table->string('title', 100); //255
            $table->text('description');
            $table->boolean('status');
            $table->timestamps(); // created_at and updated_at

            // More Data Types
            // $table->date('date');
            // $table->dateTime('date_time');
            // $table->time('time');

            // $table->decimal('decimal')->nullable();
            // $table->double('double')->default(0);
            // $table->float('float');
            // $table->integer('integer');

            // Migration commands

            // php artisan make:migration create_test_table
            // php artisan migrate
            // php artisan migrate --path=/database/migrations/2023_09_16_200823_create_posts_table.php ( migrate single file)

            // php artisan migrate:reset
            // php artisan migrate:rollback
            // php artisan migrate:refresh

            // php artisan make:migration add_posts_table --table=posts
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

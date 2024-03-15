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
        Schema::disableForeignKeyConstraints();

        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_name');
            $table->string('job_position');
            $table->text('job_description');
            $table->json('skills');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('company_id')->references('id')->on('companies')
            ->restrictOnDelete()
            ->cascadeOnUpdate();     
            $table->foreign('category_id')->references('id')->on('company_categories')
            ->restrictOnDelete()
            ->cascadeOnUpdate();
            $table->timestamp('created_at')->useCurrent(); 
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('jobs');
    }
};

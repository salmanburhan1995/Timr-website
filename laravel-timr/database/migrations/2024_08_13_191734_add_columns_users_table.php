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
        Schema::table('users', function($table) {
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('role_id')->default(1);
            $table->integer('client_id')->nullable();
            $table->string('avatar_id')->nullable();
            $table->string('avatar_path')->nullable();
            $table->string('two_factor_secret')->nullable();
            $table->string('two_factor_recovery_code')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('google_id')->nullable();
            $table->string('linkedin_id')->nullable();
            $table->string('position')->nullable();
            $table->boolean('is_primary_contact')->default(false);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function($table) {
            $table->dropColumn('first_name')->nullable();
            $table->dropColumn('last_name')->nullable();
            $table->dropColumn('middle_name')->nullable();
            $table->dropColumn('phone_number')->nullable();
            $table->dropColumn('company_id')->nullable();
            $table->dropColumn('role_id')->default(1);
            $table->dropColumn('client_id')->nullable();
            $table->dropColumn('avatar_id')->nullable();
            $table->dropColumn('avatar_path')->nullable();
            $table->dropColumn('two_factor_secret')->nullable();
            $table->dropColumn('two_factor_recovery_code')->nullable();
            $table->dropColumn('address')->nullable();
            $table->dropColumn('zip_code')->nullable();
            $table->dropColumn('city')->nullable();
            $table->dropColumn('country')->nullable();
            $table->dropColumn('google_id')->nullable();
            $table->dropColumn('linkedin_id')->nullable();
            $table->dropColumn('position')->nullable();
            $table->dropColumn('is_primary_contact')->default(false);
        });
    }
};

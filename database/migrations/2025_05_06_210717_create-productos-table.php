<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            if (!Schema::hasColumn('productos', 'name')) {
                $table->string('name')->after('id');
            }
            
            if (!Schema::hasColumn('productos', 'status')) {
                $table->string('status')->after('name');
            }
            
            if (!Schema::hasColumn('productos', 'deleted_at')) {
                $table->softDeletes();
            }
        });
    }

    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn(['name', 'status', 'deleted_at']);
        });
    }
};

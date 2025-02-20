<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('rendez_vous', function (Blueprint $table) {
            $table->dateTime('date_heure_fin')->after('date_heure')->nullable();
        });
    }

    public function down(): void {
        Schema::table('rendez_vous', function (Blueprint $table) {
            $table->dropColumn('date_heure_fin');
        });
    }
};

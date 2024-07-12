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
        Schema::table('comics', function (Blueprint $table) {
            $table->tinyText("title");
            $table->text("description");
            $table->tinyText("thumb");
            $table->tinyText("price");
            $table->tinyText("series");
            $table->date("sale_date");
            $table->tinyText("type");
            $table->Text("artists");
            $table->Text("writers");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->dropColumn("title");
            $table->dropColumn("description");
            $table->dropColumn("thumb");
            $table->dropColumn("price");
            $table->dropColumn("series");
            $table->dropColumn("sale_date");
            $table->dropColumn("type");
            $table->dropColumn("artists");
            $table->dropColumn("writers");
        });
    }
};

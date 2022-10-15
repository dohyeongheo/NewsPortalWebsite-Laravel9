<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->text('about_title');
            $table->text('about_detail');
            $table->text('about_status');
            $table->text('faq_title');
            $table->text('faq_detail');
            $table->text('faq_status');
            $table->text('contact_title');
            $table->text('contact_detail');
            $table->text('contact_map');
            $table->text('terms_title');
            $table->text('terms_detail');
            $table->text('terms_status');
            $table->text('privacy_title');
            $table->text('privacy_detail');
            $table->text('privacy_status');
            $table->text('disclaimer_title');
            $table->text('disclaimer_detail');
            $table->text('disclaimer_status');
            $table->text('login_title');
            $table->text('login_detail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
};

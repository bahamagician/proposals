<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->string('prepared_for');
            $table->string('phone');
            $table->string('email');
            $table->text('client_needs');
            $table->integer('number_of_pages')->unsigned();
            $table->boolean('cms')->default(false);
            $table->boolean('analytics')->default(false);
            $table->boolean('hosting')->default(false);
            $table->boolean('domain_name')->default(false);
            $table->boolean('social_media')->default(false);
            $table->boolean('logo')->default(false);
            $table->boolean('mailing_list')->default(false);
            $table->boolean('facebook_profile')->default(false);
            $table->boolean('e_commerce')->default(false);
            $table->string('sitemap');
            $table->string('total_time');
            $table->integer('discount_percentage')->unsigned();
            $table->integer('discount_dollar')->unsigned();
            $table->integer('additional_cost')->unsigned();
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
        Schema::dropIfExists('proposals');
    }
}

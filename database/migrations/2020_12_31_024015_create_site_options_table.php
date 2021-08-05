<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;

class CreateSiteOptionsTable extends Migration
{
    private $copyrightText = "Copyright © 2020 The Test Coder By Youtube | All rights reserved.";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_options', function (Blueprint $table) {
            $table->id();
            $table->string('option_name')->default("");
            $table->longText('option_value')->nullable();
            $table->timestamps();
        });

        DB::table('site_options')->insert(
            [
                $this->buildOption("site_name", "Lara Blog"),
                $this->buildOption("site_logo", null),
                $this->buildOption("site_description", null),
                $this->buildOption("copyright_text", $this->copyrightText),
                $this->buildOption("site_phone", "123456789"),
                $this->buildOption("site_email", "thetestcoder@gmail.com"),
                $this->buildOption("site_social_links", null),
                $this->buildOption("site_owner_social_links", null),
                $this->buildOption("site_owner_bio", null),
                $this->buildOption("site_owner_avatar", null),
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_options');
    }

    /**
     * @param string $option_name
     * @param $option_value
     * @return array
     */
    private function buildOption(string $option_name, $option_value): array
    {
        return [
            "option_name" => $option_name,
            "option_value" => $option_value
        ];
    }
}

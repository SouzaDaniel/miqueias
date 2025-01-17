<?php

namespace Database\Seeders;

use App\Models\Office;
use Faker\Factory;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
  public function run()
  {
    $faker = Factory::create();

    $offices = array([
      "name" => 'Miqueias Costa',
      "email" => 'miqueiascostaadv@gmail.com',
      "identification_document" => '42620348000121',
      "ccm" => $faker->bothify('######'),
      "oab" => '18.861',
      "state_oab" => 11,
    ]);

    foreach ($offices as $value) {
      $value = (object) $value;

      Office::create([
        "name" => $value->name,
        "email" => $value->email,
        "identification_document" => $value->identification_document,
        "ccm" => $value->ccm,
        "oab" => $value->oab,
        "state_oab" => $value->state_oab,
      ]);
    }

    if (app()->environment('local')) {
      Office::truncate();

      Office::factory(20)->create();
    }
  }
}

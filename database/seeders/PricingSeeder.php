<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pricing;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        $priceData = [
            "L1" => 10,
            "L2" => 15,
            "L3" => 20,
            "L4" => 25
        ];

        Pricing::create([
            'price' => json_encode($priceData),
            'tax' => 10
        ]);
    }
}

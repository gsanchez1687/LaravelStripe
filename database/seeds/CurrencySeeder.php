<?php

use Illuminate\Database\Seeder;
use App\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currency = [
            ['name' => 'Euro', 'symbol' => '€', 'code' => 'EUR', 'exchange_rate' => 1.0, 'status' => 'Active', 'description' => 'Euro'],
            ['name' => 'Dollar', 'symbol' => '$', 'code' => 'USD', 'exchange_rate' => 1.0, 'status' => 'Active', 'description' => 'Dollar'],
            ['name' => 'Pound', 'symbol' => '£', 'code' => 'GBP', 'exchange_rate' => 1.0, 'status' => 'Active', 'description' => 'Pound'],
        ];

        foreach ($currency as $key => $value) {
            Currency::create($value);
        }
    }
}

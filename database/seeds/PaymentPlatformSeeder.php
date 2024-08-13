<?php

use Illuminate\Database\Seeder;
use App\PaymentPlatform;

class PaymentPlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentPlatform = [
            [
                'name' => 'Stripe',
                'description' => 'Stripe',
                'logo' => 'stripe.jpg',
            ],
            [
                'name' => 'PayPal',
                'description' => 'PayPal',
                'logo' => 'paypal.jpg',
            ]
        ];

        foreach ($paymentPlatform as $key => $value) {
            PaymentPlatform::create($value);
        }
    }
}

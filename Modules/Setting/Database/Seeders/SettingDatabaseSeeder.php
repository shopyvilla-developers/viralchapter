<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::setMany([
            'active_theme' => 'Storefront',
            'supported_countries' => ['BD'],
            'default_country' => 'BD',
            'supported_locales' => ['en'],
            'default_locale' => 'en',
            'default_timezone' => 'Asia/Dhaka',
            'customer_role' => 2,
            'reviews_enabled' => true,
            'auto_approve_reviews' => true,
            'supported_currencies' => ['USD'],
            'default_currency' => 'USD',
            'send_order_invoice_email' => false,
            
            'search_engine' => 'mysql',
            'local_pickup_cost' => 0,
            'flat_rate_cost' => 0,
            'translatable' => [
                'store_name' => 'CloudCMS',
                
                'paypal_express_label' => 'PayPal Express',
                'paypal_express_description' => 'Pay via your PayPal account.',
                'stripe_label' => 'Stripe',
                'stripe_description' => 'Pay via credit or debit card.',
                'instamojo_label' => 'Instamojo',
                'instamojo_description' => 'CC/DB/NB/Wallets',
                 
               
                'bank_transfer_label' => 'Bank Transfer',
                'bank_transfer_description' => 'Make your payment directly into our bank account. Please use your Order ID as the payment reference.',
                'check_payment_label' => 'Check / Money Order',
                'check_payment_description' => 'Please send a check to our store.',
            ],
 
        ]);
    }
}

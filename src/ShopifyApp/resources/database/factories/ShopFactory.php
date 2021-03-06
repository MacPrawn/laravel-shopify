<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Config;

$model = Config::get('shopify-app.shop_model');

$factory->define($model, function (Faker $faker) {
    return [
        'name'     => "{$faker->domainWord}.myshopify.com",
        'password' => str_replace('-', '', $faker->uuid),
        'email'    => $faker->email,
    ];
});

$factory->state($model, 'freemium', [
    'shopify_freemium' => true,
]);

$factory->state($model, 'grandfathered', [
    'shopify_grandfathered' => true,
]);

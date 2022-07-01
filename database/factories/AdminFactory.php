<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=> "Admin",
            "email"=> "admin@gmail.com",
            "password"=> Hash::make('password'),
            "roles"=>[
                'categories', 
                'products', 
                'sliders', 
                'coupons', 
                'shipping', 
                'blogs', 
                'setting',
                "orders",
                "return_order",
                "reports",
                "users",
                "admins"
                ]
        ];
    }
}

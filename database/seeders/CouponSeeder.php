<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code' => 'ABC',
            'type' => Coupon::FIXED,
            'value' => 10,
        ]);

        Coupon::create([
            'code' => '123',
            'type' => Coupon::PERCENTAGE,
            'value' => 10,
        ]);
    }
}

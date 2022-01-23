<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Products = [
            [
                'name' => 'Black Glasses',
                'details' => 'Dalston',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 59,
                'shipping_cost' => 19,
                'sex'=>'both',
                'age'=>'adults',
                'image_path' => 'imgs/black/black_main.webp',
                'product_image' => 'imgs/black/black_product.jpg',
                'side_image' => 'imgs/black/black_side.webp',
                'man_image' => 'imgs/black/black_model_man.jpg',
                'women_image' => 'imgs/black/black_model_women.webp'
            ],
            [
                'name' => 'Blue Glasses',
                'details' => 'Le marais ',
                'sex'=>'both',
                'age'=>'adults',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 59,
                'shipping_cost' => 19,
                'image_path' => 'imgs/blue/blue_main.webp',
                'product_image' => 'imgs/blue/black_product.jpg',
                'side_image' => 'imgs/blue/blue_side.webp',
                'man_image' => 'imgs/blue/blue_model_main.webp',
                'women_image' => 'imgs/blue/blue_model_women.webp'
            ],
            [
                'name' => 'Blue Havana',
                'details' => 'Le marais ',
                'sex'=>'both',
                'age'=>'adults',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 79,
                'shipping_cost' => 19,
                'image_path' => 'imgs/BlueHavana/Blue_havana_main .webp',
                'product_image' => 'imgs/BlueHavana/Blue_havana_product .jpg',
                'side_image' => 'imgs/BlueHavana/Blue_havana_side .webp',
                'man_image' => 'imgs/BlueHavana/Blue_havana_model_man .jpg',
                'women_image' => 'imgs/BlueHavana/Blue_havana_model_women .jpg'
            ],
            [
                'name' => 'Blue Steel',
                'details' => 'Le marais ',
                'sex'=>'both',
                'age'=>'adults',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 39,
                'shipping_cost' => 19,
                'image_path' => 'imgs/BlueSteel/Blue_steel_main .webp',
                'product_image' => 'imgs/BlueSteel/Blue_steel_product .webp',
                'side_image' => 'imgs/BlueSteel/Blue_steel_side .webp',
                'man_image' => 'imgs/BlueSteel/Blue_steel_model_man .webp',
                'women_image' => 'imgs/BlueSteel/Blue_steel_model_women .webp'
            ],
            [
                'name' => 'Bright Sky',
                'details' => 'Le marais ',
                'sex'=>'both',
                'age'=>'adults',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 59,
                'shipping_cost' => 19,
                'image_path' => 'imgs/BrightSky/Bright_sky_main.webp',
                'product_image' => 'imgs/BrightSky/Bright_sky_product .jpg',
                'side_image' => 'imgs/BrightSky/Bright_sky_side.webp',
                'man_image' => 'imgs/BrightSky/Bright_sky_model_man .webp',
                'women_image' => 'imgs/BrightSky/Bright_sky_model_women .webp'
            ],
            [
                'name' => 'Classic Blue',
                'details' => 'Le marais ',
                'sex'=>'both',
                'age'=>'adults',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 59,
                'shipping_cost' => 19,
                'image_path' => 'imgs/ClassicBlue/Classic_blue_main .webp',
                'product_image' => 'imgs/ClassicBlue/Classic_blue_product .webp',
                'side_image' => 'imgs/ClassicBlue/Classic_blue_side .webp',
                'man_image' => 'imgs/ClassicBlue/Classic_blue_model_man .jpg',
                'women_image' => 'imgs/ClassicBlue/Classic_blue_model_women .webp'
            ],
            [
                'name' => 'Classic Red',
                'details' => 'Le marais ',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'sex'=>'both',
                'age'=>'adults',
                'price' => 59,
                'shipping_cost' => 19,
                'image_path' => 'imgs/ClassicRed/Classic_red _main.webp',
                'product_image' => 'imgs/ClassicRed/Classic_red_product .webp',
                'side_image' => 'imgs/ClassicRed/Classic_red_side .webp',
                'man_image' => 'imgs/ClassicRed/Classic_red_model_man .jpg',
                'women_image' => 'imgs/ClassicRed/Classic_red_model_women .webp'
            ],
            [
                'name' => 'Cocomut Milk',
                'details' => 'Le marais ',
                'sex'=>'both',
                'age'=>'adults',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 59,
                'shipping_cost' => 19,
                'image_path' => 'imgs/CoconutMilk/Coconut_milk_main.webp',
                'product_image' => 'imgs/CoconutMilk/Coconut_milk_product.webp',
                'side_image' => 'imgs/CoconutMilk/Coconut_milk_side.webp',
                'man_image' => 'imgs/CoconutMilk/Coconut_milk_model_man.jpg',
                'women_image' => 'imgs/CoconutMilk/Coconut_milk_model_women.webp'
            ],
            [
                'name' => 'Crystal Brown',
                'details' => 'Crystal Brown ',
                'sex'=>'both',
                'age'=>'adults',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 59,
                'shipping_cost' => 19,
                'image_path' => 'imgs/CrystalBrown/Crystal_brown_main .webp',
                'product_image' => 'imgs/CrystalBrown/Crystal_brown_product .webp',
                'side_image' => 'imgs/CrystalBrown/Crystal_brown_side .webp',
                'man_image' => 'imgs/CrystalBrown/Crystal_brown_model_man .jpg',
                'women_image' => 'imgs/CrystalBrown/Crystal_brown_model_women .webp'
            ],
            [
                'name' => 'Dark Blue',
                'details' => 'Le marais ',
                'sex'=>'both',
                'age'=>'adults',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 59,
                'shipping_cost' => 19,
                'image_path' => 'imgs/Darkblue/dark_blue_main.webp',
                'product_image' => 'imgs/Darkblue/dark_blue_product.webp',
                'side_image' => 'imgs/Darkblue/dark_blue_side.webp',
                'man_image' => 'imgs/Darkblue/dark_blue_model_man.jpg',
                'women_image' => 'imgs/Darkblue/dark_blue_model_women.webp'
            ],
            [
                'name' => 'Dark Green',
                'details' => 'Le marais ',
                'sex'=>'both',
                'age'=>'adults',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 59,
                'shipping_cost' => 19,
                'image_path' => 'imgs/Darkgreen/dark_green_main.webp',
                'product_image' => 'imgs/Darkgreen/dark_green_product.webp',
                'side_image' => 'imgs/Darkgreen/dark_green_sec.webp',
                'man_image' => 'imgs/Darkgreen/dark_green_model_man.jpg',
                'women_image' => 'imgs/Darkgreen/dark_green_model_women.webp'
            ],
            [
                'name' => 'Honey',
                'details' => 'Honey',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 59,
                'shipping_cost' => 19,
                'sex'=>'both',
                'age'=>'adults',
                'image_path' => 'imgs/honey/Honey_main.webp',
                'product_image' => 'imgs/honey/Honey_product.jpg',
                'side_image' => 'imgs/honey/Honey_side.webp',
                'man_image' => 'imgs/honey/Honey_model_man.jpg',
                'women_image' => 'imgs/honey/Honey_model_women.webp'
            ],
            [
                'name' => 'Kids Black',
                'details' => 'black',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 59,
                'shipping_cost' => 19,
                'sex'=>'both',
                'age'=>'kids',
                'image_path' => 'imgs/kids_Black/Black_kids_main.jpg',
                'product_image' => 'imgs/kids_Black/black_kids_product.webp',
                'side_image' => 'imgs/kids_Black/black_kids_side.webp',
                'man_image' => 'imgs/kids_Black/black_kids_model_guy.webp',
                'women_image' => 'imgs/kids_Black/black_kids_model_girl.webp'
            ],
            [
                'name' => 'kids red',
                'details' => 'red',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 59,
                'shipping_cost' => 19,
                'sex'=>'both',
                'age'=>'kids',
                'image_path' => 'imgs/kids_red/red_main.jpg',
                'product_image' => 'imgs/kids_red/red_product.webp',
                'side_image' => 'imgs/kids_red/red_side.webp',
                'man_image' => 'imgs/kids_red/red_model_guy.webp',
                'women_image' => 'imgs/kids_red/red_model_girl.webp'
            ],
            [
                'name' => 'kids Blue',
                'details' => 'Honey',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 59,
                'shipping_cost' => 19,
                'sex'=>'both',
                'age'=>'kids',
                'image_path' => 'imgs/kids_palace_blue/Palace_blue_main .webp',
                'product_image' => 'imgs/kids_palace_blue/Palace_blue_product.webp',
                'side_image' => 'imgs/kids_palace_blue/Palace_blue_side.webp',
                'man_image' => 'imgs/kids_palace_blue/Palace_blue_model_guy.webp',
                'women_image' => 'imgs/kids_palace_blue/Palace_blue_model_girl.webp'
            ],
            [
                'name' => 'kids tortoise',
                'details' => 'tortoise',
                'description' => '
                High quality and stylish computer glasses to 
                protect your eyes from Blue Light of digital devices. 
                It will provide you with better sleep and a healthier life. ',
                'brand' => 'Barner',
                'price' => 59,
                'shipping_cost' => 19,
                'sex'=>'both',
                'age'=>'kids',
                'image_path' => 'imgs/kids_Tortoise/Tortoise_main.webp',
                'product_image' => 'imgs/kids_Tortoise/Tortoise_product.webp',
                'side_image' => 'imgs/kids_Tortoise/Tortoise_side.webp',
                'man_image' => 'imgs/kids_Tortoise/Tortoise_model_guy.webp',
                'women_image' => 'imgs/kids_Tortoise/Tortoise_model_girl.webp'
            ]
        ];
        foreach ($Products as $key => $value) {
            Product::create($value);
            // DB::table('products')->insert($Products);
        }
    }
}

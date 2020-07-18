<?php

use Illuminate\Database\Seeder;
use App\Category;
use Carbon\Carbon;
class categorytableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Category::insert([
             ['title'=>'Laptops','slug'=>'laptops','Created_at' => $now,'updated_at' => $now],
             ['title'=>'Desktops','slug'=>'desktops','Created_at' => $now,'updated_at' => $now],
             ['title'=>'Mobile Phones','slug'=>'mobile-phones','Created_at' => $now,'updated_at'=> $now],
             ['title'=>'Tablets','slug'=>'tablests','Created_at' => $now,'updated_at' => $now],
             ['title'=>'Tvs','slug'=>'tvs','Created_at' => $now,'updated_at' => $now],
             ['title'=>'Digital Cameras','slug'=>'digital camera','Created_at' => $now,'updated_at' => $now],
             ['title'=>'Accessories','slug'=>'accessories','Created_at' => $now,'updated_at' => $now],
        ]);
    }
}

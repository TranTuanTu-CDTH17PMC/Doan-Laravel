<?php

use Illuminate\Database\Seeder;

class ThemAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Admin::create([
        'ten_dang_nhap' => 'admin',
        'mat_khau' => Hash::make('123'),
        'ho_ten' => 'Tu'
    ]);
   }
}

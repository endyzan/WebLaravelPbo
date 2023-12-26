<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            'description'=>"CV. AGRIJAYA adalah perusahaan yang berkembang di bidang distributor obat fumigasi, didirikan oleh Achmad Choirudin pada 2016 dengan produk awal adalah Mephos 56TB.",
            'short_des'=>"CV. AGRIJAYA adalah perusahaan yang berkembang di bidang distributor obat fumigasi, didirikan oleh Achmad Choirudin pada 2016 dengan produk awal adalah Mephos 56TB.",
            'photo'=>"image.jpg",
            'logo'=>'logo.jpg',
            'email'=>"eshop@gmail.com",
            'phone'=>"+060 (800) 801-582",
        );
        DB::table('settings')->insert($data);
    }
}
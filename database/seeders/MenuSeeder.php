<?php

namespace Database\Seeders;

use App\Models\Setup\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run()
    {
        DB::table('menus')->insert([
            [
                'titlemenu_id'=>4,
                'name'=>'Cek data',
                'is_active'=>1,
                'posisi'=>1,
                'icon'=>'fa fa-check',
                'url'=>'/members/cek_data',
            ],
            [
                'titlemenu_id'=>4,
                'name'=>'Daftar ulang',
                'is_active'=>1,
                'posisi'=>2,
                'icon'=>'fa fa-dollar-sign',
                'url'=>'/members/info_daftar_ulang',
            ],
            [
                'titlemenu_id'=>4,
                'name'=>'Fitting seragam',
                'posisi'=>3,
                'is_active'=>1, 
                'icon'=>'fa fa-tshirt',
                'url'=>'/members/fitting_seragam',
            ],
            // INI MENU UNTUK OPERTATOR
            [
                'titlemenu_id'=>2,
                'name'=>'Beranda',
                'posisi'=>1,
                'is_active'=>1,
                'icon'=>'fa fa-home',
                'url'=>'/op/home',
            ],
            [
                'titlemenu_id'=>2,
                'name'=>'Token',
                'posisi'=>2,
                'is_active'=>1, 
                'icon'=>'fa fa-qrcode',
                'url'=>'/tekken',
            ],
            [
                'url'=>'/members/all',
                'titlemenu_id'=>2,
                'posisi'=>3,
                'name'=>'Data Pendaftar', 
                'icon'=>'fa fa-users',
                'is_active'=>1
            ],
            [
                'titlemenu_id'=>2,
                'name'=>'Data Ukuran Baju',
                'posisi'=>4,
                'is_active'=>1,
                 'icon'=>'fa fa-tshirt',
                'url'=>'#',
            ],
            [
                'titlemenu_id'=>2,
                'name'=>'Terima / tolak',
                'posisi'=>5,
                'is_active'=>1,
                 'icon'=>'fa fa-clipboard-check',
                'url'=>'/confirmpage',
            ],
            [
                'titlemenu_id'=>2,
                'name'=>'Status pendaftar',
                'posisi'=>6,
                'is_active'=>1,
                'icon'=>'fa fa-user-check',
                'url'=>'/confirmed',
            ],
            [
                'titlemenu_id'=>1,
                'name'=>'Atur kategori',
                'posisi'=>7,
                'is_active'=>1,
                'icon'=>'fas fa-sliders-h',
                'url'=>'/setup/fundcategories',
            ],
            [
                'titlemenu_id'=>1,
                'name'=>'Atur ukuran baju',
                'posisi'=>8,
                'is_active'=>1,
                'icon'=>'fas fa-user-cog',
                'url'=>'/setup/uniform',
            ],
            [
                'titlemenu_id'=>1,
                'name'=>'Atur pesan Wa',
                'posisi'=>9,
                'is_active'=>1,
                'icon'=>'fas fa-envelope',
                'url'=>'/setup/opset',
            ],
            [
                'titlemenu_id'=>2,
                'name'=>'Tentukan daftar ulang',
                'posisi'=>10,
                'is_active'=>1,
                'icon'=>'fas fa-dollar-sign',
                'url'=>'/fund/applyDaftarUlang',
            ],
        ]);
    }
}

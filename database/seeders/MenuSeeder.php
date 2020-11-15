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
                'name'=>'Data Siswa',
                'is_active'=>1,
                'posisi'=>1,
                'icon'=>'fa fa-check',
                'url'=>'/members/cek_data',
            ],
            [
                'titlemenu_id'=>4,
                'name'=>'Daftar Ulang',
                'is_active'=>1,
                'posisi'=>2,
                'icon'=>'fa fa-dollar-sign',
                'url'=>'/members/info_daftar_ulang',
            ],
            [
                'titlemenu_id'=>4,
                'name'=>'Fitting Seragam',
                'posisi'=>3,
                'is_active'=>1, 
                'icon'=>'fa fa-tshirt',
                'url'=>'/members/fitting_seragam',
            ],
            // MENU OPERTATOR
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
                'name'=>'Atur jadwal tes',
                'posisi'=>4,
                'is_active'=>1,
                'icon'=>'fas fa-calendar-alt',
                'url'=>'/op/schedule',
            ],
            [
                'titlemenu_id'=>2,
                'name'=>'Data Ukuran Baju',
                'posisi'=>5,
                'is_active'=>1,
                'icon'=>'fa fa-tshirt',
                'url'=>'/op/fitting_seragam',
            ],
            [
                'titlemenu_id'=>2,
                'name'=>'Terima / tolak',
                'posisi'=>6,
                'is_active'=>1,
                 'icon'=>'fa fa-clipboard-check',
                'url'=>'/confirmpage',
            ],
            [
                'titlemenu_id'=>2,
                'name'=>'Status pendaftar',
                'posisi'=>7,
                'is_active'=>1,
                'icon'=>'fa fa-user-check',
                'url'=>'/confirmed',
            ],
           
            [
                'titlemenu_id'=>2,
                'name'=>'Tentukan daftar ulang',
                'posisi'=>8,
                'is_active'=>1,
                'icon'=>'fas fa-dollar-sign',
                'url'=>'/fund/applyDaftarUlang',
            ],
            

            //MENU ADMIN

            [
                'titlemenu_id'=>1,
                'name'=>'Atur pesan Wa',
                'posisi'=>1,
                'is_active'=>1,
                'icon'=>'fas fa-envelope',
                'url'=>'/setup/opset',
            ],
            [
                'titlemenu_id'=>1,
                'name'=>'Atur kategori',
                'posisi'=>2,
                'is_active'=>1,
                'icon'=>'fas fa-sliders-h',
                'url'=>'/setup/fundcategories',
            ],
            [
                'titlemenu_id'=>1,
                'name'=>'Atur ukuran baju',
                'posisi'=>3,
                'is_active'=>1,
                'icon'=>'fas fa-user-cog',
                'url'=>'/setup/uniform',
            ],
            [
                'titlemenu_id'=>1,
                'name'=>'Setups',
                'posisi'=>4,
                'is_active'=>1,
                'icon'=>'fas fa-tools',
                'url'=>'/admin/setups',
            ],
        ]);
    }
}

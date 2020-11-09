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
                'name'=>'Data Calon Siswa',
                'is_active'=>1,
                'posisi'=>1,
                'icon'=>'fa fa-bell',
                'url'=>'/members/index',
            ],
            [
                'titlemenu_id'=>4,
                'name'=>'Pengumuman',
                'posisi'=>1,
                'is_active'=>0,
                 'icon'=>'fa fa-bell',
                'url'=>'/members/pengumuman',
            ],
            [
                'titlemenu_id'=>4,
                'name'=>'Ukuran Baju',
                'posisi'=>1,
                'is_active'=>0, 
                'icon'=>'fa fa-bell',
                'url'=>'/members/uniform',
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
                'titlemenu_id'=>2,
                'name'=>'Atur kategori',
                'posisi'=>7,
                'is_active'=>1,
                'icon'=>'fas fa-sliders-h',
                'url'=>'/setup/fundcategories',
            ],
            [
                'titlemenu_id'=>2,
                'name'=>'Atur Ukuran Baju',
                'posisi'=>8,
                'is_active'=>1,
                'icon'=>'fas fa-user-cog',
                'url'=>'/setup/uniform',
            ],
            [
                'titlemenu_id'=>2,
                'name'=>'Set Pesan Wa',
                'posisi'=>9,
                'is_active'=>1,
                'icon'=>'fas fa-envelope',
                'url'=>'/setup/opset',
            ],
            
        ]);
    }
}

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
            [
                'titlemenu_id'=>2,
                'name'=>'Token',
                'posisi'=>2,
                'is_active'=>1, 
                'icon'=>'fa fa-bell',
                'url'=>'/tekken',
            ],
            [
                'url'=>'/members/all',
                'titlemenu_id'=>2,
                'posisi'=>3,
                'name'=>'Data Pendaftar', 
                'icon'=>'fa fa-bell',
                'is_active'=>1
            ],
             [
                'titlemenu_id'=>2,
                'name'=>'Terima / tolak',
                'posisi'=>4,
                'is_active'=>1,
                 'icon'=>'fa fa-bell',
                'url'=>'#',
            ],
             [
                'titlemenu_id'=>2,
                'name'=>'Atur kategori',
                'posisi'=>5,
                'is_active'=>1,
                 'icon'=>'fa fa-bell',
                'url'=>'#',
            ],
             [
                'titlemenu_id'=>2,
                'name'=>'Ukuran Baju',
                'posisi'=>6,
                'is_active'=>1,
                 'icon'=>'fa fa-bell',
                'url'=>'#',
            ],
             [
                'titlemenu_id'=>2,
                'name'=>'Beranda',
                'posisi'=>1,
                'is_active'=>1,
                 'icon'=>'fa fa-bell',
                'url'=>'/op/home',
            ],
        ]);
    }
}

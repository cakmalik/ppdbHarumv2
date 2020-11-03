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
                'icon'=>'fa fa-bell',
                'url'=>'members/index',
            ],
            [
                'titlemenu_id'=>4,
                'name'=>'Pengumuman',
                'is_active'=>1,
                 'icon'=>'fa fa-bell',
                'url'=>'members/pengumuman',
            ],
            [
                'titlemenu_id'=>4,
                'name'=>'Ukuran Baju',
                'is_active'=>1, 
                'icon'=>'fa fa-bell',
                'url'=>'members/uniform',
            ],
            [
                'titlemenu_id'=>2,
                'name'=>'Token',
                'is_active'=>1, 
                'icon'=>'fa fa-bell',
                'url'=>'/tekken',
            ],
            [
                'url'=>'#',
                'titlemenu_id'=>2,
                'name'=>'Pendaftar', 
                'icon'=>'fa fa-bell',
                'is_active'=>1
            ],
             [
                'titlemenu_id'=>2,
                'name'=>'Jadwal',
                'is_active'=>1,
                 'icon'=>'fa fa-bell',
                'url'=>'#',
            ],
             [
                'titlemenu_id'=>2,
                'name'=>'Ukuran Baju',
                'is_active'=>1,
                 'icon'=>'fa fa-bell',
                'url'=>'#',
            ],
        ]);
    }
}

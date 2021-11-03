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
                'titlemenu_id' => 4,
                'name' => 'Data Siswa',
                'is_active' => 1,
                'posisi' => 1,
                'icon' => 'bi bi-people',
                'url' => '/members/cek_data',
            ],
            [
                'titlemenu_id' => 4,
                'name' => 'Daftar Ulang',
                'is_active' => 1,
                'posisi' => 2,
                'icon' => 'bi bi-currency-dollar',
                'url' => '/members/info_daftar_ulang',
            ],
            [
                'titlemenu_id' => 4,
                'name' => 'Seragam',
                'posisi' => 3,
                'is_active' => 1,
                'icon' => 'bi bi-person-bounding-box',
                'url' => '/members/fitting_seragam',
            ],
            // MENU OPERTATOR
            [
                'titlemenu_id' => 2,
                'name' => 'Beranda',
                'posisi' => 1,
                'is_active' => 1,
                'icon' => 'bi bi-menu-button-wide',
                'url' => '/op/home',
            ],
            [
                'titlemenu_id' => 2,
                'name' => 'Token',
                'posisi' => 2,
                'is_active' => 1,
                'icon' => 'bi bi-key',
                'url' => '/tekken',
            ],
            [
                'url' => '/members/all',
                'titlemenu_id' => 2,
                'posisi' => 3,
                'name' => 'Pendaftar',
                'icon' => 'bi bi-people',
                'is_active' => 1
            ],
            [
                'titlemenu_id' => 2,
                'name' => 'Jadwal Tes',
                'posisi' => 4,
                'is_active' => 1,
                'icon' => 'bi bi-journal',
                'url' => '/op/schedule',
            ],
             [
                'titlemenu_id' => 2,
                'name' => 'Terima-tolak',
                'posisi' => 6,
                'is_active' => 1,
                'icon' => 'bi bi-question-square',
                'url' => '/confirmpage',
            ],
            [
                'titlemenu_id' => 2,
                'name' => 'Status',
                'posisi' => 7,
                'is_active' => 1,
                'icon' => 'bi bi-card-checklist',
                'url' => '/confirmed',
            ],
            [
                'titlemenu_id' => 2,
                'name' => 'Daftar ulang',
                'posisi' => 8,
                'is_active' => 1,
                'icon' => 'bi bi-pen',
                'url' => '/fund/applyDaftarUlang',
            ],
            [
                'titlemenu_id' => 2,
                'name' => 'Ukuran Baju',
                'posisi' => 5,
                'is_active' => 1,
                'icon' => 'bi bi-person-bounding-box',
                'url' => '/op/fitting_seragam',
            ],
            


            //MENU ADMIN

            [
                'titlemenu_id' => 1,
                'name' => 'Atur Wa',
                'posisi' => 1,
                'is_active' => 1,
                'icon' => 'bi bi-envelope',
                'url' => '/setup/opset',
            ],
            [
                'titlemenu_id' => 1,
                'name' => 'Atur kategori',
                'posisi' => 2,
                'is_active' => 1,
                'icon' => 'bi bi-sliders',
                'url' => '/setup/fundcategories',
            ],
            [
                'titlemenu_id' => 1,
                'name' => 'Atur Ukuran',
                'posisi' => 3,
                'is_active' => 1,
                'icon' => 'bi bi-person-lines-fill',
                'url' => '/setup/uniform',
            ],
            [
                'titlemenu_id' => 1,
                'name' => 'Setups',
                'posisi' => 4,
                'is_active' => 1,
                'icon' => 'bi bi-tools',
                'url' => '/admin/setups',
            ],
        ]);
    }
}

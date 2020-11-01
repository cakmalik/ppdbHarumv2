<?php

namespace Database\Seeders;

use App\Models\Setup\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'address'=>'Jalan danau toba GG. Islamic Center',
            'city'=>'Jember',
            'telp'=>'+6285201234567',
            'hp'=>'+6285201234567',
            'whatsapp'=>'+6285201234567',
            'facebook'=>'https://id-id.facebook.com/sditharumjember',
            'instagram'=>'https://www.instagram.com/sditharumjember',
            'youtube'=>'https://www.youtube.com/channel/UC6i6NQY1oxXL5MloBQGc8KA',
        ]);
    }
}

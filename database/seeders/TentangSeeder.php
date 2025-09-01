<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tentang;

class TentangSeeder extends Seeder
{
    public function run(): void
    {
        Tentang::create([
            'nama_kampung' => 'Kampung Tualang Timur, Kabupaten Siak, Provinsi Riau',
            'sejarah' => 'Kampung Tualang Timur berdiri sejak tahun 1980, berawal dari pemekaran wilayah Tualang. Kampung ini berkembang pesat berkat gotong royong dan semangat masyarakatnya dalam membangun infrastruktur, pendidikan, dan ekonomi lokal. Berbagai tradisi dan budaya masih dilestarikan hingga kini.',
            'alamat' => 'Kampung Tualang Timur, Kecamatan Tualang, Kabupaten Siak, Riau',
            'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3123456789!2d101.500000!3d0.500000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sKampung%20Tualang%20Timur!5e0!3m2!1sid!2sid!4v1693300000000!5m2!1sid!2sid',
            'facebook' => 'https://facebook.com/tualangtimur',
            'instagram' => 'https://instagram.com/tualangtimur',
            'twitter' => 'https://twitter.com/tualangtimur',
            'email' => 'info@tualangtimur.id',
        ]);
    }
}

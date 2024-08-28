<?php

namespace App\Data;

class OtherServiceData
{
    public static function getOtherService()
    {
        return [
            [
                'title' => 'SSL',
                'detail' => 'Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL Certificate.',
                'price' => 'Rp 112.000',
                'duration' => 'tahun',
                'img' => 'assets/graphics/ssl-bro.png',
            ],
            [
                'title' => 'Dedicated Server',
                'detail' => 'Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas.',
                'price' => 'Rp 499.000',
                'duration' => 'bulan',
                'img' => 'assets/graphics/dedicated-rafiki.png',
            ],
            [
                'title' => 'Colocation Server',
                'detail' => 'Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher.',
                'price' => 'Rp 500.000',
                'duration' => 'bulan',
                'img' => 'assets/graphics/colocation-amico.png',
            ],
        ];
    }
}
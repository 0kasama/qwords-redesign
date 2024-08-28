<?php

namespace App\Data;

class FindDomainData
{
    public static function getFindDomain()
    {
        return [
            [
                'title' => '.com',
                'price' => 'Rp 165.000',
                'discount' => 'Rp 100.000',
            ],
            [
                'title' => '.id',
                'price' => 'Rp 225.000',
                'discount' => 'Rp 115.000',
            ],
            [
                'title' => '.info',
                'price' => 'Rp 77.000',
                'discount' => 'Rp 50.000',
            ],
        ];
    }
}
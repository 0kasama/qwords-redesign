<?php

namespace App\Data;

class PricingData
{
    public static function getPricing()
    {
        return [
            [
                'title' => 'VCH1',
                'detail' => 'Value Cloud Hosting',
                'price' => 'Rp 24.500',
                'discount' => 'Rp 14.500',
                'disk' => '3 GB',
                'bandwidth' => 'Unlimited',
                'core' => '0.5 Core',
                'addon' => 'No',
            ],
            [
                'title' => 'Signature',
                'detail' => 'Unlimited Hosting',
                'price' => 'Rp 109.000',
                'discount' => 'Rp 89.900',
                'disk' => 'Unlimited',
                'bandwidth' => 'Unlimited',
                'core' => '1 Core',
                'addon' => '5',
            ],
            [
                'title' => 'HPCH Bisnis 1',
                'detail' => 'High Performance',
                'price' => 'Rp 90.000',
                'discount' => 'Rp 79.000',
                'disk' => '3 GB',
                'bandwidth' => 'Unlimited',
                'core' => '1 Core',
                'addon' => '-',
            ],
            [
                'title' => 'VPS SC1',
                'detail' => 'Cloud VPS KVM SSD',
                'price' => 'Rp 135.000',
                'discount' => 'Rp 75.000',
                'disk' => '25 GB',
                'bandwidth' => 'Unlimited',
                'core' => '1 Core',
                'addon' => 'Unlimited',
            ],
        ];
    }
}
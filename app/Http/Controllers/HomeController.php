<?php

namespace App\Http\Controllers;

use App\Data\FindDomainData;
use App\Data\OtherServiceData;
use App\Data\PricingData;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $findDomain = FindDomainData::getFindDomain();
        $pricing = PricingData::getPricing();
        $otherService = OtherServiceData::getOtherService();
        return view('home', ['findDomain' => $findDomain, 'pricing' => $pricing, 'otherService' => $otherService]);
    }
}

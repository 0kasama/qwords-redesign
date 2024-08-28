<?php

namespace App\Http\Controllers;

use App\Data\FindDomainData;
use App\Data\PricingData;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $findDomain = FindDomainData::getFindDomain();
        $pricing = PricingData::getPricing();
        return view('home', ['findDomain' => $findDomain, 'pricing' => $pricing]);
    }
}
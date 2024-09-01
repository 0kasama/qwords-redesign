<?php

namespace App\Http\Controllers;

use App\Data\FindDomainData;
use App\Data\OtherServiceData;
use App\Data\PricingData;
use App\Data\SolutionData;
use App\Data\CommitmentData;
use App\Data\TestimonyData;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $findDomain = FindDomainData::getFindDomain();
        $pricing = PricingData::getPricing();
        $otherService = OtherServiceData::getOtherService();
        $solution = SolutionData::getSolution();
        $commitment = CommitmentData::getCommitment();
        $testimony = TestimonyData::getTestimony();
        return view('home', ['findDomain' => $findDomain, 'pricing' => $pricing, 'otherService' => $otherService, 'solution' => $solution, 'commitment' => $commitment, 'testimony' => $testimony]);
    }
}

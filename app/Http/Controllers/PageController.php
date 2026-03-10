<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function cookiePolicy()
    {
        return view('pages.cookie-policy');
    }

    public function cancellationRefundPolicy()
    {
        return view('pages.cancellation-refund-policy');
    }

    public function termsConditions()
    {
        return view('pages.terms-conditions');
    }

    public function developerCredit()
    {
        return view('pages.developer-credit');
    }
}

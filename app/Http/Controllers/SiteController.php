<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function services() {
        return view('components.site.services');
    }

    public function faqs() {
        return view('components.site.faqs');
    }

    public function about() {
        return view('components.site.about');
    }

    public function calculator() {
        return view('components.site.calculator');
    }

    public function terms() {
        return view('components.site.terms');
    }

    public function policy() {
        return view('components.site.policy');
    }

    public function galery() {
        return view('components.site.gallery');
    }
}

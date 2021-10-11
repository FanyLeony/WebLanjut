<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class HomeController extends Controller
{
    public function main()
    {
        return view('main');
    }
    public function about()
    {
        return view('about', [
            'title' => 'Fany'
        ]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function address()
    {
        return view('address');
    }
}

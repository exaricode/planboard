<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public static function getHomePageContent() {
        return HomePage::getHomePageContent();
    }
}

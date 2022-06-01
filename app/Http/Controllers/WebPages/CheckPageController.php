<?php

namespace App\Http\Controllers\WebPages;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CheckPageController extends Controller
{
    public function check_page_Form()
    {
        return view('web.check_page');
    }
}

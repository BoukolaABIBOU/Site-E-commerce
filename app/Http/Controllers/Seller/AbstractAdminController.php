<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AbstractSellerController extends Controller
{
    /**
     * SellerHomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}

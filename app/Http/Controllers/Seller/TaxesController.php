<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaxesController extends AbstractSellerController
{
    /**
     * Display a table of all taxes
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', [
            'table' => 'admin._includes._tables._taxes'
        ]);
    }
}

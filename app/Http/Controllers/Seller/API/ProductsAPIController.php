<?php

namespace App\Http\Controllers\Seller\API;

use App\Http\Controllers\Seller\AbstractSellerController;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsAPIController extends AbstractSellerController
{
    /**
     * @var Product
     */
    protected $products;

    /**
     * ProductController constructor.
     * @param Product $products
     */
    public function __construct(Product $products)
    {
        parent::__construct();
        $this->products = $products;
    }

    /**
     * gets a paginated products array
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $seller =auth()-> user();
        $paginate = $this->products
            ->with('category')
            ->with('image')
            ->with(['sales' => function($query){
                return $query->current();
            }])
            ->where('owner_id', $seller->id)
            ->orderByDesc('updated_at')
            ->paginate(10);

        return response()->json([
            'products' => $paginate
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function changeLocale($locale)
    {
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }

    public function index(Request $request)
    {
        $products = Product::paginate(5);

        return view('products.index',
            [
                'products' => $products,

            ]
        );
    }
}

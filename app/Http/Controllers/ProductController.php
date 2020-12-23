<?php

namespace App\Http\Controllers;

use App\Model\Producer;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Http\Requests;



class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $products = Product::all();

        return view('admin.index',
            [
                'products' => $products,

            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            ['name' => 'required|max:255',
             'description' => 'required',
             'price' => 'required|max:255',
             'producer' => 'required|max:255',
             'producer_web' => 'required|max:255',
            ]
        );
        $user = $request->user();
//        $producer = $request->producer();
//        $user->products()->create(
//            [
//                'name' => $request->name,
//            ]
        //);
//        $producer = new Producer();
//        $producer->producer = $request->producer;  //check name
//        $producer->web_site = $request->web_site;
//        $producer->save();
//
//        $product = new Product();
//        $product->name = $request->name;
//        $product->description = $request->description;
//        $product->user_id = $user->id;

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        //TODO show one product
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Todo
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //TODO
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->authorize('destroy', $product);
        $product->delete();
        return redirect(route('products.index'));
    }
}
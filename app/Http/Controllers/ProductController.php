<?php

namespace App\Http\Controllers;

use App\Model\Producer;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


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
        $products = Product::paginate(5);

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
                'price' => 'required',
                'producer' => 'required|max:255',
                'web_site' => 'required|max:255',
            ]
        );
        $user = $request->user();
        //$producer = $request->producer(); //Todo change to create
//        $user->products()->create(
//            [
//                'name' => $request->name,
//            ]
        //);
        $producer = new Producer();
        $producer->name = $request->producer;
        $producer->web_site = $request->web_site;
        $producer->save();


        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->user_id = $user->id;
        $product->producer_id = $producer->id;
        $product->save();

        return redirect(route('admin.products.index'));
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
        $product = Product::find($id);
        $producer = Producer::find($product->producer_id);
        return view('admin.edit',
            [
                'product' => $product,
                'producer' => $producer,
            ]);
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
        $product = Product::find($id);
        $producer = Producer::find($product->producer_id);
        $producer->name = $request->producer;
        $producer->web_site = $request->web_site;
        $producer->update();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->update();

        return redirect(route('admin.products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $this->authorize('destroy', $product);
        $product->delete();
        return redirect(route('admin.products.index'));
    }
}

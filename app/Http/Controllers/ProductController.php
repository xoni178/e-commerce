<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view("pages.index", ["products" => Product::simplePaginate(8)]);
    }
    public function computersPage()
    {
        return view("pages.computers", ["computers" => Product::where("product_type", 0)->simplePaginate(8)]);
    }
    public function laptopsPage()
    {
        return view("pages.laptops", ["laptops" => Product::where("product_type", 1)->simplePaginate(8)]);
    }
    public function monitorsPage()
    {
        return view("pages.monitors", ["monitors" => Product::where("product_type", 2)->simplePaginate(8)]);
    }
    public function phonesPage()
    {
        return view("pages.phones", ["phones" => Product::where("product_type", 3)->simplePaginate(8)]);
    }

    public function create()
    {
        return view('addProduct');
    }

    public function productPage($id)
    {

        $product = Product::findOrFail($id);

        return view('pages.product_display', ["product" => $product]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('edit', ["product" => $product]);
    }

    //CUD
    public function store()
    {
        request()->validate([
            "product_name" => ["string", "min:5", "max:150", "required"],
            "product_price" => ["numeric", "digits_between:1,8", "required"],
            "product_image-url" => ["url", "required"],
            "product_desc" => ['string', "required"],
            "brand" => ["string", "min:2", "max:20", "required"],
            "product_type" => ["numeric", "digits:1",  "required"]
        ]);

        Product::create([
            "name" => request("product_name"),
            "price" => request("product_price"),
            "image_url" => request("product_image-url"),
            "product_type" => request("product_type"),
            "description" => request("brand"),
            "brand" => request("product_desc")
        ]);

        return redirect("/");
    }

    public function update($id)
    {
        $product = Product::findOrFail($id);

        request()->validate([
            "product_name" => ["string", "min:5", "max:150", "required"],
            "product_price" => ["numeric", "digits_between:1,8", "required"],
            "product_image-url" => ["url", "required"],
            "product_desc" => ['string', "required"],
            "brand" => ["string", "min:2", "max:20", "required"],
            "product_type" => ["numeric", "digits:1", "required"]
        ]);

        $product->update([
            "name" => request("product_name"),
            "price" => request("product_price"),
            "image_url" => request("product_image-url"),
            "product_type" => request("product_type"),
            "description" => request("brand"),
            "brand" => request("product_desc")
        ]);

        return redirect('/product' . "/" . $id);
    }

    public function delete($id)
    {
        Product::findOrFail($id)->delete();

        return redirect("/");
    }
}

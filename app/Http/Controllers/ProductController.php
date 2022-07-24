<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all()->toArray();
        return array_reverse($products);
    }

    public function add(Request $request)
    {
        $pname = $request->input('pname');
        $pcategory = $request->input('pcategory');
        $pscategory = $request->input('pscategory');
        $pdescription = $request->input('pdescription');
        $pimage = $request->file('pimage')->store('upload');
        $pcomposition = $request->file('pcomposition')->store('upload');

        $products = new Product([
            'pname' => $pname,
            'pcategory' => $pcategory,
            'pscategory' => $pscategory,
            'pdescription' => $pdescription,
            'pimage' => $pimage,
            'pcomposition' => $pcomposition,
        ]);

        $products->save();

        return response()->json('add Product successfully');
    }

    public function delete($id)
    {
        $products = Product::find($id);
        $products->delete();

        return response()->json('selected row are delete successfully');
    }

    public function cattle(){
        $products = Product::where(['pcategory' => 'cattle',])->get();
        // return array_reverse($products);
        return response()->json($products, 200);
    }

    public function antibiotic(){
        $products = Product::where(['pcategory' => 'poultry', 'pscategory' => 'antibiotic'])->get();
        // return array_reverse($products);
        return response()->json($products, 200);

    }

    public function essentialoil(){
        $products = Product::where(['pcategory' => 'poultry', 'pscategory' => 'essential oil'])->get();
        // return array_reverse($products);
        return response()->json($products, 200);

    }

    public function nutrition(){
        $products = Product::where(['pcategory' => 'poultry', 'pscategory' => 'nutrition'])->get();
        // return array_reverse($products);
        return response()->json($products, 200);
    }

}

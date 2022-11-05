<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class DetailController extends Controller
{
    public $productCode;
    public  function mount($productCode)
    {
        $this->productCode = $productCode;
    }

    public function render()
    {
        $product = Product::where('productCode',$this->productCode)->first();
        return view('show.details',['product'=>$product]);
    }
}

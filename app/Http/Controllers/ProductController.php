<?php

namespace App\Http\Controllers;

use App\Serial;
use Illuminate\Http\Request;
use App\Product;
use App\Order;
use Illuminate\Support\Facades\Redirect;
use Validator;

use Illuminate\Support\Facades\View;


class ProductController extends Controller
{
    public function index()
    {
        $pro = Product::paginate(10);
        return View::make('product', compact('pro'));
    }
    public function all()
    {
        $pro = Product::paginate(10);
        return View::make('admin.product.index', compact('pro'));
    }
    public function create()
    {
        return view('admin.product.add');
    }
    public function store(Request $request)
    {
      

        }
    }
    public function delete($id)
    {
      
    }
    public function edit($id)
    {
     
    }
    public function update(Request $request)
    {

    }
 
}

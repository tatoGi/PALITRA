<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Products::where('parent_id', null)->orderBy('order', 'asc')->with('children')->get();
        

        return response(['products' => $products], Response::HTTP_OK);
    }

    }


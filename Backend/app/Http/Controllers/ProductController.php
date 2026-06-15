<?php
namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller {
    public function index() {
        // Retorna todos los productos en formato JSON automáticamente
        return response()->json(Product::all());
    }
}

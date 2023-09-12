<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Thumbnail;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['products', 'store', 'show']]);
        $this->now = Carbon::now('Asia/Jakarta');
    }

    public function products()
    {
        $products = Product::with('thumbnails')->with('rates')->get();
        return response()->json([
            'message'   => 'Get All Product successfully',
            'products'  => $products
        ]);
    }

    public function store()
    {
        request()->validate([
            'name'              => ['required', 'string', 'max:255'],
            'shop_id'           => ['required'],
            'price'             => ['required'],
            'stock'             => ['required', 'integer'],
            'origin_id'         => ['required', 'integer'],
            'species_id'        => ['required', 'integer'],
            'roast_level_id'    => ['required', 'integer'],
            'tasted_id'         => ['required', 'integer'],
            'processing_id'     => ['required', 'integer'],
        ]);

        $product                    = new Product;
        $product->name              = request()->name;
        $product->shop_id           = request()->shop_id;
        $product->price             = request()->price;
        $product->stock             = request()->stock;
        $product->origin_id         = request()->origin_id;
        $product->species_id        = request()->species_id;
        $product->roast_level_id    = request()->roast_level_id;
        $product->tasted_id         = request()->tasted_id;
        $product->processing_id     = request()->processing_id;
        $product->created_at        = $this->now;
        $product->save();

        if (request()->has('thumbnails')) {
            foreach (request()->thumbnails as $key => $image) {
                if($image->getSize() > 2048000){
                    $thumbnail = Thumbnail::find($product->id);
                    $thumbnail->delete();
                    return back()->with('error', 'The image must not be greater than 2 MB.');
                }

                $imageName       = $image->getClientOriginalName();
                $filename        = 'thumbnail-'.date('Y-m-d').rand(1111,9999);
                $destinationPath = 'assets/img/thumbnails/';

                $image->move($destinationPath, $filename.'.'.$imageName);
                $pathfile              = $destinationPath . $filename.'.'.$imageName;
                $thumbnail             = new Thumbnail;
                $thumbnail->product_id = $product->id;
                $thumbnail->image      = $pathfile;
                $thumbnail->save();
            }
        }

        return response()->json([
            'message'  => 'Product created successfully',
            'product'  => $product
        ]);
    }

    public function show(string $id)
    {
        $product = Product::with('shop')
                    ->with('origin')
                    ->with('species')
                    ->with('roastLevel')
                    ->with('tasted')
                    ->with('processing')
                    ->where('id', $id)
                    ->get();

        return response()->json([
            'message'  => 'Get Product detail',
            'product'  => $product
        ]);
    }

}

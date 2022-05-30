<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


class ProductController extends Controller
{  
    private $products;
    public function __construct(Product $products)
    {  
        $this->products = $products; 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->products->all();
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $check = $this->products->create([
            'name' => ucfirst($request->name),
            'price' => $request->price,
            'photo' => $this->Resize($request, 'image/product/', 324, 172)]);
            if (! $check) {
                return response()->json(['success' => false], 500);
            } else {
                return response()->json(['success' => true], 200);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json($this->products->findOrfail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    { 
        $check = $product->FindOrFail($product->id)->update([
        'name' => ucfirst($request->name),
        'price' => $request->price,
        'photo' => empty($request->hasFile('photo')) ? substr($product->where('id', $request->id)->get('photo'), 11, 36) : $this->Resize($request, 'images/loja/', 324, 172)]); 
        if (! $check) {
            return response()->json(['success' => false], 500);
        } else {
            return response()->json(['success' => true], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->products->delete($id);

    }
    public function showRoutes() {
        foreach (Route::getRoutes() as $route){
            if (strpos($route->uri, 'api') !== false){
                dd($route);
                //$routes[] = $route->uri;
            }
        }
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Solicit;
use App\Models\Client;


class SolicitController extends Controller
{
    private $solicit;

    public function __construct(Solicit $solicit)
    {
        $this->solicit = $solicit;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Client $client)
    {
        if ($client->id){
         return response()->json(Solicit::select()->where('client_id', $client->id)->get());
        } else {
            $solicits = $this->solicit->all();
        return response()->json($solicits);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        foreach ($request->solicits as $solicit) {
            $check =  Solicit::create([
                "client_id" => $request->client_id,
                "product_id" => $solicit['product_id'],
                "product_name" => Product::find($solicit['product_id'])->name,
                "quantity" => $solicit['quantity']                
            ]);
        }
        if (! $check) {
            return response()->json(['success' => false], 500);
        } else {
            return response()->json(['success' => true], 200);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $client
     * @return \Illuminate\Http\Response
     */
    public function show($client)
    {
        return $this->solicit->find($client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

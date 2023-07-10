<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateAdRequest;
use App\Http\Requests\UpdateAdRequest;
use Illuminate\Support\Facades\Auth;    
use App\Models\Ad;


class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ad::all();
        return response()->json(["ads" => $ads]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateAdRequest $request)
    {
        $data = $request->only(["title" , "price" , "description" , "negotiable" , "state_id" , "category_id"]);
        $data["user_id"] = Auth::user()->id;
        $ad = Ad::create($data);
        return $ad;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Ad::findOrFail($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdRequest $request)
    {   
        $id = $request->id;
        $data = $request->only([
            "title" ,
            "price" ,
            "description",
            "negotiable",
            "state_id",
            "category_id"
       ]);

        $ad = Ad::findOrFail($id);
        if($ad->user_id == Auth::user()->id){
            $ad->fill($data);
            $ad->save();
            return response()->json(["success" => true]);
        }
        
        return response()->json(["success" => false]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ad = Ad::findOrFail($id);
        if($ad->user_id == Auth::user()->id){
            $ad->delete();
            return response()->json(["status" => true]);
        }
        return response()->json(["status" => false]);
    }
}

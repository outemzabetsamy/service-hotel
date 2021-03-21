<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
 use App\Models\hotell;
 use App\Http\Resources\Hotel as HotelResoure;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // //get retrive all products records
        $hotells= hotell::all();
        return new HotelResoure($hotells);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //create new hotel record
        //
        $hotell=new hotell();
        $hotell->NomHotel=$request->input('NomHotel');
        $hotell->AdresseHotel=$request->input('AdresseHotel');
        $hotell->SiteWebHotel=$request->input('SiteWebHotel');

        $hotell->PhotoHotel=$request->input('PhotoHotel');
        $hotell->nbEtoiles=$request->input('nbEtoiles');

       $hotell->save();
        return new HotelResoure($hotell);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        ////get specific products record by id
      $hotells= hotell::findOrFail($id);
      return new HotelResoure($hotells);
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
        ////update a specific product record
        $hotell= hotell::findOrFail($id);
        $hotell->NomHotel=$request->input('NomHotel');
        $hotell->AdresseHotel=$request->input('AdresseHotel');
        $hotell->SiteWebHotel=$request->input('SiteWebHotel');

        $hotell->PhotoHotel=$request->input('PhotoHotel');
        $hotell->nbEtoiles=$request->input('nbEtoiles');
        
       $hotell->save();
       return new HotelResoure($hotell);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ////delet a specific method record by id
       $hotell=hotell::findOrFail($id);
        if($hotell->delete()){
            return new HotelResoure($hotell);
    }
}
}
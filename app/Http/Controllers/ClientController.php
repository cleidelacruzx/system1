<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $data1 = Client::select()
        ->join('categories', 'client.Categories','=','categories.id')
        ->get();

        return view('client.index')->with([
            'clients' => $data1 
        ]);
        
    }

       public function status()
    {
      
        $data2 = View::all();

        return view('view.status')->with([
            'clients' => $data2
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $client = new Client();

      $client->Fname = $request->input('first_name');
      $client->Mname = $request->input('middle_name');
      $client->Lname = $request->input('last_name');
      $client->Facility = $request->input('facility');
      $client->Designation = $request->input('designation');
      $client->Contact = $request->input('contact');
      $client->Categories = $request->input('categories');
      $client->Concern = $request->input('concern');
      $client->ticketnumber = random_int(1, 10000);

      $client->save();
      return $client;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

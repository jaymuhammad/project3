<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Fans;

class TheoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
            {   
                return View('/welcome');
            }
             
           
                 
            public function tabhub(){ 
                return View('layouts/tabhub');
            }
        
        
              //
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
 public function create()
            {
                return View('layouts/explore');
                //
            }
        
            /**
             * Store a newly created resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @return \Illuminate\Http\Response
             */
 
 public function store(Request $request){

            // $this->validate($request, [
       

           

            $fan = new Fans($request->all());

           $fan->save();

         return View('layouts/tabhub');

           }
            
 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


public function show($id)
    {
        //
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

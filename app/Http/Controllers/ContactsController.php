<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Auth;

class ContactsController extends Controller
{
    
    
     function __construct() {
         $this->contact = new \App\Contact();
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
       
       return Response::json($this->contact->where('user_id' , Auth::user()->id)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      //  print_r(Input::all());return;
        
        $data = Input::all();
        $data['user_id'] = Auth::user()->id;
         $res = $this->contact->create($data);
         if(FALSE != $res){
             
             return Response::json(array("insert"=> True));
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Response::json($this->contact->whereId($id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update()
    {
        
      
     $this->contact->where('id',Input::get('id'))->update(Input::all());
     
     return Response::json($this->contact->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $contact = $this->contact->find($id);
        $contact->delete();
       
    }
}

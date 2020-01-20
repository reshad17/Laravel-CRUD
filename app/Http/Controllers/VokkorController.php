<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Vokkor;

class VokkorController extends Controller
{
    public function index()
    {
    	return view('vokkor.index');
    }

    public function save(Request $request)
    {
    	$vok = new Vokkor;
    	$vok->name = $request->name;
    	$vok->address = $request->address;
    	$vok->gender = $request->gender;

    	$vok->save();

    	return redirect()->route('vokkor.view');
    }

    public function view()
    {
        $vok=Vokkor::latest()->get();

        return view('vokkor.view',compact('vok'));
    }


    public function edit(Vokkor $id)
    {
          $vok=  Vokkor::find($id);
         
        return view('vokkor.edit',compact('id','vok'));
    }


    public function update(Request $request, Vokkor $id)
    {

         $request->validate([
            'name' => 'required',
            'address' => 'required',
            'gendeer' => 'required',
        ]);
  
        $vokkor->update($request->all());
  
        return redirect()->route('vokkor.index')
                        ->with('success','Product updated successfully');
    }


    public function delete($id)
    {
        Vokkor::find($id)->delete();

        return 'DELETED';
    }



    
}

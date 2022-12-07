<?php

namespace App\Http\Controllers;

use App\Models\curd;
use Illuminate\Http\Request;

class curdController extends Controller
{
    //
    public function create(Request $req)
    {
         $image = $req->file('image');
         $response = $image->store('image','public');

        curd::create([
            "brandname" => $req->brandname,
            "modelname" => $req->modelname,
            "quantity" => $req->quantity,
            "remark" => $req->remark,
            "image" =>$response,
        ]);
      
        return redirect()->route('home');
    }

    public function viewtable()
    {
        return view('viewtable',['items'=>curd::all()]);
    }


    public function deletedata($id)
    { 
        $delobj = curd::find($id);
        $delobj ->delete();
        return redirect()->route('home');

    }

    public function editdata($id)
    {
        $foundid = curd::find($id);

        return view("edit",['items'=>$foundid]);
       
    }
 
    public function update(Request $req)
    {
        $updateobj = curd::find($req->id);
    
        $updateobj->brandname= $req->brandname;
        $updateobj->modelname= $req->modelname;
        $updateobj->quantity= $req->quantity;
        $updateobj->remark= $req->remark;
        $updateobj->save();

        return redirect()->route("viewtable");
    }
}

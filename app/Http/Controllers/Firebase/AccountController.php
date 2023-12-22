<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class AccountController extends Controller
{

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'Account';
    }

    public function index(){
        $account =  $this->database->getReference($this->tablename)->getValue();
        return view('firebase.index', compact('account'));
        // return view('firebase.index');
    }

    public function addAccountpage(){
        return view('firebase.add');
    }

//    CREATE FUNCTION

    public function storeData(Request $request){
        $postData = [
            'fname' => $request->first_name,
            'mname' => $request->middle_name,
            'lname' => $request->last_name,
            'email' => $request->email,
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);

        if($postRef){
            return redirect('/')->with('status','Account Added Succesfully');
        }else{
            return redirect('/')->with('status','Account Failed to insert');
        }

    }

    

//      EDIT FUNCTION

    public function editPage($id){
        
        $key = $id;
        $editData = $this->database->getReference($this->tablename)->getChild($key)->getValue();

        if($editData){
            return view('firebase.edit', compact('editData','key'));
        }else{
            return redirect('/')->with('status','Account not found');
        }

       
    }


    public function update(Request $request, $id){
        $key = $id;
        $updateData = [
            'fname' => $request->first_name,
            'mname' => $request->middle_name,
            'lname' => $request->last_name,
            'email' => $request->email,
        ];
       $res_updated =  $this->database->getReference( $this->tablename.'/'.$key )->update($updateData);

        if($res_updated){
            return redirect('/')->with('status','Your Account is Updated');
        }else{
            return redirect('/')->with('status','Your Account failed to update');
        }


    }



}

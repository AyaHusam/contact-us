<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactCotrollers extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }
     public function  index(){
         $contact = Contact::where('user_id', Auth::user()->id)->get();
         return view('index', compact('contact'));
    }
    public function create(){
        return view('Create');
    }
     public function store(Request $request){
         $request->validate([
             'First_Name' =>'required|min:5',
             'last_name' => 'required',
             'Email' => 'required',
         ]);
         $contact = new Contact();
         $contact->Fname = $request->First_Name;
         $contact->lname= $request->last_name;
         $contact->email= $request->Email;
         $contact->user_id=Auth::user()->id;
         $contact->save();
         return  redirect()->back();
     }
     public function edit($id){
        $contact = Contact::findOrFail($id);
        return view('edit' , compact('contact'));

    }
    public function update(Request $request , $id){
        $request->validate([
            'First_Name' =>'required',
            'last_name' => 'required',
            'Email' => 'required',
           ]);
           $contact = Contact::find($id);
           $contact->Fname = $request->First_name;
           $contact->lname = $request->last_name;
           $contact->email = $request->Email;
           $contact->save();
           return redirect('/');

    }
    public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/');
    }
}

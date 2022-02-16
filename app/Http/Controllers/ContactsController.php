<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function index(Request $request)
    {
        $items = Contact::all();
        return view('index', ['items' => $items]);
    }   
    public function confirm(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $form = $request->all();
        Contact::create($form);
        return redirect('/confirm');
    }
    public function complete(Request $request)
    {
        //$this->validate($request, Contact::$rules);
        //$form = $request->all();
        //Contact::create($form);
        return redirect('/complete');
    }    
//    public function find(Request $request)
//    {
        //$this->validate($request, Contact::$rules);
        //$form = $request->all();
//        return redirect('/find');
//    }
    public function find()
    {
        return view('find', ['input' => '']);
    }
}

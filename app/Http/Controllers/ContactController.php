<?php

namespace App\Http\Controllers;


use App\Models\Contact;


class ContactController extends Controller
{
     // customer contact

    public function customer_contact(){

     $customer_contacts = Contact::select('user_name','phone','address','image','reason','created_at')
                           ->orderBy('contacts.created_at','desc')
                          ->get();

                        //   dd($customer_contacts->toArray());

        return view('admin.contact.customer_contact',compact('customer_contacts'));
    }

   
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JoinUsController extends Controller
{
   // join us direct page
  public function joinUsPage(){
    return view('user.joinUs.join_us');
  }

  // contact create 

  public function contactCreate(Request $request) {


   $contactData = [
        'user_name' => $request->name,
        'phone' => $request->phone,
        'address' => $request->address,
        'image'  => $request->contact_image,
        'reason' => $request->contact_reason,


      ];

       if($request->hasFile('image')){
          // store new image
            $fileName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path() . '/contact/',$fileName);

            $contactData['image'] = $fileName;
      }

     $contact = Contact::create($contactData);
//    dd($contact->toArray());

              Alert::success('Contact Send', 'Send Successfully...');

        return back();







    }

}

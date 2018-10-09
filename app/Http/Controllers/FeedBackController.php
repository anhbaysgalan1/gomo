<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeedBack;

class FeedBackController extends Controller
{
    // display form view
    public function index()
    {
       return view('feedback');
    }

    // feed back success view
    public function success()
    {
       return view('success');
    }

    // listing feedbacks in the admin
    public function admin(FeedBack $feedback)
    {
       $feedbacks = $feedback->orderBy('created_at', 'ASC')->get();

       return view('admin')->with('feedbacks', $feedbacks);
    }

    // save form data
    public function create(Request $request, FeedBack $feedback)
    {
        $validator = \Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'nature'     => 'required',
            'details'    => 'required',
        ]);

        // if validation is success
        if(!$validator->fails()) {

            // save data in the database
            $feedback->first_name = $request->first_name;
            $feedback->last_name  = $request->last_name;
            $feedback->email      = $request->email;
            $feedback->phone      = $request->phone;
            $feedback->nature     = $request->nature;
            $feedback->details    = $request->details;

            $feedback->save();

            return redirect('feedback/success');
        }
        else
        {
            // if validation fails redirect with error messages
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }
}

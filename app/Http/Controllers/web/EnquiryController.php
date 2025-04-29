<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Helpers\Mailer;
use App\Http\Requests\EnquiryRequest;
use App\Http\Requests\HelpRequest;

class EnquiryController extends Controller
{
    public function enquiry(EnquiryRequest $request){
        $data = $request->all();
        $response = [];
        $status = 200;


        $n = new Enquiry;
        $n->name = $data['name'];
        $n->email = $data['email'];
        $n->phone = $data['phone'];
        $n->service = $data['service'];
        $n->description = $data['description'];
        $n->save();



        $mail = Mailer::sendMail('Thank You for Contacting Us | DMS', array($data['email']), 'DMS', 'web.emails.response', $data);
        $mail = Mailer::sendMail('#'.$n->id.' - New Inquiry Received! | DMS', ['waseem@datamysite.com', 'satish.b@datamysite.com', 'abhishek@datamysite.com'], 'DMS', 'web.emails.enquiry', $data);


        $response['success'] = 'success';
        $response['message'] = 'Success! You successfully subscribe our newsletter.';



        return response()->json($response, 200);
    }

    public function enquiryHelp(HelpRequest $request){
        $data = $request->all();
        $response = [];
        $status = 200;


        $n = new Enquiry;
        $n->name = $data['name'];
        $n->email = $data['email'];
        $n->phone = $data['phone'];
        $n->save();



        $mail = Mailer::sendMail('Thank You for Contacting Us | DMS', array($data['email']), 'DMS', 'web.emails.response', $data);
        $mail = Mailer::sendMail('#'.$n->id.' - New Inquiry Received! | DMS', ['waseem@datamysite.com', 'satish.b@datamysite.com', 'abhishek@datamysite.com'], 'DMS', 'web.emails.enquiry', $data);


        $response['success'] = 'success';
        $response['message'] = 'Success! You successfully subscribe our newsletter.';



        return response()->json($response, 200);
    }
}

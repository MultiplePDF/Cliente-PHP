<?php

namespace App\Http\Controllers;

use \SoapClient;
use Illuminate\Http\Request;

class SoapController extends Controller
{
    public function testSoap(Request $request)
    {
        if ($request->isMethod('post')) {
            $url = 'http://www.dneonline.com/calculator.asmx?WSDL';
            $client = new \SoapClient($url);
            $result = $client->Add(['intA' => $request->input('intA'), 'intB' => $request->input('intB')])->AddResult;
            $result = json_encode($result);
            return view('soap', compact('result'));

        } else {
            return view('soap');
        }
    }
}

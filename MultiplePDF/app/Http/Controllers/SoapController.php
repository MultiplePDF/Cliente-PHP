<?php

namespace App\Http\Controllers;

use \SoapClient;
use Illuminate\Http\Request;

class SoapController extends Controller
{
    public function testSoap(Request $request)
    {
        if ($request->filled('intA', 'intB', 'intC')) {
            $url = 'http://java.bucaramanga.upb.edu.co/ws/multiplepdf.wsdl';
            $client = new \SoapClient($url);
            $result = $client->register([
                'name' => $request->input('intA'),
                'email' => $request->input('intB'),
                'password' => $request->input('intC')
            ]);
            $result = json_encode($result);
            return view('soap', compact('result'));
        } else {
            return view('soap');
        }
    }
}

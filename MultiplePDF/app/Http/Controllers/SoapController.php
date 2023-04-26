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

    public function test2Soap(Request $request)
    {
        // dd($request->isMethod('POST'));
        
        if ($request->isMethod('POST') && $request->filled('email', 'password')) {
            $url = 'http://java.bucaramanga.upb.edu.co/ws/multiplepdf.wsdl';
            $client = new \SoapClient($url);
            $result = $client->login([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]);
            $result = json_decode(json_encode($result), true);
            
            if (isset($result['response']) && $result['response'] !== "Email o contraseña incorrectos") {
                $request->session()->put('token', $result['token']);
                return redirect()->route('Descargasregistro');
            } else {
                return view('hola.SignIn')->with('error', 'Las credenciales proporcionadas no son válidas.');
            }
            
        } else {
          
            return view('hola.SignIn')->with('error', 'Error!.');;
        }
    }
    public function test3Soap(Request $request)
    {
        if ($request->isMethod('post') && $request->filled('name','email', 'password','confirm_password')) {
            $url = 'http://java.bucaramanga.upb.edu.co/ws/multiplepdf.wsdl';
            $client = new \SoapClient($url);
            $result = $client->register([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'confirm_password' => $request->input('confirm_password')
            ]);
            $result = json_decode(json_encode($result), true);
            
            //dd($result);
            /*
            if (isset($result['token']) && $result['token'] !== "Invalid username or password") {
                $request->session()->put('token', $result['token']);
                return redirect()->route('Descargasregistro');
            } else {
                return view('hola.SignIn')->with('error', 'Las credenciales proporcionadas no son válidas.');
            }*/
            
        } else {
            return view('hola.SignUP');
        }
    }
}

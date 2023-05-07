<?php

namespace App\Http\Controllers;
use Exception;
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

    //LOGIN WITH SOAP
    public function wipSoap(Request $request)
    {
        if ($request->isMethod('POST') && $request->filled('email', 'password')) {
            
            $url = 'http://java.bucaramanga.upb.edu.co/ws/multiplepdf.wsdl';
            $client = new \SoapClient($url);
            $result = $client->login([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]);
            $result = json_decode(json_encode($result), true);
            
            if ($result['response'] == "Success") {
                
                $request->session()->put('token', $result['token']);
                
                return redirect()->route('cargar-archivo');
            } else {
                
                return view('hola.SignIn')->with('error', 'Las credenciales proporcionadas no son válidas.');
            }
            
        } else {
            return view('hola.SignIn')->with('error', 'Error!.');;
        }
    }


    //REGISTER WITH SOAP
    
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

            if ($result['response'] == "Success") {
                
                return redirect()->route('SignIn');
            } else {
                
                return view('hola.SignUP')->with('error', 'Las credenciales proporcionadas no son válidas.');
            }
            
        } else {
            return view('hola.SignUP');
        }
    }

    //UPLOAD FILES WITH SOAP
    
    public function test4Soap(Request $request)
    { 
        //$request->session()->has('token') && $request->session()->has('archivos_base64')
        if ($request->session()->has('archivos_base64')) {
            $url = 'http://java.bucaramanga.upb.edu.co/ws/multiplepdf.wsdl';
            $client = new SoapClient($url);
            $token = $request->session()->get('token');
            
            $documentos = $request->session()->get('archivos_base64');
            
            $result = $client->sendBatch(array(
                'token' => $token,
                'listJSON' => $documentos
            ));
            //dd($result);
            $result = json_decode(json_encode($result), true);
            if ($result['successful'] == 'true') {
                return redirect()->route('Archivos');
            } else {
                return view('cargar-archivo')->with('error', 'Ha ocurrido un error al enviar los documentos: ');
            }
            
        } else {
            return view('cargar-archivo')->with('error', 'No se ha iniciado sesión o no se han cargado archivos.');
        }
    }


    //SHOW FILES UPLOADED WITH SOAP
    public function test5Soap(Request $request)
    {
        $url = 'http://java.bucaramanga.upb.edu.co/ws/multiplepdf.wsdl';
        $client = new SoapClient($url);
        $token = $request->session()->get('token');
        
        $result = $client->getBatchDetails([
            'token' => $token
        ]);
        //dd($result);
        
        if($result->successful ==true) {
            return view('hola.Archivos', ['result' => $result]);
        } else {
            return view('hola.Archivos')->with('error', 'Aun no se tiene registro de archivos convertidos.');
        }
    }

    //SHOW FILES UPLOADED WITH SOAP
    public function test51Soap(Request $request, $id)
    {
        $url = 'http://java.bucaramanga.upb.edu.co/ws/multiplepdf.wsdl';
        $client = new SoapClient($url);
        $token = $request->session()->get('token');
        
        $result = $client->getBatchDetails([
            'token' => $token
        ]);

        //dd($result);
        $result2=$result->batchesList;
        $result3 = json_decode($result2); // convertir la cadena JSON en un array u objeto
        foreach ($result3 as $item) {
            if ($item->_id === $id) {
                return view('hola.Descargasregistro', ['result' => $item]);
            }
            else {
                return view('hola.Archivos')->with('error', 'Aun no se tiene registro de archivos convertidos.');
            }
            
        }
    }


    //PROFILE WITH SOAP
    public function test6Soap(Request $request)
    {
    
        $url = 'http://java.bucaramanga.upb.edu.co/ws/multiplepdf.wsdl';
        $client = new SoapClient($url);
        $token = $request->session()->get('token');
        
        $result = $client->getUserDetails([
            'token' => $token
        ]);
        if($result->response =="Success") {
            return view('hola.Perfil', ['result' => $result]);
        } else {
            return view('hola.Perfil')->with('error', 'Se presentan problemas en la información personal.');
        }
            
    }
    

    
}
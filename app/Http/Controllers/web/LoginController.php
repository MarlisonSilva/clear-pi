<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use mysqli;

class LoginController extends Controller
{

    function __construct(){
        include(app_path('includes'.DIRECTORY_SEPARATOR.'php'.DIRECTORY_SEPARATOR.'DBconfig.php'));
        $this->connection = $connection;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();
        if(isset($_SESSION["usr"])){
            return Redirect::to("template");
        }
        return view('authentication/login', ["error" => false]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();

        $error = true;

        $response = $this->connection->query("SELECT * FROM TB_ADMINISTRADORES WHERE ADM_EMAIL = '$request->usuario' and ADM_SENHA = '$request->senha'");
        if($response->fetch_row() != null){
            foreach ($response as $r) {
                $_SESSION['usr'] = $r['ADM_ID'];
                $error = false;
                return Redirect::to("template");
            }
        }

        return view('authentication/login', ["error" => $error, "email" => $request->usuario]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        session_start();
        session_destroy();
        return Redirect::to("login");
    }
}

<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WorkerController extends Controller
{

    function __construct(){
        include(app_path()."/includes/php/DBConfig.php");
        $this->connection = $connection;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->connection->query("SELECT * FROM TB_FUNCIONARIOS");
        $response2 = $this->connection->query("SELECT * FROM TB_TEL_FUNCIONARIOS");

        return view('workers/indexWorkerB', ["funcionarios" => $response, "telefones" => $response2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workers/createWorkerB');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->connection->query("INSERT INTO TB_FUNCIONARIOS (FUN_NOME, FUN_CH, FUN_MATRICULA) VALUES ('$request->nome', '$request->cargaH', '$request->matricula')");
        $response = $this->connection->query("SELECT FUN_ID FROM TB_FUNCIONARIOS WHERE FUN_ID = LAST_INSERT_ID()");
        foreach ($response as $r) {
            $this->connection->query("INSERT INTO TB_TEL_FUNCIONARIOS (TEF_FUN_ID, TEF_TELEFONE) VALUES ('$r[FUN_ID]', '$request->telefone')");
        }
        
        return Redirect::to("workers");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('workers/editWorkerF');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->connection->query("DELETE FROM TB_CAM_FUNC WHERE CAF_FUN_ID = $id");
        $this->connection->query("DELETE FROM TB_TEL_FUNCIONARIOS WHERE TEF_FUN_ID = $id");
        $this->connection->query("DELETE FROM TB_FUNCIONARIOS WHERE FUN_ID = $id");
        return Redirect::to("workers");
    }
}

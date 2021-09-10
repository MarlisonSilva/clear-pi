<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ZoneController extends Controller
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
        $response = $this->connection->query("select ZON_ID, ZON_NOME, ZON_HRFUNCIONAMENTO FROM tb_zonas");
        return view('zones/indexZoneB', ["data" => $response]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zones/createZoneB');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->connection->query("INSERT INTO TB_ZONAS (ZON_NOME, ZON_HRFUNCIONAMENTO) VALUES ('$request->nome', '$request->horario')");
        return Redirect::to("zones");
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
        $response = $this->connection->query("select ZON_ID, ZON_NOME, ZON_HRFUNCIONAMENTO FROM tb_zonas WHERE ZON_ID = $id");
        return view('zones/editZoneB', ["data" => $response]);
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
        $this->connection->query("UPDATE TB_ZONAS SET ZON_NOME = '$request->nome', ZON_HRFUNCIONAMENTO = '$request->horario' WHERE ZON_ID = $id");
        return Redirect::to("zones");
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->connection->query("DELETE FROM TB_ZONAS WHERE ZON_ID = $id");
        return Redirect::to("zones");
    }
}

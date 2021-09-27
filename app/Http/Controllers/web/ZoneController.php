<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ZoneController extends Controller
{

    function __construct(){
        include(app_path('includes'.DIRECTORY_SEPARATOR.'php'.DIRECTORY_SEPARATOR.'DBconfig.php'));
        $this->connection = $connection;
        $this->diasSemana = ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"];
    }

    private function fazerDiasFunc(Request $request){
        $dias = [$request->segunda, $request->terça, $request->quarta, $request->quinta, $request->sexta, $request->sábado, $request->domingo];

        $diasFuncionamento = "";
        for ($c=0; $c < count($dias); $c++) { 
            if($dias[$c]){
                if($diasFuncionamento == ""){
                    $diasFuncionamento = $this->diasSemana[$c];
                }else{
                    $diasFuncionamento.= ", " . $this->diasSemana[$c];
                }
            }
        }
        return $diasFuncionamento;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        session_start();
        if(!isset($_SESSION['usr'])){
            return Redirect::to("login");
        }

        $response = $this->connection->query("SELECT ZON_ID, ZON_NOME, ZON_HRFUNCIONAMENTO, ZON_DIASFUNCIONAMENTO FROM TB_ZONAS");
        return view('zones/indexZone', ["data" => $response]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zones/createZone', ["dias" => $this->diasSemana]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diasFuncionamento = $this->fazerDiasFunc($request);
        $this->connection->query("INSERT INTO TB_ZONAS (ZON_NOME, ZON_HRFUNCIONAMENTO, ZON_DIASFUNCIONAMENTO) VALUES ('$request->nome', '$request->horario', '$diasFuncionamento')");
        return Redirect::to("zones");
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response = $this->connection->query("SELECT ZON_ID, ZON_NOME, ZON_HRFUNCIONAMENTO, ZON_DIASFUNCIONAMENTO FROM tb_zonas WHERE ZON_ID = '$id'");
        
        foreach ($response as $data) {
            $dias = explode(", ", $data["ZON_DIASFUNCIONAMENTO"]);
            $diasSelec = [false];
            $dia = 0;

            for ($i=0; $i < count($this->diasSemana); $i++) {
                if(count($dias) > $dia){
                    if($dias[$dia] == $this->diasSemana[$i]){
                        $diasSelec[$i] = true;
                        $dia++;
                    }else{
                        $diasSelec[$i] = false;
                    }
                }else if(count($diasSelec) < count($this->diasSemana)){
                    $diasSelec[$i] = false;
                }
            }
        }

        return view(
            'zones/editZone',
            [
                "data" => $response,
                "diasSelec" => $diasSelec,
                "dias" => $this->diasSemana
            ]);
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
        $diasFuncionamento = $this->fazerDiasFunc($request);
        $this->connection->query("UPDATE TB_ZONAS SET ZON_NOME = '$request->nome', ZON_HRFUNCIONAMENTO = '$request->horario', ZON_DIASFUNCIONAMENTO = '$diasFuncionamento' WHERE ZON_ID = $id");
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
        $this->connection->query("DELETE FROM TB_ZONAS_CAM WHERE ZOC_ZON_ID = $id");
        $this->connection->query("DELETE FROM TB_ZONAS WHERE ZON_ID = $id");
        return Redirect::to("zones");
    }
}

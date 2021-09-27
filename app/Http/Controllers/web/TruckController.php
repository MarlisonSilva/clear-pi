<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TruckController extends Controller
{

    function __construct(){
        include(app_path('includes'.DIRECTORY_SEPARATOR.'php'.DIRECTORY_SEPARATOR.'DBconfig.php'));
        $this->connection = $connection;
    }

    private function getList($response, $prefixes, $tables, $ids, $last){
        $zonas = [];
        $last1 = $last[0];
        $last2 = $last[1];
        foreach ($response as $r) {
            $response2 = $this->connection->query("SELECT $prefixes[0]_ID FROM $tables[0] WHERE $ids[0] = $r[$last1]");
            $zs = [];
            foreach ($response2 as $r2) {
                $response3 = $this->connection->query("SELECT $prefixes[1]_NOME FROM $tables[1] WHERE $ids[1] = $r2[$last2]");
                foreach ($response3 as $r3) {
                    array_push($zs, $r3["$prefixes[1]_NOME"]);
                }
            }
            array_push($zonas, $zs);
        }
        return $zonas;
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

        $response = $this->connection->query("SELECT CAM_ID, CAM_NOME FROM TB_CAMINHOES");

        $response2 = $this->connection->query("SELECT * FROM TB_MOT_CAM");

        $motoristas = [];
        foreach ($response2 as $r) {
            array_push($motoristas, $r["MOC_FUN_ID"]);
        }

        return view(
            'trucks/indexTruck',
            [
                "data" => $response,
                "zonas" => $this->getList($response, ["ZOC_ZON", "ZON"], ["TB_ZONAS_CAM", "TB_ZONAS"], ["ZOC_CAM_ID", "ZON_ID"], ["CAM_ID", "ZOC_ZON_ID"]),
                "funcionarios" => $this->getList($response, ["CAF_FUN", "FUN"], ["TB_CAM_FUNC", "TB_FUNCIONARIOS"], ["CAF_CAM_ID", "FUN_ID"], ["CAM_ID", "CAF_FUN_ID"]),
                "motoristas" => $motoristas,
                "funcs" => $this->connection->query("SELECT * FROM TB_FUNCIONARIOS"),
                "motCam" => $this->connection->query("SELECT * FROM TB_MOT_CAM")
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = $this->connection->query("SELECT ZON_ID, ZON_NOME FROM TB_ZONAS");
        $response2 = $this->connection->query("SELECT FUN_ID, FUN_NOME FROM TB_FUNCIONARIOS");
        return view(
            'trucks/createTruck',
            [
                "zonas" => $response,
                "funcionarios" => $response2
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->connection->query("INSERT INTO TB_CAMINHOES (CAM_NOME) VALUES ('$request->nome')");
        $response = $this->connection->query("SELECT CAM_ID FROM TB_CAMINHOES WHERE CAM_ID = LAST_INSERT_ID()");
        
        foreach ($response as $r) {
            $this->connection->query("INSERT INTO TB_MOT_CAM (MOC_CAM_ID, MOC_FUN_ID) VALUES ($r[CAM_ID], $request->driver)");
            foreach ($request->zones as $zona) {
                $this->connection->query("INSERT INTO TB_ZONAS_CAM (ZOC_CAM_ID, ZOC_ZON_ID) VALUES ($r[CAM_ID], $zona)");
            }
            foreach ($request->workers as $worker) {
                $this->connection->query("INSERT INTO TB_CAM_FUNC (CAF_CAM_ID, CAF_FUN_ID) VALUES ($r[CAM_ID], $worker)");
            }
        }

        return Redirect::to("trucks");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response = $this->connection->query("SELECT CAM_ID, CAM_NOME FROM TB_CAMINHOES WHERE CAM_ID = $id");
        $response2 = $this->connection->query("SELECT ZON_ID, ZON_NOME FROM TB_ZONAS");
        $response3 = $this->connection->query("SELECT FUN_ID, FUN_NOME FROM TB_FUNCIONARIOS");
        return view(
            'trucks/editTruck',
            [
                "camData" => $response,
                "zonas" => $response2,
                "funcionarios" => $response3,
                "zonasCam" => $this->connection->query("SELECT ZOC_ZON_ID FROM TB_ZONAS_CAM WHERE ZOC_CAM_ID = $id"),
                "funcionariosCam" => $this->connection->query("SELECT CAF_FUN_ID FROM TB_CAM_FUNC WHERE CAF_CAM_ID = $id"),
                "motoristaCam" => $this->connection->query("SELECT MOC_FUN_ID FROM TB_MOT_CAM WHERE MOC_CAM_ID = $id")
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
        $this->connection->query("UPDATE TB_CAMINHOES SET CAM_NOME = '$request->nome' WHERE CAM_ID = $id");
        $this->connection->query("DELETE FROM TB_ZONAS_CAM WHERE ZOC_CAM_ID = $id");
        foreach ($request["zones"] as $zona) {
            $this->connection->query("INSERT INTO TB_ZONAS_CAM (ZOC_CAM_ID, ZOC_ZON_ID) VALUES ($id, $zona)");
        }
        $this->connection->query("DELETE FROM TB_CAM_FUNC WHERE CAF_CAM_ID = $id");
        foreach ($request["workers"] as $worker) {
            $this->connection->query("INSERT INTO TB_CAM_FUNC (CAF_CAM_ID, CAF_FUN_ID) VALUES ($id, $worker)");
        }
        
        if(mysqli_fetch_array($this->connection->query("SELECT * FROM TB_MOT_CAM WHERE MOC_CAM_ID = $id")) != null){
            $this->connection->query("UPDATE TB_MOT_CAM SET MOC_FUN_ID = '$request->driver' WHERE MOC_CAM_ID = $id");
        }else{
            $this->connection->query("INSERT INTO TB_MOT_CAM (MOC_CAM_ID, MOC_FUN_ID) VALUES ($id, $request->driver)");
        }
        
        return Redirect::to("trucks");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->connection->query("DELETE FROM TB_ZONAS_CAM WHERE ZOC_CAM_ID = $id");
        $this->connection->query("DELETE FROM TB_CAM_FUNC WHERE CAF_CAM_ID = $id");
        $this->connection->query("DELETE FROM TB_MOT_CAM WHERE MOC_CAM_ID = $id");
        $this->connection->query("DELETE FROM TB_CAMINHOES WHERE CAM_ID = $id");
        return Redirect::to("trucks");
    }
}

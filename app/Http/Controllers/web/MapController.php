<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class MapController extends Controller
{

    function __construct()
    {
        include(app_path('includes' . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'DBconfig.php'));
        $this->connection = $connection;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->connection->query("SELECT CAM_ID, CAM_NOME FROM TB_CAMINHOES WHERE CAM_STATUS = true");
        return View("map", ["caminhoes" => $response]);
    }
}
?>
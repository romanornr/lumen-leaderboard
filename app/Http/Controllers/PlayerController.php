<?php

namespace App\Http\Controllers;
use App\Players;
use Auth;
use Eloquent;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    public function index()
    {
        $players = Players::all();
        return response()->json($players);

    }

    public function getPlayer($id)
    {

    }

    public function createPlayer(Request $request)
    {

    }

    public function deletePlayer($id)
    {

    }

    public function updatePlayer(Request $request, $id)
    {
        
    }

}

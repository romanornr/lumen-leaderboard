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
        $player = Players::find($id);
        return response()->json($player);
    }

    public function createPlayer(Request $request)
    {
        $player = Players::create($request->all());
        return reponse()->json($player);
    }

    public function deletePlayer($id)
    {
        $player = Player::find($id);
        $player->delete();
        return response()->json('player deleted');
    }

    public function updatePlayer(Request $request, $id)
    {
        $player = Players::find($id);
        $player->username = $request->input('username');
        $player->score = $request->input('score');
        $player->save();

        return response()->json($player);
    }

}

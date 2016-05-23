<?php

namespace App\Http\Controllers;
use App\Players;
use Auth;
use Eloquent;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return   \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Players::all();
        return response()->json($players);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function getPlayer($id)
    {
        $player = Players::find($id);
        return response()->json($player);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function createPlayer(Request $request)
    {
        $player = Players::create($request->all());
        return response()->json($player);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function deletePlayer($id)
    {
        $player = Player::find($id);
        $player->delete();
        return response()->json($players);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function updatePlayer(Request $request, $id)
    {
        $player = Players::find($id);
        $player->username = $request->input('username');
        $player->score = $request->input('score');
        $player->save();

        return response()->json($player);
    }

}

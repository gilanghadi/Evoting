<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Calons;
use App\Models\Voting;
use App\Models\User;

class VotingController extends Controller
{
    public function getSuara()
    {
        $totalSuara = Calons::where('voting', 0);
        return response()->json($totalSuara);
    }

    public function getPemilihTerkini()
    {
        $pemilihTerkini = Voting::with(['user'])->orderBy('created_at', 'desc')->limit(4)->get();

        return json_decode($pemilihTerkini);
    }

    public function getSudahMemilih()
    {
        $sudahMemilih = User::where('voting', 0)->count();
        return response()->json($sudahMemilih);
    }
}
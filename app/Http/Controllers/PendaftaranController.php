<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data = DB::table('pendaftaran')
            ->join('event', 'pendaftaran.event_id', '=', 'event.id_event')
            ->join('users', 'pendaftaran.user_id', '=', 'users.id')
            ->select('pendaftaran.*', 'event.*', 'users.*')->get();
        return view('admin.pendaftaran', [
            'title' => 'Pendaftaran',
            'data' => $data
        ]);
    }
}

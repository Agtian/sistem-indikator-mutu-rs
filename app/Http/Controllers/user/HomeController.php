<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $detailUser = DB::table('users')
                        ->select('users.nama', 'users.username', 'users.password', 'users.email', 'tref_ruang.nama_ruang')
                        ->join('tref_ruang', 'tref_ruang.id', "=", 'users.id_ruang')
                        ->where('users.id', auth()->user()->id)
                        ->get();

        foreach($detailUser as $row)
        {
            $detailArrUsers = [
                'nama'          =>$row->nama,
                'username'      =>$row->username,
                'password'      =>$row->password,
                'email'         =>$row->email,
                'nama_ruang'    =>$row->nama_ruang,
            ];
        }

        $data = [
            'detailUser'    => $detailArrUsers
        ];

        return view('user.home.index', $data);
    }
}

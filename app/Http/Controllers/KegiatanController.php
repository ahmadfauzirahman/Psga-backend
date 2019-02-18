<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kegiatan = Kegiatan::get();
        $title = "Kegiatan PSGA";

        return view('kegiatan.index', compact('kegiatan', 'title'));
    }
}

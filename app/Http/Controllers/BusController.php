<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Kotatuj;
use App\Kotaber;
use App\Order;
use App\Seat;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kotaTuj = Kotatuj::all();
        $kotaBer = Kotaber::all();
        return view('fn.bus',  compact('kotaTuj','kotaBer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($k1,$k2,$tgl)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getTiket(Request $request)
    {
        $validatedData = $request->validate([
            'kota_awal' => 'required|max:255',
            'kota_tujuan' => 'required|max:255',
            'tanggal' => 'required|max:255',
        ]);
        
        $data = Jadwal::where(['id_kotaber' => $request->kota_awal,'id_kotatuj' => $request->kota_tujuan, 'tanggal' => $request->tanggal])->get();

        return view('fn.table_jadwal', compact('data'));
        // return $data;
    }

    public function pesanTiket($id)
    {
        $data = Jadwal::find($id);
        $data_seat = Seat::all();
        $id_ses = session()->get('id');
        return view('fn.pilih_bangku', compact('data','id_ses','data_seat'));
        // return $data_seat;
    }

    public function prosesTiket(Request $request)
    {
        $validatedData = $request->validate([
            'id_jadwal' => 'required|max:255',
            'id_pengguna' => 'required|max:255',
            'jumlah_seat' => 'required|max:255',
            'id_seat' => 'required|max:255',
            'status' => 'required|max:255',
            'alamatjem' => 'required|max:255',
            'alamatant' => 'required|max:255',
            'tglorder' => 'required|max:255',
            'total_bayar' => 'required|max:255',
            'bukti' => 'required|max:255'
        ]);
        Order::create($validatedData);
        return view('fn.index');
    }
}

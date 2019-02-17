<?php

namespace App\Http\Controllers;

use App\DataOperator;
use Illuminate\Http\Request;

class DataOperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataOperator = DataOperator::all();
        // dd($dataOperator);
        return view('operator.data-operator', compact('dataOperator'));
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
        // dd($request->post());
        $data_anggota = $request->validate([
            "nama_operator" => "required|min:5",
            "nama_pengguna" => "required",
            "kata_sandi" => "required",
        ]);

        DataOperator::create(
            [
                "nama_operator" => $request->post("nama_operator"),
                "nama_pengguna" => $request->post("nama_pengguna"),
                "kata_sandi" => $request->post("kata_sandi"),
            ]
        );
        // dd($data_operator);
        return back()->with('message', 'sukses berhasil dinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
}

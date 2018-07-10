<?php

namespace App\Http\Controllers;

use Auth;
use App\ScannedPiece;
use Illuminate\Http\Request;

class ScannedPieceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('scannedPieces.index');
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
      $pieza = new ScannedPiece;
      $pieza->name = "";

      $file = $request->file('image');
      $path = public_path(). '/images/pieces';
      $fileName = uniqid().Auth::user()->id.'.'.$file->getClientOriginalExtension();
      $moved = $file->move($path, $fileName);

      if($moved){
        $pieza->imageurl = $fileName;
        $pieza->save();
      }

      return redirect()->route('piece.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ScannedPiece  $scannedPiece
     * @return \Illuminate\Http\Response
     */
    public function show(ScannedPiece $scannedPiece)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ScannedPiece  $scannedPiece
     * @return \Illuminate\Http\Response
     */
    public function edit(ScannedPiece $scannedPiece)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScannedPiece  $scannedPiece
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScannedPiece $scannedPiece)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScannedPiece  $scannedPiece
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScannedPiece $scannedPiece)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MstPangkat;

/**
* Class MstPangkatController
* @package App\Http\Controllers
*/

class MstPangkatController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $search = \Request::get('search');
        $p = MstPangkat::paginate();
        $mstPangkat = \DB::table('mst_pangkat')
        ->where('nama_pangkat','LIKE','%'.$search.'%')
        ->orWhere('pangkat_gol','LIKE', '%'.$search.'%')
        ->paginate($p->perPage());

        return view('mst-pangkat.index', compact('mstPangkat'))
        ->with('i', (request()->input('page', 1) - 1) * $p->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
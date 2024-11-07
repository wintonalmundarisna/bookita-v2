<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
// use App\Http\Requests\StoreKritikRequest;
// use App\Http\Requests\UpdateKritikRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $data = [
            'user_id' => Auth::user()->id,
            'kritik' => $request['kritik'],
            'saran' => $request['saran'],
        ];
        
        Kritik::create($data);
        
        return redirect('about')->with('kritik', 'Terimakasih atas kritik dan sarannya');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kritik $kritik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kritik $kritik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kritik $kritik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kritik $kritik)
    {
        //
    }
}

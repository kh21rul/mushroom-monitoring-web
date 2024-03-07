<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use App\Http\Requests\StoreMonitoringRequest;
use App\Http\Requests\UpdateMonitoringRequest;

class MonitoringController extends Controller
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
    public function store(StoreMonitoringRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Monitoring $monitoring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Monitoring $monitoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMonitoringRequest $request, Monitoring $monitoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Monitoring $monitoring)
    {
        //
    }

    public function bacasuhu()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('bacasuhu', ['monitoring' => $monitoring]);
    }

    public function bacakelembapan()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('bacakelembapan', ['monitoring' => $monitoring]);
    }

    public function bacakipas()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('bacakipas', ['monitoring' => $monitoring]);
    }

    public function bacahumidifier()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('bacahumidifier', ['monitoring' => $monitoring]);
    }

    public function simpan()
    {
        Monitoring::where('id', 1)->update([
            'suhu' => request('suhu'),
            'kelembapan' => request('kelembapan'),
            'kipas' => request('kipas'),
            'humidifier' => request('humidifier'),
        ]);
    }
}

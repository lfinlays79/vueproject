<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;
use Log;
use App\Events\GoneToIndex;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Log::info('hello');
        $medicines = Medicine::all();
        
        $path = $request->path();
        Log::info($path);

        $all = $request->all();
        Log::info($all);

        $query = $request->query('dosage');
        Log::info($query);

        $dosagetwo = Medicine::where ('dosage', '=', $query )->get();
        Log::info($dosagetwo);

        

        return $medicines;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info('got to store');
        Medicine::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicines = Medicine::find($id);
        return $medicines;
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
        Log::info('got to update');
        Medicine::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Log::info('got to delete');
        Medicine::find($id)->delete();
    }
}

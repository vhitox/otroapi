<?php

namespace App\Http\Controllers;

use App\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policies = Policy::all();
        return $policies;
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
        //$policy = new Policy();
        $policy = new Policy($request->All());
        // $policy->number = $request->input('number');
        // $policy->amount = $request->input('amount');
        // $policy->number = $request->number;
        // $policy->amount = $request->amount;        
        $policy->save();
        return $policy;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function show(Policy $policy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function edit(Policy $policy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Policy $policy)
    {
        $updPolicy = Policy::find($policy->id);
        $updPolicy->number = $request->number;
        $updPolicy->amount = $request->amount;
        $updPolicy->save();
        return $updPolicy;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Policy $policy)
    {
        $policyDelete = Policy::findOrfail($policy->id);
        if($policyDelete->delete()){
            return "Eliminado correctamente";
        }
        return "Error al eliminar";
    }
}

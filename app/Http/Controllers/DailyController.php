<?php

namespace App\Http\Controllers;

use App\Account;
use App\Daily;
use Illuminate\Http\Request;

class DailyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dailys = Daily::all();
        return view('dailys.index', compact('dailys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts =  Account::all();
        return view('dailys.dailyCreate', compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $daily = new Daily($request->all());
        $daily->save();
        return redirect()->route('daily.index');

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

        $daily = Daily::findOrFail($id);
        $accountOne = Account::findOrFail($daily->account_id);

        $accounts =  Account::all();

        return view('dailys.dailyEdit', compact('daily','accounts','accountOne'));
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
        $daily = Daily::findOrFail($id);
        $daily->fill($request->all());
        $daily->save();

        return redirect()->route('daily.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daily = Daily::findOrFail($id);
        $daily->delete();
        return redirect()->route('daily.index');
    }
}

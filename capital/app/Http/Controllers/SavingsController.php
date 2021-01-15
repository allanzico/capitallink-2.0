<?php

namespace App\Http\Controllers;

use App\Models\Savings;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class SavingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $savings = Savings::all();
        return view('savings.index', compact('savings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        $subscriptions = DB::table('subscription_types')->get();
        return view('savings.create')
            ->with(['users' => $users, 'subscriptions' => $subscriptions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $savings = new Savings();
        $savings->subscription_date = Carbon::parse(request('subscription_date'));
        $savings->amount = request('subscriptionAmount');
        $savings->user_id = request('savedBy');
        $savings->subscription_type_id = request('subscriptionType');
        $savings->notes = request('extraNotes');
        $savings->save();

        return redirect()->route('savings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Savings  $savings
     * @return \Illuminate\Http\Response
     */
    public function show(Savings $savings)
    {
        //
        return view('savings.show', compact('savings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Savings  $savings
     * @return \Illuminate\Http\Response
     */
    public function edit(Savings $saving)
    {
        //
        return view('savings.edit', compact('saving'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Savings  $savings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Savings $saving)
    {
        //
        $validated = $request->validate([
            'description' => 'required'
        ]);
        $saving->update($validated);
        return redirect()->route('savings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Savings  $savings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Savings $savings)
    {
        //
        $savings->delete();
        return redirect()->route('savings.index');
    }
}

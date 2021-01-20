<?php

namespace App\Http\Controllers;

use App\Models\Savings;
use App\Models\SubscriptionType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Barryvdh\DomPDF\Facade as PDF;



class SavingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $savings = Savings::where('user_id', $user->id)->get();
        return view('savings.index')->with(['savings' => $savings, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Gate::denies('edit-savings')) {
            return redirect(route('dashboard'));
        }
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
        if (Gate::denies('edit-savings')) {
            return redirect(route('dashboard'));
        }
        $savings = new Savings();
        $savings->subscription_date = Carbon::parse(request('subscription_date'));
        $savings->amount = request('subscriptionAmount');
        $savings->user_id = request('savedBy');
        $savings->subscription_type_id = request('subscriptionType');
        $savings->notes = request('extraNotes');
        $savings->save();

        return redirect()->route('dashboard');
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
        if (Gate::denies('edit-savings')) {
            return redirect(route('dashboard'));
        }
        $users = User::all();
        $subscriptions = SubscriptionType::all();
        return view('savings.edit')->with([
            'users' => $users,
            'saving' => $saving,
            'subscriptions' => $subscriptions
        ]);
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
        if (Gate::denies('edit-savings')) {
            return redirect(route('dashboard'));
        }

        $saving->subscription_date = Carbon::parse(request('subscription_date'));
        $saving->amount = request('subscriptionAmount');
        $saving->user_id = request('savedBy');
        $saving->subscription_type_id = request('subscriptionType');
        $saving->notes = request('extraNotes');

        if ($saving->save()) {
            $request->session()->flash('success', ' details have been updated');
        } else {
            $request->session()->flash('error', 'There was an error updating ');
        }

        return redirect()->route('dashboard');
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

    public function getSavings()
    {
        $users = User::all();
        $subscriptions = SubscriptionType::all();
        $savings = Savings::with(['user', 'subscriptionType'])->get();
        return view('partials.savingsPdf')->with([
            'users' => $users,
            'savings' => $savings,
            'subscriptions' => $subscriptions
        ]);
    }
    public function downloadPDF()
    {
        $savings = Savings::all();
        $pdf = PDF::loadView('partials.savingsPdf', compact('savings'));
        return $pdf->download('savings.pdf');
    }
}

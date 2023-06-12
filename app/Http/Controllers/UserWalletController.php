<?php

namespace App\Http\Controllers;
use App\Models\UserWallet;
use App\Models\User;
use Illuminate\Http\Request;

class UserWalletController extends Controller
{
    public function index()
    {
        $userWallets = UserWallet::all();

        return view('user-wallets.index', compact('userWallets'));
    }

    public function create()
    {
        $users = User::all();

        return view('user-wallets.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'equired|exists:users,id',
            'wallet_balance' => 'equired|numeric',
        ]);

        $userWallet = UserWallet::create($validatedData);

        return redirect()->route('user-wallets.index')->with('success', 'User wallet created successfully.');
    }

    public function edit(UserWallet $userWallet)
    {
        $users = User::all();

        return view('user-wallets.edit', compact('userWallet', 'users'));
    }

    public function update(Request $request, UserWallet $userWallet)
    {
        $validatedData = $request->validate([
            'user_id' => 'equired|exists:users,id',
            'wallet_balance' => 'equired|numeric',
        ]);

        $userWallet->update($validatedData);

        return redirect()->route('user-wallets.index')->with('success', 'User wallet updated successfully.');
    }

    public function destroy(UserWallet $userWallet)
    {
        $userWallet->delete();

        return redirect()->route('user-wallets.index')->with('success', 'User wallet deleted successfully.');
    }
}

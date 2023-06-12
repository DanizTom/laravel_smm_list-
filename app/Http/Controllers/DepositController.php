<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Image;
use Illuminate\Support\Facades\Validator;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Service;
use App\Models\Setting;
use App\Models\UserWallet;
use App\Models\Material;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class DepositController extends Controller
{

    public function index(){
         $setting = Setting::first();
        
        $data = [
             'setting'=>$setting
        ];
        return view('home.deposit', $data);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'equired|exists',
            'amount' => 'required|numeric',
        ]);

        $userWallet = UserWallet::where('user_id', Auth::user()->id)->first();

        $userWallet->wallet_balance += $validatedData['amount'];
        
        $userWallet->save();

        return redirect()->back()->with('success', 'Amount deposited successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Transaction};
use App\Http\Requests\UpdateBalanceRequest;

class UserController extends Controller
{
    
    public function updateBalance(UpdateBalanceRequest $request, $userId)
    {
        $user = User::findOrFail($userId)->updateBalance();
        return response()->json($user);
    }
    
    public function transactions($userId)
    {
        $transactions = Transaction::whereUserId($userId)->get();
        return response()->json($transactions);
    }
    
}

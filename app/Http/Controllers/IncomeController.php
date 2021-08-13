<?php

namespace App\Http\Controllers;

use App\Actions\Income\IncomeService;
use App\Models\Income\Income;
use App\Models\User;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function getIncome(){
        $income = IncomeService::all();
//        return view('');

    }

    public function getUserIncome(User $user){
        return IncomeService::userIncome($user);
    }

    public function saveIncome(Request $request){

        return IncomeService::create($request->all());
    }

    public function updateIncome(Request $request, Income $income){

        return IncomeService::update($income,$request->all());
    }

    public function showIncome(Income $income){
        return view('dashboard',compact('income'));
    }

}

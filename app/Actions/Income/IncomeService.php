<?php


namespace App\Actions\Income;


use App\Models\Income\Income;

class IncomeService
{
    public static function all(){
        return Income::with('users')->get();
    }

    public static function userIncome($user){
        return $user->income();
    }

    public static function create(array $input){

        $input->validate([
            'user_id' => ['required'],
            'inc_type_id' => ['required'],
            'amount' => ['required'],
            'account' => ['required']
        ]);

        try {

            $income = Income::create([
                'user_id' => $input['user_id'],
                'inc_type_id' => $input['inc_type_id'],
                'amount' => $input['amount'],
                'account' => $input['account'],
            ]);

            return view('dashboard')->with('success', 'Income Recorded Successfully');

        }catch (\Exception $exception){
            return redirect()->back()->with('error', 'Error ' . $exception->getMessage());
        }

    }

    public static function update($income,array $input){
        $input->validate([
            'user_id' => ['required'],
            'inc_type_id' => ['required'],
            'amount' => ['required'],
            'account' => ['required']
        ]);

        try {
            $income->update([

            ]);

        }catch (\Exception $exception){
            return redirect()->back()->with('error', 'Error ' . $exception->getMessage());
        }

    }

    public static function delete($income){
        $income->delete();
    }


}

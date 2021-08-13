<?php


namespace App\Actions\Expense;


use App\Models\Expense\Expense;

class ExpenseService
{
    public function all(){
        return Expense::with('users')->get();
    }

    public function create(array $input){
        $input->validate([
            ''
        ]);
//        dd($array);
        Expense::create([
            ''
        ]);
    }

    public function update($expense,array $input){
        $input->validate([

        ]);

        $expense->update([

        ]);
    }

    public function delete($expense){
        $expense->delete();
    }
}

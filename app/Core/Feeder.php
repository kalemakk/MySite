<?php


namespace App\Core;


use Illuminate\Support\Facades\DB;

class Feeder
{
    public static function accountTypes(){
        return DB::table('account_types')->get();

    }

    public static function expenseTypes(){
        return DB::table('expense_types')->get();
    }

    public static function incomeTypes(){
        return DB::table('income_types')->get();
    }
}

<?php

namespace App\Models\Account;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'acc_name',
        'user_id',
        'account_type_id',
        'acc_number',
        'acc_balance'
    ];


}

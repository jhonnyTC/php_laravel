<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function expensereport(){
        return $this->belongsto(ExpenseReport::class);
    }
}

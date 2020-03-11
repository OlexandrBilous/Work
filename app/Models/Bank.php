<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = ['bank', 'credit_type', 'period', 'Month_pay', 'Body_pay', 'percent'];
//    protected $alias = 'articleOne';

    public function link()
    {
        return route($this->alias, $this);


}




}

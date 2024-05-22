<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Fpaipl\Authy\Models\User as AuthyUser;
use Fpaipl\Panel\Traits\GenerateSid;
use Illuminate\Support\Facades\DB;

class User extends AuthyUser
{
    use 
        GenerateSid;    
    

    public function scopeCustomers($query, $limit = 50)
    {
        // return $query->select('users.id', 'users.name', DB::raw('SUM(orders.amount) as total_amount'))
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->groupBy('users.id','users.name')
        //     ->orderByDesc('total_amount')
        //     ->limit($limit);

        return $query->select('users.id', DB::raw("CONCAT(users.name, ' - ', SUM(orders.amount)) AS name"), DB::raw('SUM(orders.amount) as total_amount'))
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->groupBy('users.id', 'users.name')
            ->orderByDesc('total_amount')
            ->limit($limit);
    }


}

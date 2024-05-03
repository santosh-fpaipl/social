<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Fpaipl\Authy\Models\User as AuthyUser;
use Fpaipl\Panel\Traits\GenerateSid;

class User extends AuthyUser
{
    use 
        GenerateSid;    
    
}

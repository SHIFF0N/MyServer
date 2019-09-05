<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;

class RoleApiController extends Controller
{
    public function index()
    {
       return Role::all();
    }

}

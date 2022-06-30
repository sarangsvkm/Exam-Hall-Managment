<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $users = User::get();

        return view('users', compact('users'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export(User $user)
    {
        return Excel::download(new UsersExport($user), 'users.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    // public function import()
    // {
    //     Excel::import(new UsersImport,request()->file('file'));

    //     return back();
    // }
}

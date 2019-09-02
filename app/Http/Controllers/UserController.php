<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate('10');
        return view('admin.customer.index', compact('users'));
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->route('customer.list')->with('success', 'success');
    }
}

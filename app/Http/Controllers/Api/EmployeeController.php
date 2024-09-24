<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Helper\Response;

class EmployeeController extends Controller
{
    public function index()
    {
        $users = Employee::all();
 
        return Response::data($users);
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'phone' => 'required|max:13'
        ]);

        $user = Employee::create($request->all());
 
        return Response::data($user);
    }
 
    public function update(Request $request, $id)
    {
        $user = Employee::find($id);
        $user->update($request->all());
 
        return Response::data($user);
    }

    public function getEmployee($id)
    {
        $user = Employee::find($id);
 
        return Response::data($user);
    }

    public function delete($id)
    {
        $data = Employee::destroy($id);
        return Response::data($data);
    }
}

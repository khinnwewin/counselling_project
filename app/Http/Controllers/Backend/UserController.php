<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\Backend\UserRequest;
Use Alert;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostStored;
class UserController extends Controller
{
   
    public function index(Request $request)
    {
        $users = User::paginate(25);
        return view('admin.user.index', compact('users'));
    }

    
    public function create()
    {
        return view('admin.user.create');
    }

   
    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user=User::create($data);
        Alert::success('Success', 'Successfully Created User');
        return redirect(route('user.index'));
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $user = User::find($id);
        $users = User::all();
        if(empty($user)) {
            Alert::error('Error', 'User Not Found');
            return redirect(route('user.index'));
        }
        return view('admin.user.edit', compact('users','user'));
    }

   
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if(empty($user)) {
            Alert::error('Error', 'User Not Found');
            return redirect(route('user.index'));
        }
        $user->update($request->all());
        Alert::success('Success', 'Successfully Updated User');
        return redirect(route('user.index'));
    }

  
    public function destroy($id)
    {
        $user = User::find($id);
        if(empty($user)) {
            Alert::error('Error', 'User Not Found');
            return redirect(route('user.index'));
        }
        $user->delete();
        Alert::success('Success', 'Successfully deleted User');
        return redirect(route('user.index'));
    }
}

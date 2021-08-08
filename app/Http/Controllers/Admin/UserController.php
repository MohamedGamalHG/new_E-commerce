<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Admin\User as UserRequest;
use App\Http\Requests\Admin\Edit as EditRequest;

class UserController extends Controller
{
    public function index(){
        return view('admin.user.index');
    }
    /* this function we use it to load data from database to put it in server side using Ajax with DataTables rawColumns */
    public function loadData(User $user)
    {
        $user = User::all();
        return DataTables::of($user)->
            rawColumns(['action'])
            ->editColumn('action',function ($model){
                $edit = editIconEdit(route('user.edit',$model->id));
                $delet = editIconDelete(route('user.delete',$model->id));
                return $edit .' '. $delet;
            })
            ->make(true);

    }
    public  function create(){
        return view('admin.user.create');
    }
    public function store(UserRequest $req){

        $user = User::create($req->all());
        return redirect(route('user.index'))->withFlashMessage(trans('admin.creates'));
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('admin.user.edit',compact('user'));
    }
    public  function update($id,EditRequest $req)
    {
        $user = User::findorFail($id);
        //return $user;
        $user->update($req->all());
        return redirect(route('user.index'))->withFlashMessage(trans('admin.updates'));
    }
    public function destroy($id)
    {
        if($id != '1') {
            $user = User::findorFail($id);
            $user->delete();
        }
        return redirect(route('user.index'))->withFlashMessage(trans('admin.deletes'));
    }
    public  function confirmation($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.delete',compact('user'));
    }
}

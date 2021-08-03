<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Arr;

class SettingController extends Controller
{
    public function  index(){
        $setting = Setting::orderBy('sorting_number')->get();
        return view('admin.home.setting',compact('setting'));
    }
    public function update(Request $req){

        /*  Arr::except this function from illuminate support Arr
            to except from the array one or  more paramater like
            Arr::except($req->toArray(),['_token','password'....])
        */
        return $req;
        Arr::except($req->toArray(),['_token']);
        $test = Setting::where('id',$req->id)->firstOrFail()->update();
        //return  $test;
        /*foreach(Arr::except($req->toArray(),['_token']) as $key => $value) {

            Setting::where('name',$key)->firstOrFail()->update(['value'=>$value]);
        }*/
        return redirect()->back();//->withFlashMessage('admin.update');
    }
}

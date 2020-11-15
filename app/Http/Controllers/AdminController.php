<?php

namespace App\Http\Controllers;

use App\Models\setup;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function setups()
    {
        $setups= setup::paginate(5);
        return view('admin.setups',compact('setups'));
    }
    public function editSetup($id)
    {
        $setup=setup::where('id',$id)->first();
        return view('admin.edit_setup',compact('setup'));
    }
    public function updateSetup(Request $request, $id)
    {
        $request->validate([
            'value'=>'required',
            'info'=>'required',
        ]);
        setup::where('id',$id)->update(['value'=>$request->value,'info'=>$request->info]);
        alert()->success('Edit value','Berhasil');
        return back();
    }
}

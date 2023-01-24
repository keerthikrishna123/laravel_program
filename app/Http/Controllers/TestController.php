<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class TestController extends Controller
{
    

    public function view_users()
    {
       
    $data=DB::select("select * from users where name not in('admin')");
    
    return view('admin/view1',compact('data'));
    
    }
    public function edit($id)
    {
       
        $sdata1 = user::find($id);
        return view('admin.edit', compact('sdata1'));
    
    }
    
public function update_users(Request $request, $id)
{
    $st =user::find($id);
    $st->name = $request->n;
    $st->password= Hash::make($request->p);
  
    $st->update();
    return redirect()->back()->with('success',' Updated Successfully');
  //  dd($student);
  //return $student->heading;
}

 public function view1($id)

 {

    
    $sdata1 = user::find($id);
   

 }
public function ap1($id)
{
    $st =user::find($id);
    $st->st = 2;
   
  
    $st->update();
   // return view("admin.view1");
  //  dd($student);
  //return $student->heading;
  return redirect()->back()->with('success',' Updated Successfully');
}


public function view_profile()
{  $uid=  Auth::user()->email; 

  $data= DB::select("select * from users where email='$uid'");
 
  return view('user.index', compact('data'));
}
}

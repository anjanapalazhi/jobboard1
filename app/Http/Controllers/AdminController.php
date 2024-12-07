<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminindex(){


 return view('admin.admin');



    }
public function viewpost(){

return view('admin.viewall.post');



}

public function list(){

 return view('admin.employerlist');


}

public function status(){

return view('admin.status');

}
public function approvedlist(){

return view('admin.approved');

}

public function rejectedlist(){


return view('admin.rejected');

}

public function pendinglist(){

return view('admin.pending');


}



}

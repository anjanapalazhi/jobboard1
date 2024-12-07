<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobseekerController extends Controller
{
    
 public function jobseekerindex(){


   return view('jobseeker.jobseeker');

}



public function jobseekerstatus(){

return view('jobseeker.status');

}

 public function jobseekerform(){


return view('jobseeker.apply');



 }

 public function viewpost(){

  return view('jobseeker.viewpost');

 }


}

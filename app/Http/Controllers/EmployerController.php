<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
 
    public function employerindex(){

 return view('employer.employer');



    }

public function addpost(){

return view('employer.add');

}


public function details(){

return view('employer.jobseeker');


}
public function status(){

return view('employer.status');


}
public function approved(){

return view('employer.approved');

}

public function shortlist(){


return view('employer.shortlisted');


}

public function pending(){

return view('employer.pending');

}

public function view(){

return view('employer.viewpost');


}


}

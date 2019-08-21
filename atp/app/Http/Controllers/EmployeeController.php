<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('employee.index');
    }

    public function add(){
        return view('employee.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(EmployeeRequest $req)
    {
        //

        $job = new Job();
       
        $job->cname = $req->cname;
        $job->jtitle = $req->jtitle;
        $job->jlocation = $req->jlocation;
        $job->salary = $req->salary;
        
        $job->save();

        //$data = User::where('uname', $req->uname)->where('password', $req->password)->get();
        return redirect()->route('employee.joblist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //

        $jobList = Job::all();

        //return json($stdlist);
        return view('employee.joblist', ['job'=> $jobList]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($jid){

        $job = Job::find($jid);
        return view('employee.edit', ['job'=>$job]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $jid){

        $job = Job::find($jid);

        $job->cname = $req->cname;
        $job->jtitle = $req->jtitle;
        $job->jlocation = $req->jlocation;
        $job->salary = $req->salary;
        
   
        $job->save();

        return redirect()->route('employee.joblist');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function delete($jid){

        $job = Job::find($jid);
        return view('employee.delete', ['job'=>$job]);
    }

    public function destroy($jid){

        Job::destroy($jid);
        return redirect()->route('employee.joblist');
    }
}

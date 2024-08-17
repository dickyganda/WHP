<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function index(){
        $job = DB::table('job')
        ->join('detailjob', 'detailjob.jobID', '=', 'job.id')
        ->join('style', 'style.id', '=', 'job.styleID')
        ->join('colour', 'colour.id', '=', 'job.colorID')
        ->get();
        // dd($job);

        return view('crud.index', [
            'job' => $job
        ]);
    }
}

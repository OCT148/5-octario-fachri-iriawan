<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Build', 'Repair', 'Upgrade']
        );
        return view('pages.services')->with($data);
    }

    public function build(){
        $data = array(
            'title' => 'Build',
        );
        return view('pages.build')->with($data);
    }

    public function repair(){
        $data = array(
            'title' => 'Repair',
        );
        return view('pages.repair')->with($data);
    }

    public function upgrade(){
        $data = array(
            'title' => 'Upgrade',
        );
        return view('pages.upgrade')->with($data);
    }


}

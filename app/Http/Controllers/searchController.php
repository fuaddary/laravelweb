<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class searchController extends Controller
{
    public function index(Request $request){
    	$data['events'] = Event::where('nama_event','like','%'.$request->search.'%')->get();
    	return view('event.events',$data);
    }
        public function kategori($kategori){
    	$data['events'] = Event::where('kategori','like',$kategori)->get();
    	return view('event.events',$data);
    }
}

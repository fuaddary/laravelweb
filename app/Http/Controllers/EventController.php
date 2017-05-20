<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function create(){
    	return view('event/create');
    }
    public function createEvent(Request $request){
    	$data = $request->all();
    	$event = array(
 			"image" => $request->image,
            "nama_event" => $request->nama_event,
    		"deskripsi_event" => $request->nama_event,
    		"lokasi" => $request->lokasi,
    		"repeat" => $request->repeat,
    		"start" => $request->start,
    		"end" => $request->end,
    		"nama_org" => $request->nama_org,
    		"deskripsi_org" => $request->deskripsi_org,
            "kategori" => $request->kategori);
		if(Event::create($event)){
			return redirect('event/manage');
		}
		else return "salah";
    }
    public function update($id)
    {
    	$data = Evet::find($id);
    	return view('event/update', compact('data'));
    }
    public function updateEvent(Request $request, $id){
    	$data = $request->all();
    	$event = array(
    		"image" => $request->image,
    		"nama_event" => $request->nama_event,
    		"deskripsi_event" => $request->nama_event,
    		"lokasi" => $request->lokasi,
    		"repeat" => $request->repeat,
    		"start" => $request->start,
    		"end" => $request->end,
    		"nama_org" => $request->nama_org,
    		"deskripsi_org" => $request->deskripsi_org,
            "kategori" => $request->kategori);
    	if(Event::where('id','=',$id)->update($event)){
    		return redirect('event/manage');
    	}
    }
    public function lihatEvent(Request $request)
    {
        $datas = Event::get();
        return view('event/events',compact('datas'));
    }

    public function hapusEvent($id)
    {
        if(Event::where('id','=', $id)->delete())
        {
            return redirect('event/manage');
        }
    }
}

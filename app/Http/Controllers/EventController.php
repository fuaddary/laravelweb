<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;
use File;
use Auth;


use Storage;


class EventController extends Controller
{


    public function __constuct(){
        $this->middleware('auth');
    }

    public function dashboard(){
        $user = new User();
        $data['events']=Event::where('user_id','=',Auth::user()->id)->get();
        return view('event.manage',$data);
    }
    public function createEvent(Request $request){
    	/*$image= $request->file('image');
        $destination_path = 'upload/images';
        $filename=$image->getClientOriginalName();*/
       /* Storage::put('upload/images/'.$filename,file_get_contents($request->file('image')->getRealPath()));
*/
        $event = new Event();
        $event->image = '';
        $event->user_id = auth()->id();
        $event->nama_event = $request->nama_event;
        $event->deskripsi_event = $request->deskripsi_event;
        $event->lokasi = $request->lokasi;
        $event->repeat = $request->repeat;
        $event->start = $request->start;
        $event->end = $request->end;
        $event->nama_org = $request->nama_org;
        $event->deskripsi_org = $request->deskripsi_org;
        $event->kategori = $request->kategori;
        $event->save();
        $filenameImage = array("image"=> $event->id.'.jpg');
        $event->update($filenameImage);

        /*$image= $request->file('image');*/
       $request->file('image')->move(public_path("/upload/images"), $event->id.'.jpg');
		if($event){
			return redirect('/home');
		}
		else return "salah";
    }
    public function edit($id)
    {
    	$data = Event::find($id);
    	return view('event.edit', compact('data'));
    }
    public function updateEvent(Request $request, $id){
    	$data = $request->all();
    	$event = array(
    		"image" => $request->image,
    		"nama_event" => $request->nama_event,
    		"deskripsi_event" => $request->deskripsi_event,
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

    public function detail($id){
        $data['events']= Event::where('id','=',$id)->get();    
        return view('event.detail',$data);
    }
    

    public function hapus($id)
    {
        File::delete('upload/images/'.$id.'.jpg');
        if(Event::where('id','=', $id)->delete())
        {
            
            return redirect('/home');
        }
    }

    public function download($filename) {
        return response()->download('upload/images/'.$filename);
    }

}

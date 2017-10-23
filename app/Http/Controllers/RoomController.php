<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomCreateRequest;
use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class RoomController extends Controller
{
    //

    public function create()
    {
        if(Auth::check())
        {
             return view('Room.create');
        }

        return redirect('/login');
       
    }

    public function store(RoomCreateRequest $request)
    {
       
            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/upload',$fileName);

            $newRoom = new Room;
            $newRoom->name = $request->input('name');
            $newRoom->description = $request->input('description');
            $newRoom->price = $request->input('price');
            $newRoom->imageUrl = $fileName;
            $newRoom->roomType = $request->input('roomType');

            $newRoom->save();
           return redirect('/rooms');    
    }
    
    public function list()
    {
        $rooms = Room::paginate(6);
       return view('Room.list',['rooms'=>$rooms]);
    }

    public function delete($id)
    {
        # code...
        $roomToDelete = Room::findOrFail($id);
        $fileName = $roomToDelete->imageUrl;
        
        Storage::delete('public/upload/'.$fileName);
        $roomToDelete->delete();
        return redirect('/rooms');
    }

    public function loadUpdate($id)
    {
        $room = Room::findOrFail($id);
        Storage::delete('public/upload/'.$room->imageUrl);
        return view('Room.update',['room' => $room]);
    }

    public function update(RoomCreateRequest $request)
    {
        # code...
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/upload',$fileName);
         Room::where('id',$request->id)->update(
            [
                 'name'=> $request->name,
                 'price'=> $request->price,
                 'description'=> $request->description,
                 'roomType'=> $request->roomType,
                 'imageUrl' => $fileName
             ]);
         return redirect('/rooms');
    }

    public function listRoom()
    {
        if(Auth::check())
        {
             return view('Room.table-list',['rooms'=> Room::all()]);
        }

        return redirect('/login');
       
    }
}

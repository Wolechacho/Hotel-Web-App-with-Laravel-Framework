<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LodgeBookRequest;
use App\LodgingDetails;
use App\Room;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LodgingDetailsController extends Controller
{
    //
    public function book($id)
    {
        # code...
        return view('LodgingDetails.create',['id'=>$id]);
        
    }

    public function save(LodgeBookRequest $request)
    {
        # code...

        $lodgeDetails = new LodgingDetails();
        $lodgeDetails->fullName = $request->fullName;
        $lodgeDetails->gender = $request->gender;
        $lodgeDetails->status = $request->status;
        $lodgeDetails->email = $request->email;
        $lodgeDetails->age = $request->age;
        $lodgeDetails->room_id = $request->room_id;
        $lodgeDetails->logInDate = Carbon::now(1);
        $lodgeDetails->logOutDate = Carbon::now(1)->addDays($request->expiryDate);
        
        $lodgeDetails->save();
        return redirect('thankyou');
    }

    public function delete($id)
    {
        # code...
        LodgingDetails::destroy($id);
        return redirect('/customer/list');
    }

    public function loadUpdate($id)
    {
        # code...
        $lodgeDetails = LodgingDetails::find($id);
         return view('LodgingDetails.update',['lodgeDetails' => $lodgeDetails]);
    }

    public function update(Request $request)
    {
        # code...

        $this->validate($request,[
            'expiryDate' => 'required|numeric'
        ]);

        $dateTimeFormat = explode(" ",$request->logOutDate);

        $date = $dateTimeFormat[0];
        $time = $dateTimeFormat[1];
         
         $date = explode("-",$date);

         $year = $date[0];
         $month = $date[1];
         $day = $date[2];

         

          $time = explode(":",$time);

          $hour = $time[0];
          $min = $time[1];
          $sec = $time[2];

         

          $oldDate = Carbon::create($year,$month,$day,$hour,$min,$sec,1);
          $modifyDate = $oldDate->addDays($request->expiryDate);

          echo $oldDate ;
          echo $modifyDate;
   
        
         LodgingDetails::where('id',$request->id)->update(['logOutDate' => $modifyDate]);
         return redirect('/customer/list');
    }

    public function list()
    {
        # code...
        if(Auth::user() != null)
        {
            return view('LodgingDetails.list',['lodgeDetails' => LodgingDetails::all()]);
        }
        return redirect('/login') ;
    }

    public function getRoom($id)
    {
        # code...
        $room = Room::find($id);
        return view('LodgingDetails.more-details',['room' => $room]);
    }
}

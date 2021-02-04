<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomBooking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class DashBoardController extends Controller
{
    public function chartjs(Request $request){
        if (Gate::allows('list_booking')){
            $month=RoomBooking::where('status','=',2)->pluck('created_at');
            //dd($month);
            $carbon_month= array();
            foreach ($month as $item) {
                $carbon_month[] = $item;
            }
            //$carbon_month[]=date('m');
            $data=RoomBooking::where('status','=',2)->pluck('total_cost');
            //$data1 = DB::table('room_bookings')->select('total_cost')->get();
            $data1 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-01')->sum('total_cost')*0.2;
            $data2 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-02')->sum('total_cost')*0.2;
            $data3 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-03')->sum('total_cost')*0.2;
            $data4 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-04')->sum('total_cost')*0.2;
            $data5 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-05')->sum('total_cost')*0.2;
            $data6 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-06')->sum('total_cost')*0.2;
            $data7 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-07')->sum('total_cost')*0.2;
            $data8 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-08')->sum('total_cost')*0.2;
            $data9 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-09')->sum('total_cost')*0.2;
            $data10 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-10')->sum('total_cost')*0.2;
            $data11 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-11')->sum('total_cost')*0.2;
            $data12 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-12')->sum('total_cost')*0.2;
            $data13 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-13')->sum('total_cost')*0.2;
            $data14 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-14')->sum('total_cost')*0.2;
            $data15 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-15')->sum('total_cost')*0.2;
            $data16 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-16')->sum('total_cost')*0.2;
            $data17 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-17')->sum('total_cost')*0.2;
            $data18 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-18')->sum('total_cost')*0.2;
            $data19 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-19')->sum('total_cost')*0.2;
            $data20 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-20')->sum('total_cost')*0.2;
            $data21 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-21')->sum('total_cost')*0.2;
            $data22 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-22')->sum('total_cost')*0.2;
            $data23 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-23')->sum('total_cost')*0.2;
            $data24 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-24')->sum('total_cost')*0.2;
            $data25 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-25')->sum('total_cost')*0.2;
            $data26 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-26')->sum('total_cost')*0.2;
            $data27 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-27')->sum('total_cost')*0.2;
            $data28 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-28')->sum('total_cost')*0.2;
            $data29 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-29')->sum('total_cost')*0.2;
            $data30 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-30')->sum('total_cost')*0.2;
            $data31 = DB::table('room_bookings')->where('status','=',2)->whereDate('created_at','2020-12-31')->sum('total_cost')*0.2;
            $datachart=array("$data1","$data2","$data3","$data4","$data5","$data6","$data7","$data8","$data9","$data10","$data11","$data12","$data13","$data14","$data15","$data16","$data17"
            ,"$data18","$data19","$data20","$data21","$data22","$data23","$data24","$data25","$data26","$data27","$data28","$data29","$data30","$data31");
            //dd($datachart);
            return view('dashboard',['Months' => $month, 'Data' => $datachart]);
        }else{
            return view('admin.home');
        }
    }
}

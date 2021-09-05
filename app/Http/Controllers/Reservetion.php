<?php

namespace App\Http\Controllers;

Use App\Mail\ContactFormMail;
Use App\Mail\ReservationConfirmMail;
Use App\Mail\ReservationCancelMail;
use Illuminate\Http\Request;
use App\Reservation;
use Illuminate\Support\Facades\Mail;
use DataTables;

class Reservetion extends Controller
{
    public function book_table(Request $request){

        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->time_from = $request->time_booking_from;
        $reservation->time_to = $request->time_booking_to;
        $reservation->booking_type = $request->type_booking;
        $reservation->reservation_type = $request->reservation_type;
        $reservation->reserved_date =  $request->reserved_date;
        $reservation->email= $request->email;
        $reservation->contact_number = $request->contact_number;
        $reservation->number_persons = $request->number_persons;
        $reservation->occasion = $request->occasion;
        $reservation->description = $request->description;
        $reservation->delete = 0;
        $reservation->status = 0; // 0 pennding , 1 confirmed , 2 canceled
        $reservation->save();
        $data = $request->all();

        // $data = [
        //     'title' => 'Title: Mail from Real Programmer',
        //     'body' => 'Body: This is for testing email using smtp'
        // ];

        // return view('emails.thanks');

        Mail::to("shisharoom.information@gmail.com")->send(new ContactFormMail($data));

        return response()->json(['success'=>'Reservation compleated']);
    }

    public function reservation_list(Request $request,$token)
    {
        if ($token == 'a4ddd2bdbba76e02c24aaad569b2ebbf') {
            if ($request->ajax()) {
                $data = Reservation::where('reservation_type',1)->latest()->get();
                return Datatables::of($data)
                        ->editColumn('status',function($row){
                            if($row->status == 0){
                            $btn = '<button type="button" class="btn btn-warning">pending</button>';  
                            }
                            elseif($row->status == 1){
                                $btn = '<button type="button" class="btn btn-success">confirmed</button>';

                            }else{
                                $btn = '<button type="button" class="btn btn-danger">canceled</button>';
                            }
                            
                            return $btn; 
                        })
                        ->addIndexColumn()
                        ->addColumn('confirm', function($row){
                            if($row->status == 1 || $row->status == 2){
                                $btn = '<button type="button" class="confirm btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" disabled>Confirm</button>';
                            }else{
                                $btn = '<button type="button" class="confirm btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" >Confirm</button>';
                            }
                        
                            return $btn;
                        })
                        ->addColumn('cancel', function($row){
                            if($row->status == 1 || $row->status == 2){
                                $btn = '<button type="button" class="cancel btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" disabled>Cancel</button>';                        
                            }else{
                                $btn = '<button type="button" class="cancel btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'">Cancel</button>';
                            }
                            return $btn;
                        })
                        ->rawColumns(['status','confirm','cancel'])
                        ->make(true);
            }

            return view('reservation_list')->with('token',$token);
        }

        return view('error_page');
    }
    public function reservation_list_pending(Request $request,$token)
    {
        if ($token == 'a4ddd2bdbba76e02c24aaad569b2ebbf') {
            if ($request->ajax()) {
                $data = Reservation::where('status',0)->where('reservation_type',1)->latest()->get();
                return Datatables::of($data)
                        ->editColumn('status',function($row){
                            if($row->status == 0){
                            $btn = '<button type="button" class="btn btn-warning">pending</button>';  
                            }
                            elseif($row->status == 1){
                                $btn = '<button type="button" class="btn btn-success">confirmed</button>';

                            }else{
                                $btn = '<button type="button" class="btn btn-danger">canceled</button>';
                            }
                            
                            return $btn; 
                        })
                        ->addIndexColumn()
                        ->addColumn('confirm', function($row){
                            if($row->status == 1 || $row->status == 2){
                                $btn = '<button type="button" class="confirm btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" disabled>Confirm</button>';
                            }else{
                                $btn = '<button type="button" class="confirm btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" >Confirm</button>';
                            }
                        
                            return $btn;
                        })
                        ->addColumn('cancel', function($row){
                            if($row->status == 1 || $row->status == 2){
                                $btn = '<button type="button" class="cancel btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" disabled>Cancel</button>';                        
                            }else{
                                $btn = '<button type="button" class="cancel btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'">Cancel</button>';
                            }
                            return $btn;
                        })
                        ->rawColumns(['status','confirm','cancel'])
                        ->make(true);
            }
            return view('reservation_list_pending')->with('token',$token);
        }

        return view('error_page');
    }
    public function reservation_list_confirmed(Request $request,$token)
    {
        if ($token == 'a4ddd2bdbba76e02c24aaad569b2ebbf') {
            if ($request->ajax()) {
                $data = Reservation::where('status',1)->where('reservation_type',1)->latest()->get();
                return Datatables::of($data)
                        ->editColumn('status',function($row){
                            if($row->status == 0){
                            $btn = '<button type="button" class="btn btn-warning">pending</button>';  
                            }
                            elseif($row->status == 1){
                                $btn = '<button type="button" class="btn btn-success">confirmed</button>';

                            }else{
                                $btn = '<button type="button" class="btn btn-danger">canceled</button>';
                            }
                            
                            return $btn; 
                        })
                        ->addIndexColumn()
                        ->addColumn('confirm', function($row){
                            if($row->status == 1 || $row->status == 2){
                                $btn = '<button type="button" class="confirm btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" disabled>Confirm</button>';
                            }else{
                                $btn = '<button type="button" class="confirm btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" >Confirm</button>';
                            }
                        
                            return $btn;
                        })
                        ->addColumn('cancel', function($row){
                            if($row->status == 1 || $row->status == 2){
                                $btn = '<button type="button" class="cancel btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" disabled>Cancel</button>';                        
                            }else{
                                $btn = '<button type="button" class="cancel btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'">Cancel</button>';
                            }
                            return $btn;
                        })
                        ->rawColumns(['status','confirm','cancel'])
                        ->make(true);
            }

            return view('reservation_list_confirmed')->with('token',$token);
        }

        return view('error_page');
    }
    public function reservation_list_canceled(Request $request,$token)
    {  
        if ($token == 'a4ddd2bdbba76e02c24aaad569b2ebbf') {
            if ($request->ajax()) {
                $data = Reservation::where('status',2)->where('reservation_type',1)->latest()->get();
                return Datatables::of($data)
                        ->editColumn('status',function($row){
                            if($row->status == 0){
                            $btn = '<button type="button" class="btn btn-warning">pending</button>';  
                            }
                            elseif($row->status == 1){
                                $btn = '<button type="button" class="btn btn-success">confirmed</button>';

                            }else{
                                $btn = '<button type="button" class="btn btn-danger">canceled</button>';
                            }
                            
                            return $btn; 
                        })
                        ->addIndexColumn()
                        ->addColumn('confirm', function($row){
                            if($row->status == 1 || $row->status == 2){
                                $btn = '<button type="button" class="confirm btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" disabled>Confirm</button>';
                            }else{
                                $btn = '<button type="button" class="confirm btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" >Confirm</button>';
                            }
                        
                            return $btn;
                        })
                        ->addColumn('cancel', function($row){
                            if($row->status == 1 || $row->status == 2){
                                $btn = '<button type="button" class="cancel btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" disabled>Cancel</button>';                        
                            }else{
                                $btn = '<button type="button" class="cancel btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'">Cancel</button>';
                            }
                            return $btn;
                        })
                        ->rawColumns(['status','confirm','cancel'])
                        ->make(true);
            }

            return view('reservation_list_canceled')->with('token',$token);
        }

        return view('error_page');
    }
    public function reservation_list_venue(Request $request,$token)
    {
        if ($token == 'a4ddd2bdbba76e02c24aaad569b2ebbf') {
            if ($request->ajax()) {
                $data = Reservation::where('reservation_type',2)->latest()->get();
                return Datatables::of($data)
                        ->editColumn('status',function($row){
                            if($row->status == 0){
                            $btn = '<button type="button" class="btn btn-warning">pending</button>';  
                            }
                            elseif($row->status == 1){
                                $btn = '<button type="button" class="btn btn-success">confirmed</button>';

                            }else{
                                $btn = '<button type="button" class="btn btn-danger">canceled</button>';
                            }
                            
                            return $btn; 
                        })
                        ->addIndexColumn()
                        ->addColumn('confirm', function($row){
                            if($row->status == 1 || $row->status == 2){
                                $btn = '<button type="button" class="confirm btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" disabled>Confirm</button>';
                            }else{
                                $btn = '<button type="button" class="confirm btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" >Confirm</button>';
                            }
                        
                            return $btn;
                        })
                        ->addColumn('cancel', function($row){
                            if($row->status == 1 || $row->status == 2){
                                $btn = '<button type="button" class="cancel btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'" disabled>Cancel</button>';                        
                            }else{
                                $btn = '<button type="button" class="cancel btn btn-primary btn-sm" data-id="'.$row->id.'" data-email="'.$row->email.'">Cancel</button>';
                            }
                            return $btn;
                        })
                        ->rawColumns(['status','confirm','cancel'])
                        ->make(true);
            }

            return view('reservation_list_venue')->with('token',$token);
        }

        return view('error_page');
    }

    public function error_permission(Request $request)
    {
        return view('error_page');
    }
    public function reservation_confirm($id)
    {
        
        Reservation::where('id', $id)->update(['status' => 1]);
        $data = Reservation::where('id', $id)->get()[0];
        //print_r($data['email']);exit;
        Mail::to($data['email'])->send(new ReservationConfirmMail($data));

        return response()->json(['success'=>'Reservation Confirmed']);
    }
    public function reservation_cancel($id)
    {
        
        Reservation::where('id', $id)->update(['status' => 2]);
        $data = Reservation::where('id', $id)->get()[0];
        //print_r($data['email']);exit;
        Mail::to($data['email'])->send(new ReservationCancelMail($data));

        return response()->json(['success'=>'Reservation Canceled']);
    }

}

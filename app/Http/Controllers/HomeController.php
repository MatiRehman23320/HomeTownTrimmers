<?php

namespace App\Http\Controllers;
use App\customers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\barbers;
use App\barber_reply;
use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $show = barbers::all();
        $user_role=Auth::user()->role;
        if($user_role=='barber'){
            $ide =barbers::where('user_id',Auth::user()->id)->get()->first();
            return view('barber.dashboard',compact('ide'));
        }
        if($user_role=="customer"){
            return view('customer.dashboard');
        }
        return view('home');

    }
    public function show(){
        $barbers = barbers::all();
        return view('Customer_Location',compact('barbers'));
    }
    public function find(Request $request){
        $post= Auth::user();
        $post->lat = $request->lat;
        $post->lng = $request->lng;
        $post->update();

        $lat = Auth::user()->lat;
        $lng = Auth::user()->lng;
        $radius = 50;
        $string = "SELECT id,file, Barber_Name, Shop_Name, address, ( 6371 * acos( cos( radians(?) ) *
        cos( radians( lat ) ) * cos( radians( lng ) - radians(?) ) + sin( radians(?) ) * sin( radians( lat ) ) ) )
        AS distance FROM barbers HAVING distance < ? ORDER BY distance LIMIT 0 , 10;";
        $args = [$lat, $lng, $lat, $radius];
        $data = DB::select($string, $args);
        return view('nearest_Barbers',compact('data'));
    }
    public function view($id){
        $info= barbers::where('id',$id)->get();
        return view('customer.barberinfo',compact('info'));
    }
    public function post(){
        $ide =barbers::where('user_id',Auth::user()->id)->get()->first();
        return view('barber.Post',compact('ide'));
    }
    public function view_post(){
        $post_count=0;
        $post_history = barbers::where('user_id',Auth::user()->id)->get();
        if(isset($post_history)){
            $post_count=$post_history->count();
            return view('barber.view_post',compact('post_history','post_count'));
        }

        return view('barber.view_post',compact('post_history','post_count'));

    }
    public function chat($id){
        $chat=barbers::where('id',$id)->get();
        return view('customer.msg',compact('chat'));
    }
    public function barberchat(){
        $id=Auth::user()->id;
        $barber_id=  barbers::where('user_id',$id)->get()->first();
        $customermsg='';
        $msg_count=0;
        if(isset($barber_id)){
            $customermsg =customers::where('barber_id',$barber_id->id)->get();
            $msg_count=$customermsg->count();
                return view('barber.msg',compact('customermsg','msg_count'));
        }
        return view('barber.msg',compact('customermsg','msg_count'));
    }
    public function barber_reply($id ,Request $request){
        $reply = new Barber_reply();
        $reply->barber_reply=$request->barber_reply;
        $reply->barber_id=$id;
        $reply->user_id=Auth::user()->id;
        $reply->save();

        return redirect()->back();
    }
    public function msg($id,Request $request)
    {
        $post = new customers();
        $post->name = $request->name;
        $post->barber_id=$id;
        $post->user_id= Auth::user()->id;
        $post->cus_address = $request->cus_address;
        $post->Day=$request->day;
        $post->time = $request->time;
        $post->phone = $request->phone;

        $post->save();
        return redirect()->route('barberreply');
    }
     public function reply(){
        $reply= barbers::all();
         return view('customer.reply',compact('reply'));
     }
     public function barberreply(Request $request){
        //  return $cus_id;
        $id=Auth::user()->id;
        $customer_id= customers::where('user_id',$id)->get()->first();
        if(isset($customer_id)){
            $barber_reply_to_customer=Barber_reply::where('customer_id',$customer_id->id)->get()->first();
            if(isset($barber_reply_to_customer)){
                return view('customer.barber_reply',compact('barber_reply_to_customer'));
            }
        }
     }
     public function barber_replied($cus_id ,Request $request){

        $reply = new Barber_reply();
        $reply->barber_reply=$request->barber_reply;
        $reply->customer_id=$cus_id;
        $reply->user_id=Auth::user()->id;
        $reply->save();

        return redirect()->back();
    }
    public function viewServices(){

        return view('services');

    }
    public function viewbarberslist(){
        $barbers= barbers::all();
        return view('customer.barberslist',compact('barbers'));

    }
    public function viewappointments_List(){
        $user_id=Auth::user()->id;
        $barber=barbers::where('user_id',$user_id)->get();
        foreach($barber as $apointment){
        $appointments= customers::with('User')->where('barber_id',$apointment->id);
        }
        $no_of_pending=$appointments->count();
        $pending_appointments=$appointments->get();

        return view('barber.appointments_List',compact('pending_appointments','no_of_pending'));
    }
}

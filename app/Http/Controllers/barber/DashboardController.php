<?php
namespace App\Http\Controllers\barber;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\barbers;

class DashboardController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        $ide =barbers::where('user_id',Auth::user()->id)->get()->first();
        return view('barber.dashboard',compact('ide'));
    }
}


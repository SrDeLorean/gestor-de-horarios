<?php

namespace App\Http\Controllers\Attendant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendantDashboardController extends Controller {

  public function index() {
    return view('attendant.dashboard');
  }
}
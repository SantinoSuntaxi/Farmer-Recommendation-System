<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
  public function index()
  {
    return view('Pages.Satuan.index');
  }
}

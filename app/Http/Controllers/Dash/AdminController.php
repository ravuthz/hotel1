<?php

namespace App\Http\Controllers\Dash;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function getIndex() {
        return view('dash.admin.index');
    }
}

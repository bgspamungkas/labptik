<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class MemberController extends BaseController
{
    public function index()
    {
        return view('admin/member/index');
    }
}

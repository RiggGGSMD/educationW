<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;


class PagesController extends Controller
{
    public function root(Lab $lab)
    {
        return view('pages.root',compact('lab'));
    }
    public function permissionDenied()
    {
        // 如果当前用户有权限访问后台，直接跳转访问
        if (config('administrator.permission')()) {
            return redirect(url(config('administrator.uri')), 302);
        }
        // 否则使用视图
        return view('pages.permission_denied');
    }
}

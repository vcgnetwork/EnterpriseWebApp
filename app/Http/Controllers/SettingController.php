<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    function appSettings(Request $request)
    {
        return view('system.index');
    }

    public function appSettingCreate(Request $request)
    {
        return view('system.application-settings');
    }

    public function applicationSettingCreateAction(Request $request)
    {
        return view('system.application-setting-create');
    }

    public function documentationAction(Request $request)
    {
        return view('system/documentation');
    }

    public function menuAction(Request $request)
    {
        return view('system/menu');
    }

    public function usersAction(Request $request)
    {
        return view('system/users');
    }

    public function roleAction(Request $request)
    {
        return view('system/role');
    }

    public function aclAction(Request $request)
    {
        return view('system/acl');
    }

    public function siteMapAction(Request $request)
    {
        return view('system/site-map');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(Request $request)
    {
        return view('page.index');
    }

    public function about(Request $request)
    {
        return view('page.about');
    }

    public function contact(Request $request)
    {
        return view('page.contact');
    }

    public function search(Request $request)
    {
        return view('page.search');
    }

    public function overview(Request $request)
    {
        return view('page.overview');
    }

    public function expansion(Request $request)
    {
        return view('page.expansion');
    }

    public function marketing(Request $request)
    {
        return view('page.marketing');
    }

    public function support(Request $request)
    {
        return view('page.support');
    }

    public function siteMap(Request $request)
    {
        return view('page.siteMap');
    }

    public function json(Request $request)
    {
        $data = [];
        $data['id'] = 1;
        $data['userName'] = 'bill@example.com';
        $data['firstName'] = 'Bill';
        $data['lastName'] = 'Example';
        $data['isActive'] = 1;
        return new \Response(json_encode($data), 200, array('Content-Type' => 'application/json'));
    }

}

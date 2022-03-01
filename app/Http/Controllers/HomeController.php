<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cvmetaTags = DB::table('metas')->select('id','title_tag','site_tagline','meta_tag')->where('title_tag','cv')->get();
        return view('frontend.home.cv',[
            'cvmetaTags' => $cvmetaTags
        ]);
    }
    public function home()
    {
        $cvmetaTags = DB::table('metas')->select('id','title_tag','site_tagline','meta_tag')->where('title_tag','home')->get();
        return view('frontend.home.home',[
            'cvmetaTags' => $cvmetaTags
        ]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function achivement()
    {
        $cvmetaTags = DB::table('metas')->select('id','title_tag','site_tagline','meta_tag')->where('title_tag','achivements')->get();
        return view('frontend.home.achivements',[
            'cvmetaTags' => $cvmetaTags
        ]);
    }
    public function whatToDo()
    {
        $cvmetaTags = DB::table('metas')->select('id','title_tag','site_tagline','meta_tag')->where('title_tag','what-to-do')->get();
        return view('frontend.home.whatToDo',[
            'cvmetaTags' => $cvmetaTags
        ]);
    }
    public function howToDo()
    {
        $cvmetaTags = DB::table('metas')->select('id','title_tag','site_tagline','meta_tag')->where('title_tag','how-to-do')->get();
        return view('frontend.home.how-to-do',[
            'cvmetaTags' => $cvmetaTags
        ]);
    }
    public function lastActivites()
    {
        $cvmetaTags = DB::table('metas')->select('id','title_tag','site_tagline','meta_tag')->where('title_tag','latest-activity')->get();
        return view('frontend.home.latest-activity',[
            'cvmetaTags' => $cvmetaTags
        ]);   
    }
    public function contact()
    {
        $cvmetaTags = DB::table('metas')->select('id','title_tag','site_tagline','meta_tag')->where('title_tag','contact')->get();
        return view('frontend.home.contact',[
            'cvmetaTags' => $cvmetaTags
        ]); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

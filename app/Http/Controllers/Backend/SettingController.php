<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.settings.setting');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([

            'site_title'    => 'string|max:255|nullable',
            'site_tagline'  => 'string|max:255|nullable',
            'websit_logo'   => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'web_sitfav'    => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $input = $request->all();

        if($request->hasFile('websit_logo')) {

            $image = $request->file('websit_logo');
            $destinationPath = 'backend/logo/';
            $logoImage = date('YmdHis') . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $logoImage);
            $input['websit_logo'] = "$logoImage";
        }

        if($request->hasFile('web_sitfav')) {

            $imageFave = $request->file('web_sitfav');
            $destinationPath = 'backend/favicon/';
            $favImage = date('YmdHis') . "-" . $imageFave->getClientOriginalName();
            $imageFave->move($destinationPath, $favImage);
            $input['web_sitfav'] = "$favImage";
        }

        try {
            
         $setting = Setting::create($input);
         return redirect()->back()->with('message', 'Data Insert Successfully');

        } catch (\Exception $e) {
            
            return redirect()->back()->with('message', 'Data Not Insert Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $setting = Setting::select('id','site_title','site_tagline','websit_logo','web_sitfav')->get();
        return view('backend.settings.settingView',[
            'setting' => $setting,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('backend.settings.settingEdit',[
            'setting' => $setting,
        ]);
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
        $setting = Setting::findOrFail($id);
        $request ->validate([

            'site_title'    => 'string|max:255|nullable',
            'site_tagline'  => 'string|max:255|nullable',
            'websit_logo'   => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'web_sitfav'    => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $input = $request->all();
  
        if($request->hasFile('websit_logo')) {

            $image = $request->file('websit_logo');
            $destinationPath = 'backend/logo/';
            $logoImage = date('YmdHis') . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $logoImage);
            $input['websit_logo'] = "$logoImage";

        }else{

            unset($input['websit_logo']);
        }
        if($request->hasFile('web_sitfav')) {

            $imageFave = $request->file('web_sitfav');
            $destinationPath = 'backend/favicon/';
            $favImage = date('YmdHis') . "-" . $imageFave->getClientOriginalName();
            $imageFave->move($destinationPath, $favImage);
            $input['web_sitfav'] = "$favImage";
        }
        else{
            
            unset($input['web_sitfav']);
        }

        $setting->update($input);
        return redirect()->back();
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

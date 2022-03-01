<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\Backend\Meta;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.seoPanel.metatag');
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
        $request->validate([
            'title_tag'     =>'string|max:1000',
            'meta_tag'      =>'string|max:1000',
            'site_tagline'  =>'string|max:1000',
        ]);

        $input = $request->all();

        try {
             
            $meta = Meta::create($input);

            return redirect()->back()->with('message', 'Data Insert Successfully');

        } catch (\Exception $e) {

            return redirect()->back()->with('message', 'Data Not Insert Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $metatags = Meta::select('id','title_tag','meta_tag','site_tagline')->paginate(10);

        return view('backend.seoPanel.metaView',[
            'metatags' => $metatags,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $meta = Meta::find($id);
         return view('backend.seoPanel.metaEdit',[
             'meta' =>$meta,
         ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backend\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_tag'     =>'string|max:1000',
            'meta_tag'      =>'string|max:1000',
            'site_tagline'  =>'string|max:1000',
        ]);

        $meta = Meta::find($id);
        $input = $request->all();
        $meta->update($input);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $destry = Meta::find($id);
     $destry->delete();
     return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\storeSettings;
use Illuminate\Http\Request;

class StoreSettingController extends Controller
{


    public function general()
    {
        return view('admin.setting.general');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\storeSettings  $storeSettings
     * @return \Illuminate\Http\Response
     */
    public function show(storeSettings $storeSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\storeSettings  $storeSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(storeSettings $storeSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\storeSettings  $storeSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, storeSettings $storeSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\storeSettings  $storeSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(storeSettings $storeSettings)
    {
        //
    }
}

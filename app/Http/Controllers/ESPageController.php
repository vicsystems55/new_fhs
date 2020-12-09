<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\ActivityLog;

use Auth;

class ESPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        $activity_log = ActivityLog::latest()->where('action_by', Auth::user()->id)->get();

        return view('/pages/es-dashboard', [
            'pageConfigs' => $pageConfigs,
            'user_logs' => $activity_log
        ]);
    }

    public function all_applications()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        

        return view('/pages/es/all_applications', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function single_application()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('/pages/es/single_application', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function all_accounts()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        $user_data = User::all();

        return view('/pages/es/all_accounts', [
            'pageConfigs' => $pageConfigs,
            'user_data' => $user_data
        ]);
    }

    public function single_account($id)
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        $single_user = User::find($id);

        return view('/pages/es/single_account', [
            'pageConfigs' => $pageConfigs,
            'single_user' => $single_user
        ]);
    }

    public function notifications()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('/pages/es/notifications', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function single_notification()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('/pages/es/single_notification', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function settings()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('/pages/es/settings', [
            'pageConfigs' => $pageConfigs
        ]);
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

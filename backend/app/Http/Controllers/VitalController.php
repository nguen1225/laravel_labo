<?php

namespace App\Http\Controllers;

use App\Models\Repositories\VitalRepository;
use App\Models\Vital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VitalController extends Controller
{
    private VitalRepository $vitalRepository;
    public function __construct(VitalRepository $vitalRepository)
    {
        $this->vitalRepository = $vitalRepository;
    }

    /**
     * バイタル画面
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $current_user = Auth::user();
        $vital_records = Vital::query()->where('user_id', $current_user->id)->get();
        return view('vital.index', compact('vital_records'));
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
     * 身体機能保存処理
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->vitalRepository->store($request);

        return redirect()->route('vital.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vital  $vital
     * @return \Illuminate\Http\Response
     */
    public function show(Vital $vital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vital  $vital
     * @return \Illuminate\Http\Response
     */
    public function edit(Vital $vital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vital  $vital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vital $vital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vital  $vital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vital $vital)
    {
        //
    }
}

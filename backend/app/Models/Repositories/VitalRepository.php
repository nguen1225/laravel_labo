<?php

namespace App\Models\Repositories;


use App\Models\Vital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VitalRepository
{
    /**
     * 身体機能保存処理
     * @param $request
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function store($request)
    {
        $user = Auth::user();

        return Vital::query()->create([
            'user_id'            => $user->id,
            'title'              => $request->title,
            'content'            => $request->content,
            'height'             => $request->height,
            'body_weight'        => $request->body_weight,
            'heart_rate'         => $request->heart_rate,
            'min_blood_pressure' => $request->min_blood_pressure,
            'max_blood_pressure' => $request->max_blood_pressure,
            'registered_at'      => $request->registered_at
        ]);
    }

}

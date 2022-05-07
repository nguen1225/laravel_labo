<?php

namespace App\Http\Controllers\Api;

use App\Models\Vital;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class VitalController
{
    /**
     * vitalテーブルのレコード全件取り出し
     * ※この関数は今使ってない、直接APIから取得せずにbladeからvueに渡している。
     * @return JsonResponse
     */
    public function vitalRecords(): JsonResponse
    {
        $current_user = Auth::user();
        $vital_records = Vital::query()->where('user_id', $current_user)->get();
        return response()->json($vital_records);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buah;
use Validator;
use Storage;

class BuahController extends Controller
{
    public function TampilBuah()
    {
        $buah = Buah::all();
        if($buah){
            return response()->json([
                'status' => TRUE,
                'msg' => 'Berhasil',
                'buah' => $buah
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'msg' => 'Error',
                'buah' => $buah
            ]);
        }
    }
}

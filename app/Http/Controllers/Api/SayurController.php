<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sayur;
use Validator;
use Storage;

class SayurController extends Controller
{
    public function TampilSayur()
    {
        $sayur = Sayur::all();
        if($sayur){
            return response()->json([
                'status' => TRUE,
                'msg' => 'Berhasil',
                'sayur' => $sayur
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'msg' => 'Error',
                'sayur' => $sayur
            ]);
        }
    }
}

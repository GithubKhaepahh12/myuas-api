<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Storage;

class UserController extends Controller
{
    public function TampilProfil()
    {
        $user = User::all();
        if($user){
            return response()->json([
                'status' => TRUE,
                'msg' => 'Berhasil',
                'user' => $user
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'msg' => 'Error',
                'user' => $user
            ]);
        }
    }
}

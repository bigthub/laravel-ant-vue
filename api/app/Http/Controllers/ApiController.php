<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    protected function success( $message = '请求成功', $code = 0, $data = [])
    {
        return $this->response($code, $message, $data);
    }

    protected function error($message = '请求失败', $code = 1, $data = [])
    {
        return $this->response($code, $message, $data);
    }

    protected function data($data = [],  $message = '请求成功', $code = 0)
    {
        return $this->response($code, $message, $data);
    }

    protected function response($code, $message, $data)
    {
        return response()->json([
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ]);
    }
}

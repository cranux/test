<?php
/**
 * Created by PhpStorm.
 * User: hongtang
 * Date: 2018/8/11
 * Time: 22:08
 */
if (!function_exists('response_json')) {

    function response_json($code, $messages, $data=[])
    {
        $array = [
            'code' => $code,
            'message' => $messages
        ];
        if ($data) {
            $array['data'] = $data;
        }
        return response()->json($array);
    }
}
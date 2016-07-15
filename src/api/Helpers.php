<?php
namespace api;

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15/07/2016
 * Time: 9:04 CH
 */

class Helpers {
    public static function jsonResponse($code, $data) {
        echo json_encode(array(
            'code' => $code,
            'data' => $data
        ));
    }
}
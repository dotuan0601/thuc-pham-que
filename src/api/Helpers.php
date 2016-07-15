<?php
namespace api;

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15/07/2016
 * Time: 9:04 CH
 */

class Helpers {
    public static function jsonResponse($data) {
        echo json_encode($data);
    }
}
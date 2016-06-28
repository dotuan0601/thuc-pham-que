<?php

namespace App\Http\Controllers;

use App\Agency;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Hàm chung trả response
     *
     * @param $message
     * @param $code
     * @return Response
     */
    private function responseClient($message, $code) {
        return (new Response(json_encode(array('message' => $message, 'code' => $code)), 200));
    }

    /**
     * Hàm dùng để đăng ký đại lý
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $check_params = $this->checkRegisterParams();
        if (!$check_params['valid']) {
            return $this->responseClient($check_params['message'], 500);
        }

        // save data
        $agency = new Agency();
        $agency->create($_GET);
        return $this->responseClient('ok', 200);
    }

    private function checkRegisterParams() {
        $data = $_GET;
        if (count($data) == 0) {
            return array('valid' => false, 'message' => 'empty data');
        }

        // email
        if (array_key_exists('email', $data)) {
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                return array('valid' => false, 'message' => 'empty email or email not valid');
            }
        }

        // phone


        return array('valid' => true, 'message' => 'ok');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
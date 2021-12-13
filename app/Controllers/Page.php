<?php

namespace App\Controllers;

use App\Models\DeviceModel;

class Page extends BaseController
{

    public function home()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('pages/home', $data);
    }
    public function device()
    {
        $data = [
            'title' => 'Device',

        ];

        $deviceModel = new DeviceModel();
        $device = $deviceModel->findAll();
        dd($device);


        return view('pages/device', $data);
    }

    public function deviceDetail()
    {
        $data = [
            'title' => 'Detail',
            'tabel' => [
                [
                    'id' => 'Rumah',
                    'brand' => 'Jalan mawar',
                    'status' => 'BD'

                ],
                [
                    'id' => 'Kantor',
                    'brand' => 'Jalan setia budi',
                    'status' => 'Jkt'
                ]
            ]
        ];
        return view('pages/deviceDetail', $data);
    }
}

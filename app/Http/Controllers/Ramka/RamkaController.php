<?php

namespace App\Http\Controllers\Ramka;

use App\Model\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RamkaController extends Controller
{
    public function buy (Request $request)
    {
        $input = $request->input();
        $client = new Client();
        $client->first_name = $input['firstName'];
        $client->last_name = $input['lastName'];
        $client->phone = $input['phone'];
        $client->save();

        return redirect()->back();

    }

    public function test()
    {
        dd(123);
    }
}

<?php

namespace App\Http\Controllers\Ramka;

use App\Model\Client;
use App\Model\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RamkaController extends Controller
{
    public function buy (Request $request)
    {
        try{
        $input = $request->input();
        $client = new Client();
        $client->first_name = $input['firstName'];
        $client->last_name = $input['lastName'];
        $client->phone = $input['phone'];
        $client->save();

        $order = new Order();
        $order->client_id = $client->id;
        $order->product = $input['recipient'];
        $order->color = $input['color'] ? $input['color'] : '';
        $order->count = $input['count'];
        $order->price_total = $input['priceTotal'];
        $order->save();
        } catch (\Exception $e){
            \Log::error($e);
        }
        return redirect()->back();
    }

    public function test()
    {
        /** @var Client $client */
        $client = Client::find(5);

        dd($client->orders);
    }
}

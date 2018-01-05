<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Room;

class RoomsController extends Controller
{
    //
    public function checkAvailableRooms($client_id, Request $request)
    {
        //get dates in the form
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');
        //create models instances
        $client = new Client();
        $room = new Room();

        $data = [];
        $data['dateFrom'] = $dateFrom;
        $data['dateTo'] = $dateTo;

        //get the available rooms and the client data
        $data['rooms'] = $room->getAvailableRooms($dateFrom, $dateTo);
        $data['client'] = $client->find($client_id);

        return view('rooms/checkAvailableRooms', $data);
    }
}

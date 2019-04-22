<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

public function index()
{
  $tickets=Ticket::paginate(5);
  $sortby="date_updated";

  return view('tickets.index', compact('tickets',$sortby));

}

public function store(Request $request)
{
    $request->validate([
        'fault' => 'required',
        'reporter_details' => 'required',
        'appliance_details' => 'required',
        'appliance_address' => 'required',
        'residential_status' => 'required',
        'landlord_details' => 'nullable',
        'status' => 'required'
    ]);

    $ticket = Ticket::create($request->all());

    return redirect('/index')->with('success', 'Ticket created');
}


public function show(Ticket $ticket)
{
    return $ticket;
}

public function edit($id){

    $ticket = Ticket::find($id);
    return view('tickets.edit',compact('ticket'));

}


public function update(Request $request, $id)
{
    $request->validate([
      'fault' => 'required',
      'reporter_details' => 'required',
      'appliance_details' => 'required',
      'appliance_address' => 'required',
      'residential_status' => 'required',
      'landlord_details' => 'nullable',
      'status' => 'required'
    ]);

        $ticket = Ticket::find($id);
        $ticket->fault =  $request->get('fault');
        $ticket->reporter_details = $request->get('reporter_details');
        $ticket->appliance_details = $request->get('appliance_details');
        $ticket->appliance_address = $request->get('appliance_address');
        $ticket->residential_status = $request->get('residential_status');
        $ticket->landlord_details = $request->get('landlord_details');
        $ticket->date_updated = $request->get('date_updated');
        $ticket->save();

    $ticket->update($request->all());

    return redirect('/index')->with('success', 'Ticket updated!');
}

public function destroy(Ticket $ticket)
{
    $ticket->delete();

    return redirect('/index')->with('success', 'Ticket deleted!');
}
}

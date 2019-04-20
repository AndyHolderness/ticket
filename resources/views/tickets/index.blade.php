@extends('home')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Tickets</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Ticket ID / Status</td>
          <td>Fault</td>
          <td>Applicance</td>
          <td>Applicance Address</td>
          <td>Reported By</td>
          <td>Residential Status</td>
          <td>Landlord Details</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>

        @foreach($tickets as $ticket)
        <tr>
            <td>{{$ticket->id}}  -  {{  $ticket->status }}</td>
            <td>{{$ticket->fault}}</td>
            <td>{{$ticket->appliance_details}}</td>
            <td>{{$ticket->appliance_address}}</td>
            <td>{{$ticket->reporter_details}}</td>
            <td>{{$ticket->residential_status}} </td>
            <td>{{  $ticket->landlord_details }}</td>
            <td>
               <a href="{{ route('tickets.edit',$ticket->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                  <form action="{{ route('tickets.destroy', $ticket->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        {{ $tickets->links() }}
    </tbody>
  </table>
<div>
</div>
@endsection

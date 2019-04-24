@extends('home')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Tickets</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <th @sortablelink('id')>Ticket Number</th>
          <th @sortablelink('status')>Status</th>
          <th>Fault</th>
          <th>Applicance</th>
          <th>Applicance Address</th>
          <th>Reported By</th>
          <th>Residential Status</th>
          <th>Landlord Details</th>
          <th @sortablelink('created_by')>Created</th>
          <th @sortablelink('date_updated')>Last updated</th>

          <th colspan = 2>Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach($tickets as $ticket)
        <tr>
            <td>{{$ticket->id}}</td>
            <td>{{$ticket->status}}</td>
            <td>{{$ticket->fault}}</td>
            <td>{{$ticket->appliance_details}}</td>
            <td>{{$ticket->appliance_address}}</td>
            <td>{{$ticket->reporter_details}}</td>
            <td>{{$ticket->residential_status}} </td>
            <td>{{$ticket->landlord_details }}</td>
            <td>{{$ticket->date_created }}</td>
            <td>{{$ticket->date_updated }}</td>
            <td>
               <a href="{{ route('tickets.edit',$ticket->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                  <form action="{{ route('tickets.destroy', $ticket->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button onclick="return confirm('Are you sure?')" class="btn btn-danger" type="submit">Delete</button>
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

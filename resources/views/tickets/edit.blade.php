@extends('home')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('tickets.update', $ticket->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="fault">Fault description:</label>
                <input type="text" class="form-control" name="fault" value={{ $ticket->fault }} />
            </div>

            <div class="reporter_details">
                <label for="reporter_details">Reporter details:</label>
                <input type="text" class="form-control" name="reporter_details"  value={{ $ticket->reporter_details }} />
            </div>

            <div class="form-group">
                <label for="appliance_details">Appliance details:</label>
                <input type="text" class="form-control" name="appliance_details"  value={{ $ticket->appliance_details }} />
            </div>
            <div class="form-group">
                <label for="appliance_address">Appliance address:</label>
                <input type="text" class="form-control" name="appliance_address"  value={{ $ticket->appliance_address }} />
            </div>
            <div class="form-group">
                <label for="residential_status">Residential status:</label>
                <input type="text" class="form-control" name="residential_status"  value={{ $ticket->residential_status }} />
            </div>
            <div class="form-group">
                <label for="landlord_details">Landlord details (if Tenant):</label>
                <input type="text" class="form-control" name="landlord_details"  value={{ $ticket->landlord_details }} />
            </div>
            <div class="form-group">
                <label for="status">Ticket Status:</label>
                <input type="text" class="form-control" name="status" value="open"  value={{ $ticket->status }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

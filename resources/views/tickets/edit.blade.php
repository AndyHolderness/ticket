@extends('home')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Amend Ticket</h1>

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
                <input type="text" class="form-control" name="fault" value="{{ $ticket->fault }}" />
            </div>

            <div class="reporter_details">
                <label for="reporter_details">Reporter details:</label>
                <input type="text" class="form-control" name="reporter_details"  value="{{ $ticket->reporter_details }}" />
            </div>

            <div class="form-group">
                <label for="appliance_details">Appliance details:</label>
                <input type="text" class="form-control" name="appliance_details"  value="{{ $ticket->appliance_details }}" />
            </div>
            <div class="form-group">
                <label for="appliance_address">Appliance address:</label>
                <input type="text" class="form-control" name="appliance_address"  value="{{ $ticket->appliance_address }}" />
            </div>
            <div class="form-group">
                <label for="residential_status">Residential status:</label>
                <select class="form-control" name="residential_status"/>
                  <option value="">Select Owner or Tenant</option>

                    @if($ticket->residential_status == "Owner") <option selected='selected' value='Owner'>Owner</option>
                    @else <option value='Owner'>Owner</option>
                    @endif

                    @if($ticket->residential_status == "Tenant") <option selected='selected' value='Tenant'>Tenant</option>
                    @else <option value='Tenant'>Tenant</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="landlord_details">Landlord details (if Tenant):</label>
                <input type="text" class="form-control" name="landlord_details"  value="{{ $ticket->landlord_details }}" />
            </div>
            <div class="form-group">
                <label for="status">Ticket Status:</label>
                <select class="form-control" name="status"/>
                @if($ticket->status == "Open") <option selected='selected' value='Open'>Open</option>
                @else <option value='Open'>Open</option>
                @endif

                @if($ticket->status == "In Progress") <option selected='selected' value='In Progress'>In Progress</option>
                @else <option value='In Progress'>In Progress</option>
                @endif

                @if($ticket->status == "Completed") <option selected='selected' value='Completed'>Completed</option>
                @else <option value='Completed'>Completed</option>
                @endif

                @if($ticket->status == "Cancelled") <option selected='selected' value='Cancelled'>Cancelled</option>
                @else <option value='Cancelled'>Cancelled</option>
                @endif

                @if($ticket->status == "Failed") <option selected='selected' value='Failed'>Failed</option>
                @else <option value='Failed'>Failed</option>
                @endif

                </select>
                <?php $right_now = Carbon\Carbon::now(); ?>
                <input type="hidden" name="date_updated"  value="{{ $right_now }}" />
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

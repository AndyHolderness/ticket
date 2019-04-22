@extends('home')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a ticket</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tickets.store') }}">
          @csrf
          <div class="form-group">
              <label for="fault">Fault description:</label>
              <input type="text" class="form-control" name="fault"/>
          </div>

          <div class="reporter_details">
              <label for="reporter_details">Reporter details:</label>
              <input type="text" class="form-control" name="reporter_details"/>
          </div>

          <div class="form-group">
              <label for="appliance_details">Appliance details:</label>
              <input type="text" class="form-control" name="appliance_details"/>
          </div>
          <div class="form-group">
              <label for="appliance_address">Appliance address:</label>
              <input type="text" class="form-control" name="appliance_address"/>
          </div>
          <div class="form-group">
              <label for="residential_status">Residential status:</label>
              <select class="form-control" name="residential_status"/>
              <option id=1 value="">Select Owner or Tenant</option>
              <option id=2 value="Owner">Owner</option>
              <option id=3 value="Tenant">Tenant</option>
              </select>
          </div>
          <div class="form-group">
              <label for="landlord_details">Landlord details (if Tenant):</label>
              <input type="text" class="form-control" name="landlord_details"/>
          </div>
          <div class="form-group">
              <label for="status">Ticket Status:</label>
              <input type="text" class="form-control" hidden name="status" value="open" />
          </div>
          <button type="submit" class="btn btn-primary-outline">Create Ticket</button>
      </form>
  </div>
</div>
</div>
@endsection

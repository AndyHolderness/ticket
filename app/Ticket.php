<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

  protected $table = 'tickets';

  //Protect against mass assignment vulnerabilities
  protected $fillable = [
     'fault',
     'reporter_details',
     'appliance_details',
     'appliance_address',
     'residential_status',
     'landlord_details',
     'status'
  ];

  public $timestamps = false;


}

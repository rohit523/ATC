@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="tab-pane fade in active" id="A">
            <div class="form-style-2">
                <div class="form-style-2-heading">FLIGHT DETAILS</div>
                <form action="<?php echo action('ViewSlotsController@viewflight'); ?>" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Departure Airport</label>
                        <div class="col-10">
                          <input placeholder="Source" class="form-control" type="text" value="" id="example-text-input" name="src">
                        </div>
                      </div>
          
                      <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Arrival Airport</label>
                        <div class="col-10">
                          <input placeholder="Destination" class="form-control" type="text" value="" id="example-text-input" name="dest">
                        </div>
                      </div>
          
                      <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label">Departure Date</label>
                        <div class="col-10">
                          <input class="form-control" type="date" value="" id="example-date-input" name="date">
                        </div>
                      </div>
                    
                
                    <label><span> </span><input type="submit" value="GO" /></label>
                </form>
            </div>
        </div>
    </div>
@endsection
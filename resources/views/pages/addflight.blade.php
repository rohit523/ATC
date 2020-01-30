@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="form-style-2" style="margin-top:4%; margin-left:30%;">
    <div class="form-style-2-heading">FLIGHT INFORMATION</div>
    <form action="<?php echo action('ViewSlotsController@store'); ?>" method="post">
      @csrf
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Airport Name</label>
        <div class="col-10">
          <input name="airport" placeholder="Airport Name" class="form-control" type="text" value="" id="example-text-input">
        </div>
      </div>

      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Flight Number</label>
        <div class="col-10">
          <input name="flight" placeholder="Flight Number" class="form-control" type="text" value="" id="example-text-input">
        </div>
      </div>

      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Source</label>
        <div class="col-10">
          <input name="source" placeholder="Source" class="form-control" type="text" value="" id="example-text-input">
        </div>
      </div>

      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Destination</label>
        <div class="col-10">
          <input name="destination" placeholder="Destination" class="form-control" type="text" value="" id="example-text-input">
        </div>
      </div>

      <div class="form-group row">
        <label for="example-date-input" class="col-2 col-form-label">Date</label>
        <div class="col-10">
          <input name="date" class="form-control" type="date" value="" id="example-date-input">
        </div>
      </div>

      <label><span> </span><input type="submit" value="Add Flight" /></label>
    </form>
</div>
@endsection
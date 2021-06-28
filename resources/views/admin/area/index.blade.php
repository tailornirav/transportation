@extends('layouts.layout')
@section('content')
<div class="container-fluid p-0">
  <h1 class="h3 mb-3">Area</h1>
  <div class="row">
    <div class="col-xl-4">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Add Area</h5>
        </div>
        <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="areacitystate" class="form-control selectstate" required></select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputCity">City</label>
                <select id="areacity" class="form-control areacity" required></select>
              </div>
              <div class="form-group col-md-3">
                <label for="area">Area</label>
                <input type="text" class="form-control" id="area" placeholder="Area">
              </div>
            </div>
            <button id="savearea" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
    <div class="col-xl-8">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">List</h5>
        </div>
        <div class="card-body">
          <table id="areatable" class="table table-striped area" style="width:100%">
            <thead>
              <tr>
                <th>State</th>
                <th>City</th>
                <th>Area</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

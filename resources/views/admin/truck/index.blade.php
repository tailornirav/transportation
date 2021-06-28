@extends('layouts.layout')
@section('content')
<div class="container-fluid p-0">
  <h1 class="h3 mb-3">All Trucks</h1>
  <div class="row">
    <input id="truckid" type="hidden" value="">
    <div class="col-xl-12">
      <div class="card" id="truckcollapse">
        <div class="card-header">
          <h5 class="card-title mb-0">Add/Edit Truck</h5>
        </div>
        <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="trucktype">Truck Type</label>
                <input type="text" class="form-control" id="trucktype" placeholder="Type">
              </div>
              <div class="form-group col-md-2">
                <label for="truckstyle">Truck Style</label>
                <input type="text" class="form-control" id="truckstyle" placeholder="Style">
              </div>
              <div class="form-group col-md-2">
                <label for="truckcategory">Truck Category</label>
                <input type="text" class="form-control" id="truckcategory" placeholder="Category">
              </div>
              <div class="form-group col-md-2">
                <label for="trucksize">Truck Size</label>
                <input type="text" class="form-control" id="trucksize" placeholder="Feet">
              </div>
              <div class="form-group col-md-2">
                <label for="truckcapacity">Truck Capacity</label>
                <input type="text" class="form-control" id="truckcapacity" placeholder="Ton">
              </div>
              <div class="form-group col-md-1">
                <label for="truckcapacity">Fuel</label>
                <input type="text" class="form-control" id="truckaverage" placeholder="Average">
              </div>
            </div>
            <button id="savetruck" class="btn btn-primary">Submit</button>
            <div class="modal fade" id="truckmodal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Please make following changes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body m-3">
                    <div id="truckmodalcontent" class="mb-0">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Trucks</h5>
        </div>
        <div class="card-body">
          <table id="datatablestrucks" class="table table-striped truck" style="width:100%">
            <thead>
              <tr>
                <th>Type</th>
                <th>Style</th>
                <th>Category</th>
                <th>Size (Feet)</th>
                <th>Capacity (Ton)</th>
                <th>Fuel Consumption (Average)</th>
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

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          <!-- part 1 -->
            <div class="card table-responsive">
                <div class="card-header bg-success text-white">{{ __('Institutions for Non-formal Education Part 1') }}</div>

                <div class="card-body table-responsive-sm">
                  <table class="table  table-hover table-sm table-striped">
                      <thead>
                      <tr>
                          <th>INSTITUTIONAL ID</th>
                          <th>LOCAL GOVT. AREA</th>
                          <th>NAME OF INSTITUTION</th>
                          <th>NAME OF RESPONDENT</th>
                          <th>POSITION OF RESPONDENT</th>
                          <th>PHONE NUMBER</th>
                          <th>ADDRESS</th>
                          <th>OWNERSHIP STATUS</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($institutions as $institution)
                      <tr>
                          <td>{{$institution->institutional_id}}</td>
                          <td>{{$institution->local_govt_area}}</td>
                          <td>{{$institution->name_of_institution}}</td>
                          <td>{{$institution->name_of_respondent}}</td>
                          <td>{{$institution->position_of_respondent}}</td>
                          <td>{{$institution->phone_number}}</td>
                          <td>{{$institution->address}}</td>
                          <td>{{$institution->ownership_status}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>




            </div>
<br><br>
            <!-- part 2 -->
            <div class="card table-responsive">
                <div class="card-header bg-success text-white">{{ __('Institutions for Non-formal Education Part 2') }}</div>

                <div class="card-body table-responsive-sm">
                  <table class="table  table-hover table-sm table-striped">
                      <thead>
                      <tr>
                          <th>INSTITUTIONAL ID</th>
                          <th>NAME OF INSTITUTION</th>
                          <th>TRAINING PROGRAMME</th>
                          <th>CERT AWARD</th>
                          <th>TYPE CERT AWARD</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($institutions as $institution)
                      <tr>
                          <td>{{$institution->institutional_id}}</td>
                          <td>{{$institution->name_of_institution}}</td>
                          <td>{{$institution->training_prog}}</td>
                          <td>{{$institution->cert_award_1}}</td>
                          <td>{{$institution->type_cert_award_1}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>
                <br><br>

                <!-- part 3 -->
                <div class="card table-responsive">
                    <div class="card-header bg-success text-white">{{ __('Institutions for Non-formal Education Part 3') }}</div>

                    <div class="card-body table-responsive-sm">
                      <table class="table  table-hover table-sm table-striped">
                          <thead>
                          <tr>
                              <th>INSTITUTIONAL ID</th>
                              <th>NAME OF INSTITUTION</th>
                              <th>GEOPOINT LATITUDE</th>
                              <th>GEOPOINT LONGITUDE</th>
                              <th>GEOPOINT ALTITUDE</th>
                              <th>GEOPOINT ACCURACY</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach($institutions as $institution)
                          <tr>
                              <td>{{$institution->institutional_id}}</td>
                              <td>{{$institution->name_of_institution}}</td>
                              <td>{{$institution->geopointlatitude}}</td>
                              <td>{{$institution->geopointlongitude}}</td>
                              <td>{{$institution->geopointaltitude}}</td>
                              <td>{{$institution->geopointaccuracy}}</td>
                          </tr>
                          @endforeach
                          </tbody>
                      </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

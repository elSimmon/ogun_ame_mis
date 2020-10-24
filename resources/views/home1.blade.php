@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          <!-- part 1-2 -->
            <div class="card table-responsive">
                <div class="card-header bg-success text-white">{{ __('Dashboard: Institutions for Non-formal Education Part 1-2') }}</div>

                <div class="card-body table-responsive-sm">
                  <table class="table  table-hover table-sm table-striped">
                      <thead>
                      <tr>
                          <th>INSTITUTIONAL ID</th>
                          <th>LOCAL GOVT. AREA</th>
                          <th>NAME OF INSTITUTION</th>
                          <th>NAME OF RESPONDENT</th>
                          <th>POSITION OF RESPONDENT</th>
                          <th>POSITION HELD MONTH</th>
                          <th>POSITION HELD YEAR</th>
                          <th>Q1 TYPE OF ESTABLISHMENT</th>
                          <th>Q2 OWNERSHIP ESTABLISHMENT</th>
                          <th>Q3 TRAINING PROGRAMME</th>
                          <!-- <th>TARGET GROUP SELECTED 1</th>
                          <th>ENROLL MALE 1</th>
                          <th>ENROLL FEMALE 1</th>
                          <th>COMPLETE MALE 1</th>
                          <th>COMPLETE FEMALE 1</th>
                          <th>COST FULL 1</th>
                          <th>COST PART 1</th>
                          <th>CERT AWARD 1</th>
                          <th>TYPE CERT AWARD 1</th>
                          <th>Q5 BEGIN OPERATE</th>
                          <th>Q6 OWN OPERATION</th>
                          <th>Q10 NUM STUDENT</th>
                          <th>NOS EQUIPMENT 1</th>
                          <th>NAME EQUIPMENT 1</th>
                          <th>NUMBER UNITS 1</th>
                          <th>YEAR ACQUISITION 1</th>
                          <th>OPERATIONAL STATUS 1</th>
                          <th>WORK ELECTRIC 1</th>
                          <th>ELECTRIC SOURCE 1</th>
                          <th>OTHER ELECTRIC SOURCE 1</th>
                          <th>Q26 GRADUATES JOB</th>
                          <th>OTHER GRADUATES JOB</th>
                          <th>Q27 MONTHLY INCOME</th>
                          <th>GEOPOINT LATITUDE</th>
                          <th>GEOPOINT LONGITUDE</th>
                          <th>GEOPOINT ALTITUDE</th>
                          <th>GEOPOINT ACCURACY</th> -->
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
                          <td>{{$institution->position_held_mnth}}</td>
                          <td>{{$institution->position_held_year}}</td>
                          <td>{{$institution->q1_type_of_establishment}}</td>
                          <td>{{$institution->q2_ownership_establishment}}</td>
                          <td>{{$institution->q3_training_prog}}</td>
                          <!-- <td>{{$institution->target_grp_selected_1}}</td>
                          <td>{{$institution->enroll_male_1}}</td>
                          <td>{{$institution->enroll_female_1}}</td>
                          <td>{{$institution->complete_male_1}}</td>
                          <td>{{$institution->complete_female_1}}</td>
                          <td>{{$institution->cost_full_1}}</td>
                          <td>{{$institution->cost_part_1}}</td>
                          <td>{{$institution->cert_award_1}}</td>
                          <td>{{$institution->type_cert_award_1}}</td>
                          <td>{{$institution->q5_begin_operate}}</td>
                          <td>{{$institution->q6_own_operation}}</td>
                          <td>{{$institution->q10_num_student}}</td>
                          <td>{{$institution->nos_equipment}}</td>
                          <td>{{$institution->number_units_1}}</td>
                          <td>{{$institution->year_acquisition_1}}</td>
                          <td>{{$institution->operational_status_1}}</td>
                          <td>{{$institution->work_electric_1}}</td>
                          <td>{{$institution->electric_source_1}}</td>
                          <td>{{$institution->other_electric_source_1}}</td>
                          <td>{{$institution->q26_graduates_job}}</td>
                          <td>{{$institution->other_graduates_job}}</td>
                          <td>{{$institution->q27_monthly_income}}</td>
                          <td>{{$institution->geopointlatitude}}</td>
                          <td>{{$institution->geopointlongitude}}</td>
                          <td>{{$institution->geopointaltitude}}</td>
                          <td>{{$institution->geopointaccuracy}}</td> -->
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>


                <div class="card-body table-responsive-sm">
                  <table class="table  table-hover table-sm table-striped">
                      <thead>
                      <tr>
                          <th>INSTITUTIONAL ID</th>
                          <th>NAME OF INSTITUTION</th>
                          <th>TARGET GROUP SELECTED 1</th>
                          <th>ENROLL MALE 1</th>
                          <th>ENROLL FEMALE 1</th>
                          <th>COMPLETE MALE 1</th>
                          <th>COMPLETE FEMALE 1</th>
                          <th>COST FULL 1</th>
                          <th>COST PART 1</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($institutions as $institution)
                      <tr>
                          <td>{{$institution->institutional_id}}</td>
                          <td>{{$institution->name_of_institution}}</td>
                          <td>{{$institution->target_grp_selected_1}}</td>
                          <td>{{$institution->enroll_male_1}}</td>
                          <td>{{$institution->enroll_female_1}}</td>
                          <td>{{$institution->complete_male_1}}</td>
                          <td>{{$institution->complete_female_1}}</td>
                          <td>{{$institution->cost_full_1}}</td>
                          <td>{{$institution->cost_part_1}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>

            </div>
<br><br>
            <!-- part 2-3 -->
            <div class="card table-responsive">
                <div class="card-header bg-success text-white">{{ __('Dashboard: Institutions for Non-formal Education Part 3-5') }}</div>

                <div class="card-body table-responsive-sm">
                  <table class="table  table-hover table-sm table-striped">
                      <thead>
                      <tr>
                          <th>INSTITUTIONAL ID</th>
                          <th>NAME OF INSTITUTION</th>
                          <th>CERT AWARD 1</th>
                          <th>TYPE CERT AWARD 1</th>
                          <th>Q5 BEGIN OPERATE</th>
                          <th>Q6 OWN OPERATION</th>
                          <th>Q10 NUM STUDENT</th>
                          <th>NOS EQUIPMENT 1</th>
                          <th>NAME EQUIPMENT 1</th>
                      </tr>
                      </thead>
                      <tbody>

                      @foreach($institutions as $institution)
                      <tr>
                          <td>{{$institution->institutional_id}}</td>
                          <td>{{$institution->name_of_institution}}</td>
                          <td>{{$institution->cert_award_1}}</td>
                          <td>{{$institution->type_cert_award_1}}</td>
                          <td>{{$institution->q5_begin_operate}}</td>
                          <td>{{$institution->q6_own_operation}}</td>
                          <td>{{$institution->q10_num_student}}</td>
                          <td>{{$institution->nos_equipment}}</td>
                          <td>{{$institution->name_equipment_1}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>


                <div class="card-body table-responsive-sm">
                  <table class="table  table-hover table-sm table-striped">
                      <thead>
                      <tr>
                          <th>INSTITUTIONAL ID</th>
                          <th>NAME OF INSTITUTION</th>
                          <th>NUMBER UNITS 1</th>
                          <th>YEAR ACQUISITION 1</th>
                          <th>OPERATIONAL STATUS 1</th>
                          <th>WORK ELECTRIC 1</th>
                          <th>ELECTRIC SOURCE 1</th>
                          <th>OTHER ELECTRIC SOURCE 1</th>
                          <th>Q26 GRADUATES JOB</th>
                          <th>OTHER GRADUATES JOB</th>
                          <th>Q27 MONTHLY INCOME</th>
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
                          <td>{{$institution->number_units_1}}</td>
                          <td>{{$institution->year_acquisition_1}}</td>
                          <td>{{$institution->operational_status_1}}</td>
                          <td>{{$institution->work_electric_1}}</td>
                          <td>{{$institution->electric_source_1}}</td>
                          <td>{{$institution->other_electric_source_1}}</td>
                          <td>{{$institution->q26_graduates_job}}</td>
                          <td>{{$institution->other_graduates_job}}</td>
                          <td>{{$institution->q27_monthly_income}}</td>
                          <td>{{$institution->geopointlatitude}}</td>
                          <td>{{$institution->geopointlongitude}}</td>
                          <td>{{$institution->geopointaltitude}}</td>
                          <td>{{$institution->geopointaccuracy}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>


                <div class="card-body table-responsive-sm">
                  <table class="table  table-hover table-sm table-striped">
                      <thead>
                      <tr>
                          <th>INSTITUTIONAL ID</th>
                          <th>NAME OF INSTITUTION</th>
                          <th>Q26 GRADUATES JOB</th>
                          <th>OTHER GRADUATES JOB</th>
                          <th>Q27 MONTHLY INCOME</th>
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
                          <td>{{$institution->q26_graduates_job}}</td>
                          <td>{{$institution->other_graduates_job}}</td>
                          <td>{{$institution->q27_monthly_income}}</td>
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

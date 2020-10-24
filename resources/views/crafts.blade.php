@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          <!-- part 1-2 -->
            <div class="card table-responsive">
                <div class="card-header bg-success text-white">{{ __('Master Crafts Persons') }}</div>

                <div class="card-body table-responsive-sm">
                  <table class="table  table-hover table-sm table-striped">
                      <thead>
                      <tr>
                          <th>ID</th>
                          <th>NAME OF BUSINESS</th>
                          <th>LGA</th>
                          <th>COMMUNITY</th>
                          <th>GPS LATITUDE</th>
                          <th>GPS LONGITUDE</th>
                          <th>MASTERCRAFT</th>
                          <th>PHONE NUMBER</th>
                          <th>OCCUPATION</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($crafts as $craft)
                      <tr>
                          <td>{{$craft->id}}</td>
                          <td>{{$craft->q9a_name_biz}}</td>
                          <td>{{$craft->q12_lga}}</td>
                          <td>{{$craft->q12_community}}</td>
                          <td>{{$craft->q7_gpslatitude}}</td>
                          <td>{{$craft->q7_gpslongitude}}</td>
                          <td>{{$craft->q12_mastercraft}}</td>
                          <td>{{$craft->q11_tele_num}}</td>
                          <td>{{$craft->q17_occupation}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>


                <div class="card-body table-responsive-sm">
                  <table class="table  table-hover table-sm table-striped">
                      <thead>
                      <tr>
                          <th>ID</th>
                          <th>NAME OF BUSINESS</th>
                          <th>WORK STAT</th>
                          <th>ADDRESS</th>
                          <th>GENDER</th>
                          <th>EDUCATION</th>
                          <th>CONCLUDE AGREE</th>
                          <th>COOPERATE WAYS</th>
                          <th>NO. PEOPLE WORK</th>
                          <th>NO. APPRENTICE</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($crafts as $craft)
                      <tr>
                          <td>{{$craft->id}}</td>
                          <td>{{$craft->q9a_name_biz}}</td>
                          <td>{{$craft->q13_wrk_stat}}</td>
                          <td>{{$craft->q10_address}}</td>
                          <td>{{$craft->q14_gender}}</td>
                          <td>{{$craft->q16_education}}</td>
                          <td>{{$craft->q18_conclude_agree}}</td>
                          <td>{{$craft->q24_coopeerate_ways}}</td>
                          <td>{{$craft->q25_no_people_wrk}}</td>
                          <td>{{$craft->no_appre}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>

            </div>
<br><br>
            <!-- part 2-3 -->
            <div class="card table-responsive">
                <div class="card-header bg-success text-white">{{ __('Master Crafts Persons Continued...') }}</div>

                <div class="card-body table-responsive-sm">
                  <table class="table  table-hover table-sm table-striped">
                      <thead>
                      <tr>
                          <th>ID</th>
                          <th>NAME OF BUSINESS</th>
                          <th>NO. SKILLED WORKERS</th>
                          <th>COUNT QUESTIIONS</th>
                          <th>FURTHER TRAINING</th>
                          <th>ELECTRICITY</th>
                          <th>TUTULAGE</th>
                          <th>STRUCTURED CONTENT</th>
                          <th>BEST AGE APPRENTICE</th>
                      </tr>
                      </thead>
                      <tbody>

                      @foreach($crafts as $craft)
                      <tr>
                          <td>{{$craft->id}}</td>
                          <td>{{$craft->q9a_name_biz}}</td>
                          <td>{{$craft->no_skll_wrkrs}}</td>
                          <td>{{$craft->count_question}}</td>
                          <td>{{$craft->q68_further_train}}</td>
                          <td>{{$craft->q74_electricity}}</td>
                          <td>{{$craft->q82_tutulage}}</td>
                          <td>{{$craft->q91_strctrd_content}}</td>
                          <td>{{$craft->q98_best_age_app}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>

                <div class="card-body table-responsive-sm">
                  <table class="table  table-hover table-sm table-striped">
                      <thead>
                      <tr>
                          <th>ID</th>
                          <th>NAME OF BUSINESS</th>
                          <th>MINIMUM EDUCATION</th>
                          <th>ASSESMENT CERT</th>
                          <th>HELP DEV</th>
                      </tr>
                      </thead>
                      <tbody>

                      @foreach($crafts as $craft)
                      <tr>
                          <td>{{$craft->id}}</td>
                          <td>{{$craft->q9a_name_biz}}</td>
                          <td>{{$craft->q100_min_education}}</td>
                          <td>{{$craft->q128_assessement_cert}}</td>
                          <td>{{$craft->q136_help_dev}}</td>
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

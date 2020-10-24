@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
          <div class="card bg-success text-white text-center">
            <!-- <div class="card-header">
              <h2 class="card-title">Dashboard</h2>
            </div> -->
            <div class="card-body">
              <h1 style="">Welcome to Dashboard</h1>
            </div>
          </div>
        </div>
    </div>
<br><br>
    <div class="row ">
        <div class="col-md-6">
          <div class="card bg-success text-white">
            <div class="card-header">
              <h2 class="card-title">Non formal Education</h2>
            </div>
            <div class="card-body">
              <h1>{{$institutions->count()}} Records</h1>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card bg-success text-white">
            <div class="card-header">
              <h2 class="card-title">Master Crafts Persons</h2>
            </div>
            <div class="card-body">
              <h1>{{$crafts->count()}} Records</h1>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection

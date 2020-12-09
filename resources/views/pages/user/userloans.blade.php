@extends('layouts/contentLayoutMaster')

@section('title', 'My Loans')

@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset('vendors/css/charts/apexcharts.css') }}">
@endsection
@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" href="{{ asset('css/pages/dashboard-analytics.css') }}">
<link rel="stylesheet" href="{{ asset('css/pages/card-analytics.css') }}">
@endsection

@section('content')
{{-- Dashboard Analytics Start --}}
<section id="dashboard-analytics">

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card bg-dark text-white">
        <div class="card-content">
          <div class="card-body text-center">
            <div class="avatar avatar-xl bg-success shadow mt-0">
              <div class="avatar-content">
                <i class="feather icon-award white font-large-1"></i>
              </div>
            </div>
            <div class="text-center">
              <h1 class="mb-2 text-white">Available Limit</h1>
              <h1 class="mb-2 text-white">NGN {{$ceiling->approved_ceiling}}</h1>
              <div class="">
              @if($countLoan < 1)
                <a class="btn btn-primary mb-2" href="{{route('loan.step1')}}">Apply Now!!</a>
              </div>
              @else
              <a class="btn btn-primary mb-2" href="{{route('loan.step1')}}">Continue Application!!</a>
              <h6 class="mb-2 text-white">FILE NUMBER: {{Auth::user()->file_no}}</h6>
           @endif
              
              @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
             
            </div>
          </div>
        </div>
      </div>
    </div>
    
   
  </div>
 

        




</section>
<!-- Dashboard Analytics end -->
@endsection

@section('vendor-script')
<!-- vendor files -->
<script src="{{ asset('vendors/js/charts/apexcharts.min.js') }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset('js/scripts/pages/dashboard-analytics.js') }}"></script>
@endsection
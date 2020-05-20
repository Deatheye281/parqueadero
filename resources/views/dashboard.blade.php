@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row text-center">   
        <h1>BIENVENIDO</h1>
        <p></p>
        <br>
        <img allign="center" src="{{ asset('material') }}/img/parqueadero.jpg">
        <p></p>
        <br>
      </div>      
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
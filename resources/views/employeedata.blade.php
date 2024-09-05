@extends('layouts.main')

@section('container')


    {{-- <h1 class="display-1">{{ $title }}</h1> --}}
    <h1></h1>
    <h1></h1>


    <ul class="nav nav-tabs" id="divisionTabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="it-tab" data-toggle="tab" href="#it" role="tab" aria-controls="it" aria-selected="true">IT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="hr-tab" data-toggle="tab" href="#hr" role="tab" aria-controls="hr" aria-selected="false">HR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="finance-tab" data-toggle="tab" href="#finance" role="tab" aria-controls="finance" aria-selected="false">Finance</a>
        </li>
      </ul>
      
      <div class="tab-content" id="divisionTabsContent">
        <div class="tab-pane fade show active" id="it" role="tabpanel" aria-labelledby="it-tab">
          <!-- IT Employees Table -->
          @include('partials.employee_table', ['employees' => $itEmployees])
        </div>
        <div class="tab-pane fade" id="hr" role="tabpanel" aria-labelledby="hr-tab">
          <!-- HR Employees Table -->
          @include('partials.employee_table', ['employees' => $hrEmployees])
        </div>
        <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab">
          <!-- Finance Employees Table -->
          @include('partials.employee_table', ['employees' => $financeEmployees])
        </div>
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      
    
@endsection
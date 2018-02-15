@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">My Account</div>
        <div class="panel-body">

          <div class="table-responsive">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <th class="col-md-2"> ID </th><td class="col-md-10"> {{ $user->id }} </td>
                </tr>
                <tr>
                  <th class="col-md-2"> Name </th><td class="col-md-10"> {{ $user->name }} </td>
                </tr>
                <tr>
                  <th class="col-md-2"> Email </th><td class="col-md-10"> {{ $user->email }} </td>
                </tr>
                @if (!empty(Auth::user()->student))
                  <tr>
                    <th class="col-md-2"> Enrollment </th><td class="col-md-10"> {{ $user->student->enrollment }} </td>
                  </tr>
                  <tr>
                    <th class="col-md-2"> Course </th><td class="col-md-10"> {{ $user->student->course->name }} </td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection

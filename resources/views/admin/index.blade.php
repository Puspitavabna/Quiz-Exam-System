@extends('layouts.admin_master')
@section('content')
  <div class="row">
    <div class="col-md-3 col-sm-3 col-xs-6">
      <a data-toggle="tooltip" title="6 new members." class="well top-block" href="{{ route('admin_tutorial.index') }}">
        <i class="glyphicon glyphicon-star"></i>
        <div>Tutorials Lists</div>
      </a>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
      <a data-toggle="tooltip" title="6 new members." class="well top-block" href="{{ route('admin_quiz_topic.index') }}">
        <i class="glyphicon glyphicon-star"></i>
        <div>Topics Lists</div>
      </a>
    </div>
  </div>
  <a href="{{ route('admin.logout') }}"
     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
    Logout
  </a>

  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
  </form>


@endsection
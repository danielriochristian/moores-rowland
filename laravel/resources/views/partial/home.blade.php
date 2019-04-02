@extends('admin.superadmin')
@section('banner')
<div class="top-content-container">
  <div class="container">
<div class="row">
  <div class="col-sm-12 text wow fadeInLeft">
      @foreach ($articles as $a)
    <h1 style="color:rgb(250, 148, 74);white;font-size:24pt;font-style:'lyon_display';text-align: center;">{{$a->title}}</h1>
    <div class="description">
      <p class="small-paragraph" style="color:white;font-size:10pt;text-align: center;">
      {{$a->article}}
      </p>
      @endforeach
    </div>
  </div>
</div>
    </div>
  </div>
@endsection
@section('labelhome')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="breadcomb-wp">
      <div class="breadcomb-icon">
          <h2>Home</h2>
      </div>
    </div>
  </div>
</div>
@endsection
@section('home')
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="data-table-list">
        @foreach ($home as $h)
      <h3> {{$h -> title}} </h3>
      <p>  {{$h -> article}} </p>
      @endforeach
    </div>
  </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


@endsection

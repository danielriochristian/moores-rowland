@extends('admin.admin')
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
@section('labelresource')

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="breadcomb-wp">
      <div class="breadcomb-icon">
          <h2>Resource</h2>
      </div>
    </div>
  </div>
</div>
@endsection
@section('resource')
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="data-table-list">
      @foreach($resources as $r)
      <div class="col-sm-12" style="margin-bottom:5%;">
  <div class="content-box">
    <h4 class="content-box-header">
        <b>{{ $r -> title }}</b> </a>
    </h4>
    <div class="content-box-wrapper">
      {{ $r -> content }}<BR>
      <br>
      <div class='font-gray'>Diposting oleh : {{$r -> uploaded_by}}</div><BR>
    </div>
  </div>
</div>
@endforeach
  </div> <!-- end container -->
</div>
</div>

<style media="screen">
  .panel-heading .accordion-toggle:after {
    /* symbol for "opening" panels */
    font-family: 'Glyphicons Halflings';
    /* essential for enabling glyphicon */
    content: "\e114";
    /* adjust as needed, taken from bootstrap.css */
    float: right;
    /* adjust as needed */
    color: grey;
    /* adjust as needed */

  }

  .panel-heading .accordion-toggle.collapsed:after {
    /* symbol for "collapsed" panels */
    content: "\e080";
    /* adjust as needed, taken from bootstrap.css */
  }
  .content-box{
    border: 2px solid #f3f3f3;
  }
  .content-box-wrapper{
    margin: 30px;
  }
  .content-box-header{
    background-color: #f3f3f3;
    padding: 1%;
    border: 1px solid #f3f3f3;
  }
</style>
@endsection

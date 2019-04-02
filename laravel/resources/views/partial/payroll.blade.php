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
@section('labelpay')

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="breadcomb-wp">
      <div class="breadcomb-icon">
          <h2>Payroll</h2>
      </div>
    </div>
  </div>
</div>
@endsection
@section('payroll')
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="data-table-list">
      <div class="accordion-stn mg-t-30">
          <div class="panel-group" data-collapse-color="nk-purple" id="accordionPurple" role="tablist" aria-multiselectable="true">
              <div class="panel panel-collapse notika-accrodion-cus">
                  <div class="panel-heading" role="tab">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordionPurple" href="#accordionPurple-one" aria-expanded="true">
                Working Group Members
              </a>
            </h4>
          </div>
        <div id="accordionPurple-one" class="collapse in" role="tabpanel">
            <div class="panel-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Firm</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php  $no=1; ?>
                    @foreach ($taxs as $t)
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{$t->name}}</td>
                    <td>{{$t->firm}}</td>
                    <td>{{$t->email}}</td>
                  </tr>
                  @endforeach
                </tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-collapse notika-accrodion-cus">
            <div class="panel-heading" role="tab">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionPurple" href="#accordionPurple-two" aria-expanded="false">
                Shared Documents
              </a>
            </h4>
          </div>
          <div id="accordionPurple-two" class="collapse" role="tabpanel">
            <div class="panel-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name File</th>
                    <th scope="col">Uploaded by</th>
                    <th scope="col">Download</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php  $no=1; ?>
                    @foreach ($docs as $d)
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{$d->title}}</td>
                    <td>{{$d->uploaded_by}}</td>
                    <td> <a href="/getdownload">download </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <?php
          $cekdivisi = Auth::User()->division;
          if($cekdivisi=='Payroll'){
            ?>
    <div class="panel panel-collapse notika-accrodion-cus">
      <div class="panel-heading" role="tab">
          <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionPurple" href="#accordionPurple-three" aria-expanded="false">
          Upload File
        </a>
      </h4>
    </div>
      <div id="accordionPurple-three" class="collapse" role="tabpanel">
      <div class="panel-body">
        <form action="/memberarea/uploadpayroll" enctype="multipart/form-data" method="post">
          {{ csrf_field() }}

          <div class="form-group">
            <p class="font-italic-sm">*only admin in Division Payroll can upload.</p>
            <label for="email">Name File:</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
          <div class="form-group">
            <label for="email">File:</label>
            <input type="file" class="form-control-file" id="tes" name="tes">

          </div>
          <div class="form-group">
           <button type="submit" class="btn btn-sm btn-primary" id="add">Submit</button>

            <button type="reset" class="btn btn-sm btn-danger">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php }
  else{

  };
  ?>
      </div>
    </div>


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
</style>
@endsection

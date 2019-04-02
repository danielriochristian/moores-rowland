@extends(admin.admin)
@section(labelaccount)
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="breadcomb-wp">
      <div class="breadcomb-icon">
        <i class="notika-icon notika-windows"></i>
      </div>
      <div class="breadcomb-ctn">
        <h2>My Account</h2>
        <p>Welcome to MRAP <span class="bread-ntd">Admin</span></p>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
    <div class="breadcomb-report">
      <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
    </div>
  </div>
</div>
@endsection
@section(account)
<?php
$cekid = Auth::User()->name;
$cekemail = Auth::User()->email;
?>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="data-table-list">
      <div class="form-group">
        <label for="email">Username</label>
        <input type="text" class="form-control" id="user" name="user">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email">
      </div>

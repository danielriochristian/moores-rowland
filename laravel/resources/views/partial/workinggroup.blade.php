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
@section('labelworking')

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="breadcomb-wp">
      <div class="breadcomb-icon">
          <h2>Working Group</h2>
      </div>
    </div>
  </div>
</div>
@endsection
@section ('working')
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="data-table-list">
      <div class="row">
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="/memberarea/workinggroup/tax">
              <img src="https://dr5dymrsxhdzh.cloudfront.net/blog/images/a18541/2018/03/tax-refund-form-closeup-picture-id607483756.jpg" style="width:400px;height:150px;">
              <div class="caption">
                <p>Tax</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="/memberarea/workinggroup/payroll">
              <img src="https://jagad.id/wp-content/uploads/2018/04/Pengertian-Pajak-Materi-Pajak-Jenis-Pajak-dan-Manfaat-Pajak.jpg" style="width:400px;height:150px;">
              <div class="caption">
                <p>Payroll, Accounting & Outsourcing</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="/memberarea/workinggroup/finance">
              <img src="https://cdn1-production-images-kly.akamaized.net/G_1-K8st9PFBVZ2GeL8aM7mTl14=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2400754/original/088923100_1541419815-Bendera_AS.jpg"
                style="width:400px;height:150px;">
              <div class="caption">
                <p>Corporate Finance</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="/memberarea/workinggroup/audit">
              <img src="https://img.etimg.com/thumb/height-480,width-640,msid-63294307,imgsize-58193/tax3-etonline.jpg" style="width:400px;height:150px;">
              <div class="caption">
                <p>Audit</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

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
@section('labelsite')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="breadcomb-wp">
      <div class="breadcomb-icon">
          <h2>Site Setting</h2>
      </div>
    </div>
  </div>
</div>
@endsection
@section('site')
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="data-table-list">
      <div class="table-responsive">
      <table id="contoh" class="table table-bordered table-hover datatable">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Title</th>
                <th>Content</th>
                <th>Change by</th>
                <th>Updated at</th>
                <th colspan="10%">Action</th>
            </tr>
        </thead>
      </table>
    </div>
    <div id="myModal"class="modal fade" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" role="modal">

      <div class="form-group">
      <label class="control-label col-sm-2"for="id">ID</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="fid" disabled>
      </div>
      </div>

      <div class="form-group">
      <label class="control-label col-sm-2"for="title">Title</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="t">
      </div>
      </div>
      <?php
      $cekadmin = Auth::User()->name;
      ?>
      <div class="form-group">
      <label class="control-label col-sm-2"for="email">Content</label>
      <div class="col-sm-10">
      <textarea class="form-control auto-size" id="a" rows="5"></textarea>
      <input type="hidden" class="form-control" id="ad" name="ad" value="<?php echo ($cekadmin); ?>">
      </div>
      </div>

      </form>
      {{-- Form Delete Post --}}
      <div class="deleteContent">
      Are You sure want to delete <span class="title"></span>?
      <span class="hidden id"></span>
      </div>

      </div>
      <div class="modal-footer">

      <button type="button" class="btn actionBtn btn-sm" data-dismiss="modal">
      <span id="footer_action_button" class="glyphicon"></span>
      </button>

      <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">
      <span class="glyphicon glyphicon"></span>close
      </button>

      </div>
      </div>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
{{-- ajax Form Add Post--}}

$(document).ready(function() {

  // DataTable
  $('.datatable').DataTable({
          "language": {
          "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Indonesian-Alternative.json"
      },
      processing: true,
      serverSide: true,
      ajax: '{{ route('site/json') }}',
      columns: [
          {data: 'id', name: 'id'},
          {data: 'keterangan', name: 'ketengaran'},
          {data: 'title', name: 'title'},
          {data: 'article', name: 'article'},
          {data: 'change_by', name: 'change_by'},
          {data: 'created_at', name: 'created_at'},
          {data: 'action', name: 'action', orderable: false, searchable: false},
      ]
  });
  });
  $(document).on('click', '.edit-modal', function() {
  $('#footer_action_button').text("Update");
  $('#footer_action_button').addClass('glyphicon-check');
  $('#footer_action_button').removeClass('glyphicon-trash');
  $('.actionBtn').addClass('btn-success');
  $('.actionBtn').removeClass('btn-danger');
  $('.actionBtn').addClass('edit');
  $('.modal-title').text('Site Settings');
  $('.deleteContent').hide();
  $('.form-horizontal').show();
  $('#fid').val($(this).data('id'));
  $('#t').val($(this).data('title'));
  $('#a').val($(this).data('article'));
  $('#myModal').modal('show');
  });
// nama field
  $('.modal-footer').on('click', '.edit', function() {
    $.ajax({
      type: 'POST',
      url: 'editsetting',
      data: {
  "_token": "{{ csrf_token() }}",
  'id': $("#fid").val(),
  'title': $('#t').val(),
  'article': $('#a').val(),
  'change_by': $('#ad').val()
  // 'password': $('#ps').val()
},
success: function (data, status) {
    $('.datatable').DataTable().ajax.reload(null, false);
},
error: function (request, status, error) {
    console.log(request.responseJSON);
    $.each(request.responseJSON.errors, function( index, value ) {
      alert( value );
    });
}
});
});
</script>
@endsection

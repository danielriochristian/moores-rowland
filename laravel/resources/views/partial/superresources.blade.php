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
@section('labelresources')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="breadcomb-wp">
      <div class="breadcomb-icon">
          <h2>Resources</h2>
      </div>
    </div>
  </div>
</div>
@endsection
@section('resources')
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="data-table-list">
          <!-- <div class="basic-tb-hd">
              <p>Form control which supports multiple lines of text. Change 'rows' attribute as necessary.</p>
          </div> -->
          <!-- <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="floating-numner form-rlt-mg">
                      <p>Basic Example</p>
                  </div>
              </div>
          </div> -->
          <!-- <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <div class="nk-int-st">
                          <textarea class="form-control" rows="5" placeholder="Moores Rowland Asian Pasific"></textarea>
                      </div>
                  </div>
              </div>
          </div> -->
          <form action="/memberarea/uploadresources" enctype="multipart/form-data" method="post">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="floating-numner">
                      <p>Title</p>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <div class="nk-int-st">
                          <textarea class="form-control auto-size" name="title" id="title" rows="2" placeholder="Moores Rowland Asian Pasific"></textarea>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="floating-numner">
                      <p>Content</p>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <div class="nk-int-st">
                          <textarea class="form-control auto-size" name="content" id="content" rows="2" placeholder="With economies rather stagnating in much of the western world outside the US, a new dawn has broken in Asia raising fresh hopes that having learned the bitter lessons of fiscal prudence the region is finally ready to fulfill its promise to make this century ‘the Asian century’."></textarea>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="floating-numner">
                      <p>File</p>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <div class="nk-int-st">
                          {{ csrf_field() }}
                          <div class="form-group">
                          <input type="file" class="form-control-file" id="tes" name="tes">
                          </div>
                          <div class="form-group">
                          <button type="submit" class="btn btn-sm btn-primary" id="add">Submit</button>
                          <button type="reset" class="btn btn-sm btn-danger">Cancel</button>
                          </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  $cekname = Auth::User()->name;
                  // var_dump($cekname);die;
                  ?>
                  <input type="hidden" class="form-control" id="admin" name="admin" value="<?php echo ($cekname); ?>">
          </div>
        </form>
          <p>List Reources</p>
        <div class="table-responsive">
        <table id="contoh" class="table table-bordered table-hover datatable">
          <thead>
              <tr>
                  <th>id</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>uploaded by</th>
                  <th>Update at</th>
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
      ajax: '{{ route('resource/json') }}',
      columns: [
          {data: 'id', name: 'id'},
          {data: 'title', name: 'title'},
          {data: 'content', name: 'content'},
          {data: 'uploaded_by', name: 'uploaded_by' , orderable: false, searchable: false},
          {data: 'updated_at', name: 'updated_at'},
          {data: 'action', name: 'action', orderable: false, searchable: false},
      ]
  });
  });
  $(document).on('click', '.delete-modal', function() {
  $('#footer_action_button').text(" Delete");
  $('#footer_action_button').removeClass('glyphicon-check');
  $('#footer_action_button').addClass('glyphicon-trash');
  $('.actionBtn').removeClass('btn-success');
  $('.actionBtn').addClass('btn-danger');
  $('.actionBtn').addClass('delete');
  $('.modal-title').text('Delete Post');
  $('.id').text($(this).data('id'));
  $('.deleteContent').show();
  $('.form-horizontal').hide();
  $('.name').html($(this).data('name'));
  $('#myModal').modal('show');
  });

  $('.modal-footer').on('click', '.delete', function(){
    $.ajax({
      type: 'POST',
      url: 'deleteresource',
      data: {
        "_token": "{{ csrf_token() }}",
        'id': $('.id').text()
      },
      success: function (data, status) {
                $('.datatable').DataTable().ajax.reload(null, false);
            },
            error: function (request, status, error) {
                console.log($("#id").val());
                console.log(request.responseJSON);
                $.each(request.responseJSON.errors, function( index, value ) {
                  alert( value );
                });
            }
        });
    });

</script>
@endsection

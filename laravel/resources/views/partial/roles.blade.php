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
@section('labelroles')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="breadcomb-wp">
      <div class="breadcomb-icon">
          <h2>Manage Roles</h2>
      </div>
    </div>
  </div>
</div>
@endsection
@section('roles')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="data-table-list">
        <div class="table-responsive">
          <table id="contoh" class="table table-bordered table-hover datatable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Roles</th>
                    <th colspan="10%">Action</th>
                </tr>
            </thead>
          </table>
          </div>
            {{-- <table class="table" id="table">
            <thead>
            <tr>
            <th>Id</th>
            <th>Roles</th>
            <th>Action </th>
            </tr>
            </thead>
            {{ csrf_field() }}
            @foreach ($manage as $value)
            <tr class="manage{{$value->id}}">
            <td>{{ $value->id }}</td>
            <td>{{ $value->namaRule }}</td>
            <td>
              <button class="edit-modal btn btn-primary btn-md" data-id="{{$value->id}}" data-roles="{{$value->namaRule}}">
            Edit </button>
            </td>
            @endforeach
            </table> --}}
          {{--
            {{$manage->links()}} --}}


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
              <label class="control-label col-sm-2"for="roles">Roles</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="r">

              </div>
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
    </div>
  </div>
</div>




      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script type="text/javascript">


      $(document).ready(function() {

        // DataTable
        $('.datatable').DataTable({
                "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Indonesian-Alternative.json"
            },
            processing: true,
            serverSide: true,
            ajax: '{{ route('role/json') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'namaRule', name: 'namaRule'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        });

      $(document).on('click', '.edit-modal', function() {
      $('#footer_action_button').text(" Update Roles");
      $('#footer_action_button').addClass('glyphicon-check');
      $('#footer_action_button').removeClass('glyphicon-trash');
      $('.actionBtn').addClass('btn-success');
      $('.actionBtn').removeClass('btn-danger');
      $('.actionBtn').addClass('edit');
      $('.modal-title').text('Edit Roles');
      $('.deleteContent').hide();
      $('.form-horizontal').show();
      $('#fid').val($(this).data('id'));
      $('#r').val($(this).data('roles'));
      $('#myModal').modal('show');
      });
      // nama field
          $('.modal-footer').on('click', '.edit', function() {
            $.ajax({
              type: 'POST',
              url: 'editPostRoles',
              data: {
        "_token": "{{ csrf_token() }}",
          'id': $("#fid").val(),
          'namaRule': $('#r').val()
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
</div>
@endsection

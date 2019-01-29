@extends('layouts.app')

@section('content')

    <div class="col-md-8">
      <table id="example" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Detail</th>
              <th>Author</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody></tbody>
      </table>
    </div>
    <div class="col-md-4">
        <form>
          <div class="form-group myID">
            <label>ID</label>
            <input type="number" class="form-control" id="id" readonly="readonly">
          </div>
          <div class="form-group">
            <label>NAME</label>
            <input type="text" id="name" class="form-control">
          </div>
          <div class="form-group">
            <label>DETAIL</label>
            <textarea type="text" class="form-control" id="detail"></textarea>
          </div>
          <div class="form-group">
            <label>AUTHOR</label>
            <input type="text" id="author" class="form-control">
          </div>
          <button type="button" id="update" onclick="updateData()" class="btn btn-warning">UPDATE</button>
          <button type="button" id="save" onclick="saveData()" class="btn btn-primary">SAVE</button>
        </form>
    </div>

@endsection
@section('scripts')
  <script>

      $('#save').show();
      $('#update').hide();
      $('.myID').hide();

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
      })

      // index
      viewData();
      function viewData(){
        $.ajax({
          type: "GET",
          dataType: "json",
          url: "/posts",
          success: function(response){
            var rows = "";
            $.each(response, function(key,value){
              rows = rows + "<tr>";
              rows = rows + "<td>" + value.id + "</td>";
              rows = rows + "<td>" + value.name + "</td>";
              rows = rows + "<td>" + value.detail + "</td>";
              rows = rows + "<td>" + value.author + "</td>";
              rows = rows + "<td>";
              rows = rows + "<button type='button' class='btn btn-warning' onclick='editData("+value.id+")'>Edit</button>";
              rows = rows + "<button type='button' class='btn btn-danger' onclick='deleteData("+value.id+")'>Delete</button>"
              rows = rows + "</td></tr>";
            });
            $('tbody').html(rows);
          }
        })
      }
      
      // clear field after submit
      function clearData(){
        $('#id').val('');
        $('#name').val('');
        $('#detail').val('');
        $('#author').val('');
      }

      //store
      function saveData(){
          var name = $('#name').val();
          var author = $('#author').val();
          var detail = $('#detail').val();

          $.ajax({
            type: "POST",
            data: {
              name   : name,
              author : author,
              detail : detail
            },
            url : "{{ route('posts.store') }}",
            success: function (response){
              toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
              viewData();
              clearData();
              $('#save').show();
              },
              error: function(error){
              console.log(error)
              }
          })
      }

      //edit
      editData();
      function editData(id){
        $('#save').hide();
        $('#update').show();
        $('.myID').show();

        $.ajax({
          type: "GET",
          url: "/posts/"+id+"/edit",
          success: function(data){
            console.log(data);
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#detail').val(data.detail);
            $('#author').val(data.author);
          }
        });
      }

      //update
      function updateData(){
        var id = $('#id').val();
        var name = $('#name').val();
        var detail = $('#detail').val();
        var author = $('#author').val();

        $.ajax({
          type: "PUT",
          data: {
              name   : name,
              author : author,
              detail : detail
            },
            url:  "/posts/" + id,
            success: function (response){
              toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
              viewData();
              clearData();
              $('#update').hide();
              $('.myID').hide();
              $('#save').show();
              },
              error: function(error){
              console.log(error)
              }
        })
      }

  </script>
@endsection

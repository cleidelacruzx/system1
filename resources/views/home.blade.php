@extends('layouts.app')

@section('content')
  <div class="row mt-2" id="example2" style="display:none">
    <div class="col-md-8">
        <table id="example" class="table table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Author</th>
              <th>Detail</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach( App\Post::get() as $post)
            <tr>
              <td>{{ $post->name }}</td>
              <td>{{ $post->author }}</td>
              <td>{{ $post->detail }}</td>
              <td>
                  <a href="#" onclick="editData('{{ $post->id }}')"   class="btn btn-link text-primary"><i class="fa fa-pencil fa-2x"></i></a>
                  <a href="#" onclick="deleteData('{{ $post->id }}')" class="btn btn-link text-danger"><i class="fa fa-trash fa-2x"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>  
    </div>
    <div class="col-md-4">
        <form id="formID">
          <div class="form-group myID">
            <label>ID</label>
            <input type="number" class="form-control" id="id" name="id" readonly="readonly">
          </div>
          <div class="form-group">
            <label>NAME</label>
            <input type="text" id="name" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>AUTHOR</label>
            <input type="text" id="author" class="form-control" name="author">
          </div>
          <div class="form-group">
            <label>DETAIL</label>
            <textarea type="text" class="form-control" id="detail" name="detail"></textarea>
          </div>
            <button type="button" id="save"   onclick="saveData()"   class="btn btn-primary">SAVE  </button>
            <button type="button" id="update" onclick="updateData()" class="btn btn-info">UPDATE</button>
        </form>
    </div>
  </div>  

@endsection
@section('scripts')
  <script>    
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
            url : "{{ route('posts.store') }}",
            data: {
              name   : name,
              author : author,
              detail : detail
            },
            success:function(){
              toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
              // $('#example').append("<tr><td>"+name+"</td><td>"+author+"</td><td>"+detail+"</td><td><a href='#' onclick='editData('"+id+"')' class='btn btn-success'>EDIT</a><a href='#' onclick='deleteData('"+id+"')' class='btn btn-danger'>DELETE</a></td></tr>");
              location.reload();
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
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#detail').val(data.detail);
            $('#author').val(data.author);
          }
        });
      }

      //update
      function updateData(){

        var id     = $('#id').val();
        var name   = $('#name').val();
        var detail = $('#detail').val();
        var author = $('#author').val();

        $.ajax({
          type: "PUT",
          url:  "/posts/" + id,
          data: {
              name   : name,
              author : author,
              detail : detail
          },
          success: function (data){
            toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            clearData();
            location.reload();
            $('.myID').hide();
            $('#update').hide();
            $('#save').show();
            },
            error: function(error){
            console.log(error)
            }
        })
      }

      // delete
      function deleteData(id){
        $.ajax({
          type: "DELETE",
          url: '/posts/' + id,
          success: function(){
            toastr.warning('Record Successfully Deleted.', 'Success Alert', {timeOut: 5000});
          
          }
        })
      }

      $('#update').hide();
      $('.myID').hide();
      $('#save').show();

  </script>
@endsection

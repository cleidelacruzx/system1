@extends('layouts.app')
@section('content') <!-- dont forget to put endsection -->
<br>
<div class="row mt-2" id="example2" >
	<div class="col-xl-12 mb-5 mb-xl-0">
	<!-- Button trigger modal -->
	

		<div class="modal fade" id="studentmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalCenterTitle">Client</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      		       <form id="addstudent">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-1">
                <label>First Name</label>
                    <input type="text" id="first_name" name="Fname" class="form-control" required>
                  </div>
              <div class="col-md-1">
                    <label>Middle Name</label>
                    <input type="text" id="middle_name" name="Mname" class="form-control" required>
                  </div>
              <div class="col-md-1">
                    <label>Last Name</label>
                    <input type="text" id="last_name" name="Lname" class="form-control" required>
                  </div>
                </div>
                <div class="row">
                  <label>Facility</label>
                  <input type="text" id="facility" name="Facility" class="form-control" required>
                </div>
                <div class="row">
                  <label>Designation</label>
                  <input type="text" id="designation" name="Designation" class="form-control" required>
                </div>
                 <div class="row">
                  <label>Contact</label>
                  <input type="text" id="contact" name="Contact" class="form-control" required>
                </div>
                  <div class="row">
                  <label>Categories</label>
                  <textarea type="text" id="categories" class="form-control" id="categories" name="categories"></textarea>
                </div>
                 <div class="row">
                  <label>Concern</label>
                  <textarea type="text" id="concern" class="form-control" id="Concern" name="Concern"></textarea>
                </div>
          </div>
		      <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
		      		</form>
		    </div>
		  </div>
		</div>

		<table id="example" class="table">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Fname</th>
		      <th>Mname</th>
		      <th>Lname</th>
		      <th>Facility</th>
		      <th>Designation</th>
		      <th>Contact</th>
		      <th>Categories</th>
		      <th>Concern</th>
		      <th>Ticket</th>
		      <th>Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach ($clients as $client)
		    <tr>
		      <td>{{ $client->id }}</td>
		      <td>{{ $client->Fname }}</td>
		      <td>{{ $client->Mname }}</td>
		      <td>{{ $client->Lname }}</td>
		      <td>{{ $client->Facility }}</td>
		      <td>{{ $client->Designation }}</td>
		       <td>{{$client->Contact }}</td>
		      <td>{{$client->Categories }}</td>
		      <td>{{ $client->Concern }}</td>
		      <td>{{ $client->ticketnumber }}</td>
		  	<td>
		  		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open</button>
		  		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Status </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">User ID:</label>
            <input type="text" class="form-control" placeholder="Input Your ID" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" >Status</label><br>
            Please Expect a call on Wireless Access for Health team within this day          
        </div>
        <select>
        	<option>Process Status</option>
        	<option>Success/Done</option>
        	<option>On Hold</option>
        	<option>Rejected/Failed</option>
        </select>
        </form>
      </div>
		  	</td>
		    </tr>


		 

		    @endforeach
		  </tbody>
		</table>
</div>	
@endsection <!-- dont forget to put endsection -->
@section('scripts')
	<script>
		$(document).ready(function(){

			
			
			// ADD
		    $('#addstudent').on('submit', function(event) {
		       event.preventDefault(); 
		       $.ajax({
		           type: "POST",
		           url:  "{{ route('students.store') }}",
		           data: $('#addstudent').serialize(),
		           success: function( response ) {
		           	    if( response == "record exist"){
				          toastr.error('Patient Record Already Exist', 'Failed!', {timeOut: 5000, closeButton: true});
				        }else{
						toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
						}
						$('#studentmodal').modal('hide');
						$("#addstudent")[0].reset();
		           },
		           error: function(error){
		 				console.log(error)
		 			}
		       });
		    });
		   // ADD

		   // SHOW
		    $('.editbtn').on('click', function() {
		   		$('#editstudentmodal').modal('show');

		   		$tr = $(this).closest('tr');

		   		var data = $tr.children("td").map(function(){
		   			return $(this).text();
		   		}).get();

		   		console.log(data);

		   		$('#id').val(data[0]);	
		   		$('#first_name').val(data[1]);
		   		$('#middle_name').val(data[2]);
		   		$('#last_name').val(data[3]);
		   		$('#facility').val(data[4]);
		   		$('#designation').val(data[5]);
		   		$('#contact').val(data[6]);
		   		$('#concern').val(data[7]);
		   		$('#ticketnumber').val(data[7]);

		    });
		   // SHOW

		   // UPDATE
		    $('#editstudentmodal').on('submit', function(event) {
		       event.preventDefault(); 

		       var id = $('#id').val();
		       $.ajax({
		           type: "PUT",
		           url:  "/students/" + id,
		           data: $('#editstudent').serialize(),
		           success: function( response ) {
		           		console.log(response);
						$('#editstudentmodal').modal('hide');
						toastr.success('Student Successfully Updated.', 'Success Alert', {timeOut: 5000});
						// location.reload();
		           },
		           error: function(error){
		 				console.log(error)
		 			}
		       });
		    });
		    // UPDATE
		     function deleteData(id){
        $.ajax({
          type: "DELETE",
          url: '/client/' + id,
          success: function(){
            toastr.warning('Record Successfully Deleted.', 'Success Alert', {timeOut: 5000});
            location.reload();
          }
        })
      }


		});
		
		   

	</script>
@endsection

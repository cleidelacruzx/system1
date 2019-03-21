@extends('layouts.app')
@section('content')
<br>
<div class="row mt-2" id="example2" style="display:none">
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
		      		       <form id="addadmin">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-4">
                <label>Email</label>
                    <input type="text" id="email" name="email" class="form-control" required>
                  </div>
              <div class="col-md-4">
                    <label>Encountered Problem</label>
                    <input type="text" id="eproblem" name="eproblem" class="form-control" required>
                  </div>
              <div class="col-md-4">
                    <label>Before Problem</label>
                    <input type="text" id="bproblem" name="bproblem" class="form-control" required>
                  </div>
                </div>
                <div class="row">
                  <label>receiver</label>
                  <input type="text" id="receiver" name="receiver" class="form-control" required>
                </div>
                 <div class="row">
                  <label>Ticket</label>
                  <input type="text" id="ticket" name="ticket" class="form-control" required>
                </div>
                 <div class="row">
                  <label>Date</label>
                  <textarea type="text" id="theDate" name="theDate" class="form-control" id="Concern" name="Concern"></textarea>
                </div>
          </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save</button>
		      </div>
		      		</form>
		    </div>
		  </div>
		</div>


		<br>
		<br>
		<table id="example" class="table">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Email</th>
		      <th>Encountered Problem</th>
		      <th>Before Problem</th>
		      <th>receiver</th>
		      <th>Ticket</th>
		      <th>Date</th>
		      <th>Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($admin as $admin)
		    <tr>
		      <td>{{ $admin->id }}</td>
		      <td>{{ $admin->email }}</td>
		      <td>{{ $admin->eproblem }}</td>
		      <td>{{ $admin->bproblem }}</td>
		      <td>{{ $admin->receiver }}</td>
		      <td>{{ $admin->ticket }}</td>
		        <td>{{ $admin->theDate }}</td>
		      <td>
		      		<a href="#" class="btn btn-success editbtn">EDIT</a>
		      		<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteStudent{{ $student->id }}">DELETE</a>
		      </td>
		    </tr>

		    	<!--modal -->
	            <div class="modal fade" id="deleteStudent{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
	                <div class="modal-dialog modal-dialog-centered" role="document">
	                    <div class="modal-content">
		                <div class="modal-header">
		                    <h5 class="modal-title">Please Confirm!</h5>
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                      <span aria-hidden="true">×</span>
		                    </button>
		                </div>
		                 <form method="POST" action="{{ route('students.destroy',$student->id) }}">
		                 	<div class="modal-body">
		                    {{ csrf_field() }}
		                    {{ method_field('DELETE') }}  
		                    <h5>Would you like to Delete this record?</h5>
		                 	</div>
		                    <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-primary">Save changes</button>
		                    </div>
	                    </form>
	                  </div>
	                    </div>
	                </div>
	            </div>
	          <!-- Modal -->

		    @endforeach
		  </tbody>
		</table>
</div>	

		<div class="modal fade" id="editstudentmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    <div class="modal-content">
				    <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				    	</button>
				    </div>
			      	<form id="editstudent">
			      	<div class="modal-body">
				        	{{ csrf_field() }}
				        	{{ method_field('PUT') }}
				        	<input type="hidden" name="id" id="id">
				        	<div class="row">
				        		<div class="col-md-4">
									<label>First Name</label>
				        			<input type="text" name="first_name" id="first_name" class="form-control" required>
				        		</div>
								<div class="col-md-4">
				        			<label>Middle Name</label>
				        			<input type="text" name="middle_name" id="middle_name" class="form-control" required>
				        		</div>
								<div class="col-md-4">
				        			<label>Last Name</label>
				        			<input type="text" name="last_name" id="last_name" class="form-control" required>
				        		</div>
				        	</div>
				        	<div class="row">
				        		<label>Ticket</label>
				        		<input type="text" name="course" id="course" class="form-control" required>
				        	</div>
				        	<div class="row">
				        		<label>Priority</label>
				        		<input type="text" name="section" id="section" class="form-control" required>
				        	</div>
			      	</div>
				    <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Save changes</button>
				    </div>
			      	</form>
			    </div>
		  	</div>
		</div>

</div>	
@endsection
@section('scripts')
	<script>
		$(document).ready(function(){

			
			
			// ADD
		    $('#addadmin').on('submit', function(event) {
		       event.preventDefault(); 
		       $.ajax({
		           type: "POST",
		           url:  "{{ route('admin.store') }}",
		           data: $('#concern').serialize(),
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
		   		$('#course').val(data[4]);
		   		$('#section').val(data[5]);

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

		});
		
		   

	</script>
@endsection

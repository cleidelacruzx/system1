@extends('layouts.app')
@section('content')
  
<br>
<div class="row mt-2" id="example2" >
	<div class="col-xl-12 mb-5 mb-xl-0">
	<!-- Button trigger modal -->
	

		<div class="modal fade" id="studentmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalCenterTitle">Home</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form id="addstudent">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-1">
                <label>User ID</label>
                    <input type="text" id="User" name="User" class="form-control" required>
                  </div>
              <div class="col-md-1">
                    <label>Ticket</label>
                    <input type="text" id="Ticket" name="Ticket" class="form-control" required>
                  </div>
              <div class="col-md-1">
                    <label>Last Name</label>
                    <input type="text" id="Lname" name="Lname" class="form-control" required>
                  </div>
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
		 



		 



@endsection <!-- dont forget to put endsection -->

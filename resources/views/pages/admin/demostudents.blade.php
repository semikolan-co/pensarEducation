@extends('layouts.admin')
@section('content')

{{-- 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}





    <div class="container-fluid p-0">

        {{-- <h1 class="h3 mb-3"><strong>Demo</strong> Students</h1> --}}



        
        <div class="row">
            <div class="col-12  d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <a href="/demostudents" class="card-title h5 mb-0">Demo Students</a>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Class</th>
                                <th>Parent</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

@foreach($demostudents as $student)
                            <tr>
                                
                                <td>{{$loop->iteration}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->kidclass}}</td>
                                <td>{{$student->kidage}}</td>
                                <td>{{$student->parentname}}</td>
                                <td><a href="tel:{{$student->parentphone}}">{{$student->parentphone}}</a></td>
                                <td><a href="mailto:{{$student->parentemail}}">{{$student->parentemail}}</a></td>
                                <td><span class="badge bg-success">Done</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <a href="/demostudents" class="btn btn-primary" style="width:max-content">View All</a> --}}
            
        </div>

    </div>

    
@endsection

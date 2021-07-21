@extends('layouts.admin')
@section('content')


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#addModal">
    Add Topic
  </button>
  

  <?php $ways = [
    "add","edit"
  ]; ?>
  @forelse ($ways as $way)
  <!-- Modal -->
  <div class="modal fade" id="{{$way}}Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="{{ route($way.'topic') }}">
        @csrf 
        <input type="hidden" name="id">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> {{ucwords($way)}} Topic</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <select name="course" class="form-select"  required>
            <option disabled selected value="">Open this select menu</option>
            @forelse($courses as $course)
            <option value="{{$course->slug}}">{{$course->name}}</option>
            @empty @endforelse
          </select>
            <div class="my-3">
              <label class="form-label">Topic Name</label>
              <input type="text" name="name" class="form-control" required>
             
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </div>
    </form>
    </div>
  </div>
  @empty @endforelse




  {{-- Delete Model --}}
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="{{ route('deletetopic') }}">
        @csrf 
        <input type="hidden" name="id">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Are you sure you want to delete this topic?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <strong></strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </form>
    </div>
  </div>



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
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

@forelse($topics as $topic)
                            <tr>
                                
                                <td>{{$loop->iteration}}</td>
                                <th>{{$topic->name}}</th>
                                <th>{{$topic->course}}</th>
                                <th>
                                  <span class="edit"   data-id="{{$topic->id}}" data-name="{{$topic->name}}" data-course="{{$topic->course}}" ><i class="align-middle"  data-feather="edit"></i></span>
                                  <span class="delete"   data-id="{{$topic->id}}" data-name="{{$topic->name}}" data-course="{{$topic->course}}" ><i class="align-middle"  data-feather="trash"></i></span>
                                </th>
                            </tr>
                            @empty @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <a href="/demostudents" class="btn btn-primary" style="width:max-content">View All</a> --}}
            
        </div>

    </div>

    

<script>
  var editModal = new bootstrap.Modal(document.getElementById('editModal'))
  var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'))

  $('.edit').click(function(){
    // alert('ddedeww')
    var id = $(this).data('id')
    var name = $(this).data('name')
    var course = $(this).data('course')
    $('#editModal select').val(course)
    $('#editModal input[name="name"]').val(name)
    $('#editModal input[name="id"]').val(id)
    editModal.show()
  })

  $('.delete').click(function(){
    // alert('ddedeww')
    var id = $(this).data('id')
    var name = $(this).data('name')
    var course = $(this).data('course')
    $('#deleteModal input[name="id"]').val(id)
    $('#deleteModal strong').html(`${name}`)
    deleteModal.show()
  })

  
</script>
@endsection

@extends('layouts.admin')
@section('content')


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#addModal">
    Add Lesson
  </button>
  

  <?php $ways = [
    "add","edit"
  ]; ?>
  @forelse ($ways as $way)
  <!-- Modal -->
  <div class="modal fade" id="{{$way}}Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="{{ route($way.'lesson') }}">
        @csrf 
        <input type="hidden" name="id">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> {{ucwords($way)}} Topic</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="my-3">
            <label class="form-label">Select Course</label>
          
          <select name="course" class="form-select"  required>
            <option disabled selected value="">Open this select menu</option>
            @forelse($courses as $course)
            <option value="{{$course->slug}}">{{$course->name}}</option>
            @empty @endforelse
          </select>
          </div>
          <div class="my-3">
            <label class="form-label">Select Topic</label>

          <select name="topic" class="form-select"  required>
            <option disabled selected value="">Open this select menu</option>
          </select>
          </div>

          <div class="my-3">
            <label class="form-label">Lesson Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="my-3">
            <label class="form-label">PDF Link</label>
            <input type="text" name="pdflink" class="form-control" required>
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
      <form method="post" action="{{ route('deletelesson') }}">
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



        
        
    <div class="accordion" id="accordionExample">

      @forelse($topics as $topic)
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading{{$topic->id}}">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$topic->id}}" aria-expanded="true" aria-controls="collapse{{$topic->id}}">
            {{$topic->name}}
          </button>
        </h2>
        <div id="collapse{{$topic->id}}" class="accordion-collapse collapse @if($loop->iteration == 1) show @endif " aria-labelledby="heading{{$topic->id}}" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <table class="table table-hover my-0">
              <thead>
                  <tr>

                      <th>#</th>
                      <th>Name</th>
                      <th>PDF Link</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>

@forelse($topic->lessons as $lesson)
                  <tr>
                      
                      <td>{{$loop->iteration}}</td>
                      <th>{{$lesson->name}}</th>
                      <th><a href="{{$lesson->pdflink}}"> {{$lesson->pdflink}}</a></th>
                      <th>
                        <span class="edit"   data-id="{{$lesson->id}}"  data-topicid="{{$topic->id}}" data-name="{{$lesson->name}}" data-topic="{{$lesson->topic}}" data-pdflink="{{$lesson->pdflink}}" data-course="{{$topic->course}}" ><i class="align-middle"  data-feather="edit"></i></span>
                        <span class="delete"   data-id="{{$lesson->id}}" data-name="{{$lesson->name}}" data-topic="{{$lesson->topic}}" ><i class="align-middle"  data-feather="trash"></i></span>
                      </th>
                  </tr>
                  @empty @endforelse
              </tbody>
          </table>
          </div>
        </div>
      </div>
      @empty @endforelse


    </div>

    </div>

    

<script>
  var editModal = new bootstrap.Modal(document.getElementById('editModal'))
  var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'))

  $('.edit').click(function(){
    // alert('ddedeww')
    var id = $(this).data('id')
    var name = $(this).data('name')
    var topic = $(this).data('topic')
    var course = $(this).data('course')
    var topicid = $(this).data('topicid')
    var pdflink = $(this).data('pdflink')

    console.log("Id : ",id)
    console.log("Name : ",name)
    console.log("Topic : ",topic)
    console.log("Course : ",course)
    console.log("Topicid : ",topicid)
    console.log("Pdflink : ",pdflink)

    $('#editModal select[name="course"]').val(course)
    $('#editModal select[name="topic"]').val(topic)
    $('#editModal input[name="name"]').val(name)
    $('#editModal input[name="pdflink"]').val(pdflink)
    $('#editModal input[name="id"]').val(id)
    updateTopic(topicid,'edit')
    editModal.show()
  })

  $('.delete').click(function(){
    // alert('ddedeww')
    var id = $(this).data('id')
    var name = $(this).data('name')
    $('#deleteModal input[name="id"]').val(id)
    $('#deleteModal strong').html(`${name}`)
    deleteModal.show()
  })

  
</script>


<script>
  
        $(document).ready(function() {
            updateTopic();
        })
        $('#addModal select[name="course"]').on('change', function() {
            updateTopic();
        })
        $('#editModal select[name="course"]').on('change', function() {
            updateTopic(0,'edit');
        })

        function updateTopic(topicid = '',way='add') {
          console.log(" updateTopic is Called ")
            $('#'+way+'Modal select[name="topic"]').attr('disabled', true)
            var html = '<option selected disabled value="">Select Topic</option>';
            var value = $('#'+way+'Modal select[name="course"]').val();
            console.log(" Sending AJAX for ", value)
            $.post('{{ route('getTopic') }}', {
                course : value
            }, function(data, status) {
            console.log(" AJAX Successful..")
            console.log(data)


                // alert("Data: " + data + "\nStatus: " + status);
                data.forEach(topic => {
                    html +=
                        `<option value="${topic.id}" ${topic.id==topicid? "selected":""}>${topic.name}</option>`
                });
                $('#'+way+'Modal select[name="topic"]').html(html)
                $('#'+way+'Modal select[name="topic"]').attr('disabled', false)
                console.log(" Updated DOM ")

            });
        }
</script>















@endsection

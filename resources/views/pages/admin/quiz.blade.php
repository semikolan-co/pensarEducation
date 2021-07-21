@extends('layouts.admin')

@section('content')

<style>
    #formdiv{
        box-shadow:0 2px 5px #666;
        border-top:5px solid #495057;
        color:#222
    }
    .bottomlineinput{
        background:transparent;
        width: 100%;
        border:none;
        outline: none;
        border-bottom:2px solid #eee;
    }
    :root{
        --primary:#000;
    }
    .bg-theme{
        background:#495057;
        color: #fff
    }
    .question-box{
        bacground:;
        padding: 5px 10px;
        margin: 25px 10px;
        border-top:3px solid #495057;
        box-shadow:0 2px 5px #888;
    }
    .deletequestionbutton{
        float:right;
        color: #666;
    }
    </style>
    <div class="container-fluid mt-3">

        <div class="row">

            <div class="col-lg-8 col-md-10 mx-auto mb-5">


                <h3>{{ $way }} Quiz</h3>
                <hr>
                <form enctype="multipart/form-data" name="sentMessage" id="contactForm" action="@if ($way=='Add' ) /addquiz
                @else
                                        /editquiz @endif " method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="quizdata" value="" id="quizdata" >
                    <input type="hidden" name="id" value="{{$quiz->id ?? ''}}" id="id" >
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Title</label>
                            <input name="name" type="text" value="{{ $quiz['name'] ?? ''}}" class="form-control"
                                placeholder="Title" id="name" required
                                data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                


                    <div class="control-group mb-3">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Course</label>
                            <select name="course" required class="form-select form-select-lg"
                                aria-label=".form-select-lg example">
                                <option disabled selected value="">Select Course</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->slug }}" @if (($quiz['course'] ?? '') == $course['slug']) selected @endif>{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="control-group mb-3">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Select Topic</label>
                            <select name="topic" required class="form-select form-select-lg"
                                aria-label=".form-select-lg example">
                                <option selected disabled value="">Select Topic</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Select Lesson</label>
                            <select name="lesson" required class="form-select form-select-lg"
                                aria-label=".form-select-lg example">
                                <option selected disabled value="">Select Lesson</option>
                            </select>
                        </div>
                    </div>

                 









                    <div id="questions">

                       
                    </div>
        
        
                        <button type="button" onclick="addMCQ()" class="btn btn-secondary my-2"><i class="far fa-dot-circle"></i> &nbsp;
                            Add Question</button>
                    



















                    <br>
                    <div id="success"></div>
                    <input type="submit" name="" id="submitbutton" class="d-none">
                    <button type="button" onclick="submitForm()" class="btn bg-theme mt-3" id="submitbtn">Create Form</button>
               </form>
            </div>
        </div>
    </div>






   























<script>
  
    $(document).ready(function() {
        updateTopic();
    })


    $('select[name="course"]').on('change', function() {
        updateTopic();
    })
    
    function updateTopic() {
      console.log(" updateTopic is Called ")
        $('select[name="topic"]').attr('disabled', true)
        var html = '<option selected disabled value="">Select Topic</option>';
        var value = $('select[name="course"]').val();
        console.log(" Sending AJAX for ", value)
        $.post('{{ route('getTopic') }}', {
            course : value
        }, function(data, status) {
        console.log(" AJAX Successful..")
        console.log(data)


            // alert("Data: " + data + "\nStatus: " + status);
            topicid = "{{ $quiz->topicid ?? ''}}";

            data.forEach(topic => {
                html +=
                    `<option value="${topic.id}" ${topic.id==topicid? "selected":""}>${topic.name}</option>`
            });
            $('select[name="topic"]').html(html)
            $('select[name="topic"]').attr('disabled', false)
            console.log(" Updated DOM ")
            updateLesson()

        });
    }




    $('select[name="topic"]').on('change', function() {
        updateLesson();
    })
    
    function updateLesson() {
      console.log(" updateLesson is Called ")
        $('select[name="lesson"]').attr('disabled', true)
        var html = '<option selected disabled value="">Select Lesson</option>';
        var value = $('select[name="topic"]').val();
        console.log(" Sending AJAX for ", value)
        $.post('{{ route('getLesson') }}', {
            topic : value
        }, function(data, status) {
        console.log(" AJAX Successful..")
        console.log(data)


            // alert("Data: " + data + "\nStatus: " + status);
            lessonid = "{{ $quiz->lessonid ?? ''}}";

            data.forEach(lesson => {
                html +=
                    `<option value="${lesson.id}" ${lesson.id==lessonid? "selected":""}>${lesson.name}</option>`
            });
            $('select[name="lesson"]').html(html)
            $('select[name="lesson"]').attr('disabled', false)
            console.log(" Updated DOM ")

        });
    }



</script>













<script>
    var questions = JSON.parse(`{!!$quiz->quizdata ?? '[]'!!}`);
    
    
    $(document).ready(function() {
        console.log("Somethinfddg",questions)
        updateForm();
    })

    function addMCQ() {
        updateQuestions()
        data = {
            type: "mcq",
            correct: 0,
            question: "",
            options: [""]
        }
        questions.push(data)
        updateForm()
    }

    

    function updateForm() {
        console.log(questions)
        data = ""
        questions.forEach((question, index) => {

                options = ""
                question.options.forEach((option, i) => {
                    options +=
                        `<div>
                            <input ${i==question.correct ? 'checked' : null} type="radio" name="option-radio-${index}" value="${i}" id="option-radio-${index}">
                        <input type="text" value="${option}" id="option-${index}-${i}" name="option-${index}-${i}" class="m-1 form-control w-75 d-inline" placeholder="Option ${i+1}"   >
                        </div>`
                });
                data += `<div class="question-box" >
                <span type="button" onclick="deleteQuestion(${index})" class="deletequestionbutton"><i class="fa fa-trash"></i></span>

                        
                            <input value="${question.question}" placeholder="Question" type="text" id="question${index}" class="bottomlineinput h3" />
                            
                        <div class="column px-4">
                        ${options}
                        </div>
                        <span type="button" onclick="addOption(${index})" class="mx-4 mt-1k"><i class="fa fa-plus"></i> Add Other</span>
                
                    </div>`
            
        });
        $('#questions').html(data)
    }

    function updateQuestions() {
        questions.forEach((question, index) => {
            questions[index].question = $('#question' + index).val()
            questions[index].correct = $('input[name="option-radio-' + index+'"]:checked').val()
            
                question.options.forEach((option, i) => {
                    questions[index].options[i] = $(`#option-${index}-${i}`).val()
                });
            
        });
    }

    function addOption(index) {
        updateQuestions()
        questions[index].options.push("")
        updateForm()
    }

    function submitForm() {
        updateQuestions()
        data = JSON.stringify(questions)
        $('#quizdata').val(JSON.stringify(questions))
        // alert(data)
        document.getElementById('submitbutton').click()

    }
    function deleteQuestion(index) {
        updateQuestions()
        questions.splice(index, 1);
        updateForm()
    }







</script>


@endsection

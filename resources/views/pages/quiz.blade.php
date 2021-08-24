@extends('layouts.app')
@section('content')
    





<style>
    .question {
       font-weight: 600;
       margin-top: 10px;
 
    }
 
    .answers {
       margin-bottom: 10px;
       margin-top: 5px;
    }
 
    .answers label {
       padding: 0 20px;
    }
 
    .quizbox {
       display: flex;
       justify-content: center;
       align-items: center;
       flex-direction: column;
       padding: 30px;
       font-size: 1.5em;
       /* background:var(--primarylight); */
 
    }
    #quiz{
        width: 100%;
    }
    .questiondiv{
        margin: 20px auto;
        widows: 95%;
        max-width: 700px;
        background: #0001;
        border-radius:10px;
        border-left:4px solid var(--primary);
        padding:10px 20px;


    }
 </style>
 
 
 <div class="quizbox">
    <h1>{{$quiz->name}}</h1>
    <div id="results"></div>
    <div id="quiz"></div>
    <button id="submit" class="button">Get Results</button>
 
 
    <form id="myForm{{$method}}" method="post" action="{{ route('updateprogress')}}">
         @csrf
 
       <input type="hidden" name="quizid" value="{{$quiz->id}}">
       <input type="hidden" name="userid" value="{{Auth::id()}}">
       {{-- <input type="hidden" name="submit" type="submit" value="Submit form">  --}}
    </form>
 
 </div>
 
 
 
 <script>
    var myQuestions = JSON.parse(`{!! $quiz->quizdata !!}`);
    var quizContainer = document.getElementById('quiz');
    var resultsContainer = document.getElementById('results');
    var submitButton = document.getElementById('submit');
 
    generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);
 
    function generateQuiz(questions, quizContainer, resultsContainer, submitButton) {
 
       function showQuestions(questions, quizContainer) {
          // we'll need a place to store the output and the answer choices
          var output = [];
          var answers;
 
          // for each question...
        //   for (var i = 0; i < questions.length; i++) {
            questions.forEach((question, index) => {

 
             // first reset the list of answers
             answers = [];
 
             // for each available answer...
            //  foreach (questions[i].options as option) {
            question.options.forEach((option, i) => {

 
                // ...add an html radio button
                answers.push(
                   '<label>' +
                   '<input type="radio" name="question' + index + '" value="' + i + '"> &nbsp;' + option +
                   '</label>'
                );
             })
 
             // add this question and its answers to the output
             output.push(`<div class="questiondiv">
                <div class="question"> ${question.question} </div>
                <div class="answers">${answers.join('')} </div>
                </div>`
             );
          });
 
          // finally combine our output list into one string of html and put it on the page
          quizContainer.innerHTML = output.join('');
       }
 
 
       function showResults(questions, quizContainer, resultsContainer) {
 
          // gather answer containers from our quiz
          var answerContainers = quizContainer.querySelectorAll('.answers');
 
          // keep track of user's answers
          var userAnswer = '';
          var numCorrect = 0;
 
          // for each question...
          for (var i = 0; i < questions.length; i++) {
 
             // find selected answer
             userAnswer = (answerContainers[i].querySelector('input[name=question' + i + ']:checked') || {}).value;
             console.log("user Answer : ", userAnswer);
 
             // if answer is correct
             if (userAnswer === questions[i].correct) {
                // add to the number of correct answers
                numCorrect++;
 
                // color the answers green
                answerContainers[i].style.color = 'lightgreen';
 
             }
             // if answer is wrong or blank
             else {
                // color the answers red
                answerContainers[i].style.color = 'red';
             }
          }
          // show number of correct answers out of total
          resultsContainer.innerHTML = numCorrect + ' out of ' + questions.length;
          if (numCorrect == questions.length) {
            console.log("You are done");
            //  var myForm = document.getElementById("myFormn");
 
             document.getElementById("myFormn").submit();
             if (typeof(myForm) != 'undefined' && myForm != null) {
                console.log('Har')
             }
          }
       }
 
       // show questions right away
       showQuestions(questions, quizContainer);
 
       // on submit, show results
       submitButton.onclick = function() {
          showResults(questions, quizContainer, resultsContainer);
       }
 
    }
 </script>
@endsection
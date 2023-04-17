@extends('Admin.Main.main')
@section('title', 'Quizzes | Healthhoodlum')
@section('content')
<div class="">
    <div class="row">
       <div class="col-lg-3"></div>
       <div class="col-lg-6">
           <div class="card">
               <div class="card-title">
                   <h4>Create Question</h4>
                   
               </div>
               <div class="card-body">
                   <div class="basic-form">
                       <form action="{{ route('quizzes.store') }}" method="post" id="tblFruits">
                           @csrf
                            @if ($errors->has('correct_ans'))
                                <span class="text-danger">{{ "You have to select one answer as correct answer" }}</span>
                            @endif
                           <div class="form-group">
                            <label>Question</label>
                            <input type="text" class="form-control" placeholder="Enter question....." name="question" value="{{ old('question') }}">
                            @if ($errors->has('question'))
                                <span class="text-danger">{{ $errors->first('question') }}</span>
                            @endif
                            </div>

                            <div class="form-group">
                                <label>Answer 1</label>
                                <input type="text" class="form-control" placeholder="Enter answer1" name="ans1" value="{{ old('ans1') }}">
                                <input id="chkMango" type="checkbox" class="correct_ans" value="ans1" name="correct_ans"/><label for="chkMango">Correct answer</label>
                                @if ($errors->has('ans1'))
                                    <span class="text-danger">{{ $errors->first('ans1') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Answer 2</label>
                                <input type="text" class="form-control" placeholder="Enter answer2" name="ans2" value="{{ old('ans2') }}">
                                <input id="chkMango2" type="checkbox" class="correct_ans" value="ans2" name="correct_ans"/><label for="chkMango">Correct answer</label>

                                @if ($errors->has('ans2'))
                                    <span class="text-danger">{{ $errors->first('ans2') }}</span>
                                @endif
                            </div>

                            {{-- <div class="form-group">
                                <label>Answer 3</label>
                                <input type="text" class="form-control" placeholder="Enter answer3" name="ans3" value="{{ old('ans3') }}">
                                <input id="chkMango3" type="checkbox" class="correct_ans" value="ans3" name="correct_ans"/><label for="chkMango">Correct answer</label>
                                @if ($errors->has('ans3'))
                                    <span class="text-danger">{{ $errors->first('ans3') }}</span>
                                @endif
                            </div> --}}
                           
   
                           <div class="text-center">
                           <button type="submit" class="btn btn-default btn-sm">Create</button>
                           <a href="{{ route('quizzes.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                        </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <script type="text/javascript">
    window.onload = function () {
        var tblFruits = document.getElementById("tblFruits");
        var chks = tblFruits.getElementsByClassName("correct_ans");
        for (var i = 0; i < chks.length; i++) {
            chks[i].onclick = function () {
                for (var i = 0; i < chks.length; i++) {
                    if (chks[i] != this && this.checked) {
                        chks[i].checked = false;
                    }
                }
            };
        }
    };
</script>
@endsection

@extends('Admin.Main.main')
@section('title', 'Quiz | Healthhoodlum')
@section('content')
<div class="">
    <div class="row">
       <div class="col-lg-3"></div>
       <div class="col-lg-6">
           <div class="card">
               <div class="card-title">
                   <h4>Edit question</h4>
               </div>
               <div class="card-body">
                   <div class="basic-form">
                       <form action="{{ route('quizzes.update', $quizze->id) }}" method="post" id="tblFruits">
                           @csrf
                           @method("PUT")
                           <div class="form-group">
                            <label>Question</label>
                            <input  class="form-control" name="question" value="{{ $quizze->question }}">
                            </div>
                
                            <div class="form-group">
                                <label>Ans1</label>
                                <input type="text" class="form-control" name="ans1" value="{{ $quizze->ans1 }}">
                                <input id="chkMango" type="checkbox" class="correct_ans" value="ans1" name="correct_ans" {{ $quizze->correct_ans == "ans1" ? "checked" : "" }}/><label for="chkMango">Correct answer</label>
                                @if ($errors->has('ans1'))
                                    <span class="text-danger">{{ $errors->first('ans1') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Ans2</label>
                                <input type="text" class="form-control" name="ans2" value="{{ $quizze->ans2 }}">
                                <input id="chkMango" type="checkbox" class="correct_ans" value="ans2" name="correct_ans" {{ $quizze->correct_ans == "ans2" ? "checked" : "" }}/><label for="chkMango">Correct answer</label>
                                @if ($errors->has('ans2'))
                                    <span class="text-danger">{{ $errors->first('ans2') }}</span>
                                @endif
                            </div>

                            {{-- <div class="form-group">
                                <label>Ans3</label>
                                <input type="text" class="form-control" name="ans3" value="{{ $quizze->ans3 }}">
                                <input id="chkMango" type="checkbox" class="correct_ans" value="ans3" name="correct_ans" {{ $quizze->correct_ans == "ans3" ? "checked" : "" }}/><label for="chkMango">Correct answer</label>
                                @if ($errors->has('ans3'))
                                    <span class="text-danger">{{ $errors->first('ans3') }}</span>
                                @endif
                            </div> --}}
                            
                           
                            
                            
   
                           
   
                           <div class="text-center">
                           <button type="submit" class="btn btn-default btn-sm">Update</button>
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

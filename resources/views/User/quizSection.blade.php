@extends('User.Master.main')
@section('content')
    <section class="inner-banner5" style="background-image:url('{{ asset('User/images/background/privacy.jpg') }}')">
        <div class="container">
            <h2 class="privac-cont2 text-center"> Question and Answer </h2>
        </div>
    </section>
@php
    $already_answered = DB::table("results")->where("user_id", auth()->id())->get();
   
    // if(!empty($already_answered[0])){
    //     dd($already_answered[0]);
    // }else{
    //     dd("no");
    // }
@endphp
@if (empty($already_answered[0]))
    <section class="innercontent  quiz-cont">
        <div class="container">
            <form action="{{ route('user.quizPost') }}" method="post">
                @csrf
                @php
                    $i = 1;
                @endphp
                @foreach ($quizzes as $item)
                    <div class="qui">
                        <h1 class="qui-h1">{{ $i }}.{{ $item->question }}</h1>
                        <label class="containerq">01 {{ $item->ans1 }}
                            <input type="radio" name="option{{ $item->id }}" value="ans1">
                            <span class="checkmark"></span>
                        </label>
                        <label class="containerq"> 02. {{ $item->ans2 }}.
                            <input type="radio" name="option{{ $item->id }}" value="ans2">
                            <span class="checkmark"></span>
                        </label>
                        {{-- <label class="containerq"> 03. {{ $item->ans3 }}
                            <input type="radio" name="option{{ $item->id }}" value="ans3">
                            <span class="checkmark"></span>
                        </label> --}}
                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach
                <!---------------------------------->
                <div class="qui2">
                    {{-- <button type="submit" class="btn btn-sm">  Submit  </button> --}}
                    <button type="submit" class="btn btn-lg site-button m-l10 radius-xl">Submit</button>
                </div>
                <!---------------------------------->
            </form>
        </div>
    </section>
    @else
    
    
    <section class="innercontent  quiz-cont resultTable">
        <div class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Question</th>
                    <th scope="col">Given answrer</th>
                    <th scope="col">Correct answrer</th>
                    <th scope="col">Result</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($already_answered  as $item)
                   @php
                       $question_name = DB::table("quizzes")->find($item->question_id);
                       $given_ans = DB::table("quizzes")->where("id", $item->question_id)->value($item->given_ans);
                       $correct_answer = DB::table("quizzes")->where("id", $item->question_id)->value("$question_name->correct_ans");
                       if($question_name->correct_ans == $item->given_ans){
                        $status = "Correct";
                        $color = "bg-success text-white";
                       }else{
                        $status = "Incorrect";
                        $color = "bg-danger text-white";
                       }
                  
                   @endphp     
                   
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $question_name->question }}</td>
                    <td>{{ $given_ans }}</td>
                    <td>{{ $correct_answer }}</td>
                    <td class="{{ $color }}">{{ $status }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </section>
    @endif
@endsection

@foreach($quizzes as $quiz)
    @include('frontend.home.item', ['quiz' => $quiz])
@endforeach

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <strong>ID</strong>
        </div>
        <div class="col-md-6">
            <strong>Name</strong>
        </div>
        <div class="col-md-2 text-center">
            <strong>Questions Count</strong>
        </div>
        <div class="col-md-2 text-center">
            <strong>Score</strong>
        </div>
    </div>
    @foreach($quizzes as $quiz)
        @include('frontend.home.item', ['quiz' => $quiz])
    @endforeach
    <div class="row text-center">
        {{ $quizzes->links() }}
    </div>
</div>

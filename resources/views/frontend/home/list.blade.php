<div class="panel-body">
    <div class="panel panel-default">
        <div class="panel-heading">Available Quizzes</div>
        <div class="panel-body">
            <div class="btn-group" role="group" aria-label="Quizzes List">
                @foreach($quizzes as $quiz)
                    @include('frontend.home.item', ['quiz' => $quiz])
                @endforeach
            </div>
        </div>
    </div>
</div>
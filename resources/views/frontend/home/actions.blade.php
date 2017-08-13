<div class="btn-group" role="group" aria-label="Actions">
    <a href="{{ route('home') }}"
       class="btn btn-primary {{ (request()->fullUrl() === route('home') ? 'active' : '') }}">
        @lang('actions.all_quizzes')
    </a>
    <a href="{{ route('quiz.create') }}"
       class="btn btn-primary {{ (request()->fullUrl() === route('quiz.create') ? 'active' : '') }}">
        @lang('actions.create_new')
    </a>
</div>

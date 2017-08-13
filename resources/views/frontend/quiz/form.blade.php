<h2>@lang('quiz.create.page_headline')</h2>
{{ Form::open([
        'url' => route('quiz.store'),
        'class' => 'quiz-forms',
        'method' => 'POST',
        'id' => 'quiz-form'
]) }}
<div class="form-group">
    {!! Form::label('quiz-title', trans('quiz.create.inputs.title')) !!} <span class="required">*</span>
    {!! Form::text('Quiz[title]', null, ['class' => 'form-control'])  !!}
</div>
<div class="form-group">
    {!! Form::label('quiz-questions-count', trans('quiz.create.inputs.questionsCount')) !!} <span class="required">*</span>
    {!! Form::text('questionsCount', null, ['class' => 'form-control'])  !!}
</div>
<div class="form-group">
    {!! Form::label('quiz-answers-count', trans('quiz.create.inputs.answersCount')) !!} <span class="required">*</span>
    {!! Form::text('answersCount', null, ['class' => 'form-control'])  !!}
</div>
<div class="form-group">
    {!! Form::label('quiz-excerpt', trans('quiz.create.inputs.excerpt')) !!}
    {!! Form::textarea('Quiz[excerpt]', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit(trans('quiz.create.inputs.submit'), ['class' => 'btn btn-primary']) !!}
</div>
{{ Form::close() }}
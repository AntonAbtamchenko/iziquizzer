<h2>@lang('question.create.page_headline')</h2>
{{ Form::open([
        'url' => route('quiz.store'),
        'class' => 'quiz-forms',
        'method' => 'POST',
        'id' => 'quiz-form'
]) }}

@while($questionsCount > 0)
    <div class="form-group">
        {!! Form::label('question-label', trans('question.create.inputs.label')) !!} <span class="required">*</span>
        {!! Form::text('Question[' . $questionsCount .'][label]', null, ['class' => 'form-control'])  !!}
        @if ($errors->has('Question.' . $questionsCount . '.label'))
            <p class="text-danger">{{ $errors->first('Question.' . $questionsCount . '.label') }}</p>
        @endif
    </div>
    <div class="form-group">
        {!! Form::label('question-body', trans('question.create.inputs.body')) !!} <span class="required">*</span>
        {!! Form::textarea('Question[' . $questionsCount .'][body]', null, ['class' => 'form-control'])  !!}
        @if ($errors->has('Question.' . $questionsCount . '.body'))
            <p class="text-danger">{{ $errors->first('Question.' . $questionsCount . '.body') }}</p>
        @endif
    </div>
    @php $iterator = $answersCount @endphp
    @while($iterator > 0)
        <div class="form-group">
            {!! Form::label('answer-label', trans('question.create.inputs.answers.label')) !!}
            <span class="required">*</span>
            {!! Form::text(
                'Question[' . $questionsCount .'][answers][' . $answersCount .'][label]',
                 null,
                 ['class' => 'form-control'])
            !!}
            @if ($errors->has('Question.' . $questionsCount . '.answers.' . $answersCount . '.label'))
                <p class="text-danger">
                    {{ $errors->first('Question.' . $questionsCount . '.answers.' . $answersCount . '.label') }}
                </p>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('answer-body', trans('question.create.inputs.answers.body')) !!}
            <span class="required">*</span>
            {!! Form::text(
                'Question[' . $questionsCount .'][answers][' . $answersCount .'][body]',
                 null,
                 ['class' => 'form-control'])
            !!}
            @if ($errors->has('Question.' . $questionsCount . '.answers.' . $answersCount . '.body'))
                <p class="text-danger">
                    {{ $errors->first('Question.' . $questionsCount . '.answers.' . $answersCount . '.body') }}
                </p>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('question-correct-answer', trans('question.create.inputs.correct_answer')) !!}
            {!! Form::radio(
                    'Question[' . $questionsCount .'][correct_answer]',
                     $iterator,
                     $iterator === $answersCount ? true : null
                 )
            !!}
            @if ($errors->has('Question.' . $questionsCount . '.correct_answer'))
                <p class="text-danger">
                    {{ $errors->first('Question.' . $questionsCount . '.correct_answer') }}
                </p>
            @endif
        </div>

        @php $iterator-- @endphp
    @endwhile

    @php $questionsCount-- @endphp
@endwhile

<div class="form-group">
    {!! Form::submit(trans('question.create.inputs.submit'), ['class' => 'btn btn-primary']) !!}
</div>
{{ Form::close() }}
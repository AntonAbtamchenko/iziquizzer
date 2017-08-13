<div class="row">
    <div class="col-md-2">
        {{ $quiz->id }}
    </div>
    <div class="col-md-6">
        <a href="#">{{ $quiz->title }}</a>
    </div>
    <div class="col-md-2 text-center">
        {{ $quiz->questions()->count() }}
    </div>
    <div class="col-md-2 text-center">
        -
    </div>
</div>

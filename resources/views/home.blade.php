@extends('app')
@section('content')
  <?php dd(json_decode($questions)); ?>
  @foreach ($questions['question'] as $question)
    <?php dump($question->ImageUrl); ?>
    {{-- <div class="card" style="width:400px">
      <img class="card-img-top" src="{{ $question['ImageUrl'] }}" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">{{ $question['Value'] }}</h4>
        <p class="card-text">{{ $question['PropertyName'] }}</p>
      </div>
    </div> --}}
  @endforeach
@endsection

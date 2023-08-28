@extends('app')
@section('content')
  {{-- <?php dd($grant['grantToken']); ?> --}}
  <h1>Get the question</h1>
  <form action="get-the-question">
    @csrf
    <div class="mb-3 mt-3">
      <label for="access" class="form-label">Access Token:</label>
      <input type="text" readonly class="form-control" value="{{ $grant['accessToken'] }}" id="access" name="access">
    </div>
    <div class="mb-3 mt-3">
      <label for="grant" class="form-label">Grant Token:</label>
      <input type="text" readonly class="form-control" value="{{ $grant['grantToken'] }}" id="grant"
        name="grant">
    </div>
    <button type="submit" class="btn btn-primary">Question</button>
  </form>
@endsection

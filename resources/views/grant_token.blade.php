@extends('app')
@section('content')
  <h1>Generate Grant Token</h1>
  <form action="grant-token">
    @csrf
    <div class="mb-3 mt-3">
      <label for="access" class="form-label">Access Token:</label>
      <input type="text" readonly class="form-control" value="{{ $access['accessToken'] }}" id="access" name="access">

    </div>
    <button type="submit" class="btn btn-primary">Grant Token</button>
  </form>
@endsection

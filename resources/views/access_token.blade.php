@extends('app')
@section('content')
  <h1>Generate Aceess Token</h1>
  <form action="access-token">
    @csrf
    <div class="mb-3 mt-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" readonly class="form-control" id="email" value="mdabunaserdipu@gmail.com" name="email">
    </div>
    <button type="submit" class="btn btn-primary">Access Token</button>
  </form>
@endsection

@extends('app')

@section('content')

<div class="container w-25 border p-4 mt-4">
  <form>
    <div class="mb-3">
      <label for="title" class="form-label">Titulo de tarea</label>
      <input type="title" class="form-control" id="title">
    </div>
    <button type="submit" class="btn btn-primary">Crear una tarea</button>
  </form>
</div>

@endsection

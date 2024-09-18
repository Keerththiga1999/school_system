<x-layout>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

  <body>

    <div class="container mt-3">
      <h2>Edit Student Form</h2>
      @if ($errors->any())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    {{$error}} <br>
    @endforeach
  </div>
    @endif
      <form action="/students/{{$student->id}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3 mt-3">
          <label for="first_name">First Name</label>
          <input type="text" class="form-control" id="first_name" name="first_name" value="{{$student->first_name}}">
        </div>
        <div class="mb-3">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" id="last_name" name="last_name" value="{{$student->last_name}}">
        </div>
        <div class="mb-3">
          <label class="form-check-label" for="grade_id">
            Grade Name
          </label>
          <select name="grade_id" class="form-control">
            @foreach ($grades as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
          </select>


        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

  </body>

  </html>
</x-layout>
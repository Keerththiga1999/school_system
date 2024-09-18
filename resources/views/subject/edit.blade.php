<x-layout>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

  <body>

    <div class="container mt-3">
      <h2>Edit Subject Form</h2>
      @if ($errors->any())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    {{$error}} <br>
    @endforeach
  </div>
    @endif
      <form action="/subjects/{{$subject->id}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
          <label class="form-check-label" for="subject_name">
            Subject Name
          </label>
          <select name="subject_name" class="form-control">
            @foreach ($subjects as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
          </select>

        </div>

        <div class="mb-3">
          <label for="subject_order">Subject order</label>
          <input type="text" class="form-control" id="pwd" name="subject_order" value="{{$subject->subject_order}}">
        </div>
        <div class="mb-3">
          <label for="color">Color</label>
          <input type="text" class="form-control" id="pwd" name="color" value="{{$subject->color}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

  </body>

  </html>
</x-layout>
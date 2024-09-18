

<x-layout>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<div class="container mt-3">
  <h2>Edit Grade Form</h2>
  @if ($errors->any())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    {{$error}} <br>
    @endforeach
  </div>
    @endif
  <form action="/grades/{{$grade->id}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3 mt-3">
      <label class="form-check-label" for="grade_name">Grade Name</label>
      <select name="grade_name" class="form-control">
@foreach ($grades as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
@endforeach
</select>

    </div>
    <div class="mb-3">
      <label for="grade_group">Grade Group</label>
      <input type="text" class="form-control" id="pwd"  name="grade_group"  value="{{$grade->grade_group}}">
    </div>
   
    <div class="mb-3">
      <label for="grade_order">Grade Order</label>
      <input type="text" class="form-control" id="pwd"  name="grade_order"  value="{{$grade->grade_order}}">
    </div>

    <div class="mb-3">
      <label for="grade_color">Grade Color</label>
      <input type="text" class="form-control" id="pwd"  name="grade_color"  value="{{$grade->grade_color}}">
    </div>
   
    

    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
</x-layout>
<x-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<div class="container mt-3">
  <h2>Create Student Form</h2>
  <form action="/students" method="post">
    @csrf
    <div class="mb-3 mt-3">
      <label for="first_name">First Name</label>
      <input type="text" class="form-control" id="email" name="first_name">
    </div>
    <div class="mb-3">
      <label for="last_name">Last Name</label>
      <input type="text" class="form-control" id="pwd"  name="last_name">
    </div>
    <div class="mb-3">
      <label class="form-check-label">
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
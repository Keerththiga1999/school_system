<form action="/students/{{$student->id}}" method="post">

        @csrf
        @method('put')
        <label for="first_name">First Name </label>
        <input type="text" name="first_name" id="first_name">
        <br>
        <label for="last_name">Last Name </label>
        <input type="text" name="last_name" id="last_name">
        <br>
        <!-- <label for="grade_id">Grade ID </label>
    <input type="number" name="grade_id" id="grade_id">
    <br> -->
        <select name="grade_id">
            @foreach ($grades as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <button type="submit">Submit</button>
    </form>
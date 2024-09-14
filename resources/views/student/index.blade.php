<style>
table,th,tr,td{
    border:2px solid black
}
</style>
<a href="students/create">New Student</a>
<table>
    <tr>
        <th>ID </th>
<th>First Name </th>
<th>Last Name </th>
<th>Grade Name </th>
<th>Details</th>
<th>Edit</th>
<th>Delete</th>
    </tr>
    
        @foreach($students as $student)
        <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->first_name}}</td>
        <td>{{$student->last_name}}</td>
        <td>{{$student->grade->grade_name}}</td>
        <td> <a href="students/{{$student->id}}">Show</a>
        <td> <a href="{{url("students/$student->id/edit")}}">Edit</a></td>
        
        <td>
                        <form action="/students/{{$student->id}}" method="post">
                            @method('delete')
                            @csrf
                          
                            <input type="submit" value="delete" class="btn btn-danger" onclick="return confirm('Do you want to delete?')">
                        </form>
                    </td>
        </tr>
        @endforeach
    
       
</table>
{{$students->links()}}
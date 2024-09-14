<style>
table,th,tr,td{
    border:2px solid black
}
</style>

<table>
    <tr>
<th>First Name </th>
<th>Last Name </th>
    </tr>
    
        @foreach($students as $student)
        <tr>
        <td>{{$student->first_name}}</td>
        <td>{{$student->last_name}}</td>
        </tr>
        @endforeach
    

</table>
{{$students->links()}}
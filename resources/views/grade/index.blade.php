<x-layout>
<br>
<a href="grades/create"><button type="button" class="btn btn-primary" data-mdb-ripple-init>New Grade</button></a>
<br><br>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Grades DataTable
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Grade Name</th>
                    <th>Grade Group</th>
                    <th>Grade Order</th>
                    <th>Grade Color</th>
                    <th>View Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            @foreach($grades as $grade)
            <tr>
                <td>{{$grade->id}}</td>
                <td>{{$grade->grade_name}}</td>
                <td>{{$grade->grade_group}}</td>
                <td>{{$grade->grade_order}}</td>
                <td>{{$grade->grade_color}}</td>
                
                <td> <a href="grades/{{$grade->id}}"> <button type="button" class="btn btn-info"> Show </button></a>
                <td> <a href="{{url("grades/$grade->id/edit")}}"><button type="button" class="btn btn-success">Edit</button></a></td>

                <td>
                    <form action="/grades/{{$grade->id}}" method="post">
                        @method('delete')
                        @csrf

                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Do you want to delete?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{$grades->links()}}
       
    </div>
</div>

        
</x-layout>
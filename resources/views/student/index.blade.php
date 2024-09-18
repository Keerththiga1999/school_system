<x-layout>
    <br>
    <a href="students/create"><button type="button" class="btn btn-primary" data-mdb-ripple-init>New Student</button></a>
    <br><br>
    <div class="card mb-4">
    <div class="container-fluid">
    <div class="card-body">
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Students DataTable</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table table-striped table-hover" id="datatablesSimple" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        
                                        <th>ID </th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Grade Name</th>
                        <th>View Details</th>
                        <th>Edit</th>
                        <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID </th>
                                       
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Grade Name</th>
                        <th>View Details</th>
                        <th>Edit</th>
                        <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                   
                @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->first_name}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>{{$student->grade->grade_name}}</td>
                    <td> <a href="students/{{$student->id}}"> <button type="button" class="btn btn-info"> Show </button></a>
                    <td> <a href="{{url("students/$student->id/edit")}}"><button type="button" class="btn btn-success">Edit</button></a></td>

                    <td>
                        <form action="/students/{{$student->id}}" method="post">
                            @method('delete')
                            @csrf

                            <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Do you want to delete?')">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            
            <br>
            

        </div>
    </div>
    </div>


</x-layout>
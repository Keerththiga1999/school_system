<x-layout>
<br>
<a href="grades/create"><button type="button" class="btn btn-primary" data-mdb-ripple-init>New Grade</button></a>
<br><br>
<div class="card mb-4">
<div class="container-fluid">
    <div class="card-body">
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Grade DataTable</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table table-striped table-hover" id="datatablesSimple" width="100%" cellspacing="0">
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
                                    <tfoot>
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
                                    </tfoot>
                                    <tbody>
                                      
       
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
        
      
    </div>
</div>
    </div>
    </div>
</div>
</div>


        
</x-layout>
<x-layout>
<br>
<a href="subjects/create"><button type="button" class="btn btn-primary" data-mdb-ripple-init>New Subject</button></a>
<br><br>
<div class="card mb-4">
<div class="container-fluid">
    <div class="card-body">
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Subject DataTable</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table table-striped table-hover" id="datatablesSimple" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>ID </th>
                    <th>Subject Name</th>
                    <th>Subject Order</th>
                    <th>Subject Color</th>
                    <th>View Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID </th>
                    <th>Subject Name</th>
                    <th>Subject Order</th>
                    <th>Subject Color</th>
                    <th>View Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
         
            @foreach($subjects as $subject)
            <tr>
                <td>{{$subject->id}}</td>
                <td>{{$subject->subject_name}}</td>
                <td>{{$subject->subject_order}}</td>
                <td>{{$subject->color}}</td>
                <td> <a href="subjects/{{$subject->id}}"> <button type="button" class="btn btn-info">Show </button></a>
                <td> <a href="{{url("subjects/$subject->id/edit")}}"><button type="button" class="btn btn-success">Edit</button></a></td>

                <td>
                    <form action="/subjects/{{$subject->id}}" method="post">
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

        
</x-layout>
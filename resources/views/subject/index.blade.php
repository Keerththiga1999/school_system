<x-layout>
<br>
<a href="subjects/create"><button type="button" class="btn btn-primary" data-mdb-ripple-init>New Subject</button></a>
<br><br>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Subjects DataTable
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table table-striped table-hover">
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
        {{$subjects->links()}}
    </div>
</div>

        
</x-layout>
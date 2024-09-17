

<x-layout>
    <br>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <b class="mt-3">
                        <center>{{$student->first_name}} {{$student->last_name}}'s grades details</center>
                    </b>

                    <table id="datatablesSimple" class="table table-striped table-hover">

                        <tr>
                            <th>Grade Name</th>
                            <td>{{$grade->grade_name}}</td>
                        </tr>
                        
                        <tr>
                            <th>Grade Order</th>
                            <td>{{$grade->grade_order}}</td>
                        </tr>
                        <tr>
                            <th>Grade Color</th>
                            <td>{{$grade->grade_color}}</td>
                        </tr>
                        <tr>
                            <th>Grade Group</th>
                            <td>{{$grade->grade_group}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

            <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                <b class="mt-3">
                        <center>{{$student->first_name}} {{$student->last_name}}'s subjects details</center>
                </b>
                <table id="datatablesSimple" class="table table-striped table-hover">
                    <tr>
                        <th> Subject Name </th>
                        @foreach($subjects as $subject)
                    <td>
                   
                    
                    <li>
                        <a href="{{url("subjects/$subject->id")}}"> {{$subject->subject_name}} </a>
                    </li>
                    </td>
                    @endforeach
                    </tr>
                  

                    
                </table>
            </div>
            </div>
            </div>
        </div>
          

</x-layout>
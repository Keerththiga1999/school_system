<x-layout>
    <br>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <b class="mt-3">
                        <center>{{$grade->grade_name}}'s student details</center>
                    </b>

                    <table id="datatablesSimple" class="table table-striped table-hover">
                        <tr>
                            <th> First Name </th>
                            <th> Last Name </th>
                        </tr>
                        @foreach($students as $student)
                        <tr>
                            <td><a href="{{url("students/$student->id")}}">{{$student->first_name}}</a> </td>
                            <td>{{$student->last_name}} </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <b class="mt-3">
                        <center>{{$grade->grade_name}} 's subject details</center>
                    </b>
                    <table id="datatablesSimple" class="table table-striped table-hover">
                        <tr>
                            <th> Subject Name </th>
                            <th>Subject Order </th>
                        </tr>
                            @foreach($subjects as $subject)
                            <tr>
                               
                                <td>
                                <li>
                                    <a href="{{url("subjects/$subject->id")}}"> {{$subject->subject_name}} </a>
                                </li>
                                </td>
                                <td>{{$subject->subject_order}}</td>
                            </tr>
                            @endforeach
                        </tr>
                       


                    </table>
                </div>
            </div>
        </div>
    </div>


</x-layout>
<x-layout>
    <br>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <b class="mt-3">
                    <center> {{$subject->subject_name}}'s grade details </center>
                    </b>

                    <table id="datatablesSimple" class="table table-striped table-hover">

                        <tr>
                            <th>Grade Name</th>
                            <th>Grade Group </th>
                            <th>Grade Order </th>
                        </tr>
                        @foreach($grades as $grade)
                        <tr>
                            <td>{{$grade->grade_name}}</td>
                            <td>{{$grade->grade_group}}</td>
                            <td>{{$grade->grade_order}}</td>
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
                    <center> {{$subject->subject_name}}'s grade details </center>
                    </b>
                    <table id="datatablesSimple" class="table table-striped table-hover">
                        <tr>
                            <th> First Name </th>
                            <th>Last Name</th>
                        </tr>
                                @foreach($students as $student)
                                <tr>
                                    <td>
                                <li>
                                    <a href="{{url("students/$student->id")}}"> {{$student->first_name}} </a>
                                </li>
                                    </td>
                                    <td>{{$student->last_name}}</td>
                                @endforeach
                            </td>
                        </tr>



                    </table>
                </div>
            </div>
        </div>
    </div>


</x-layout>
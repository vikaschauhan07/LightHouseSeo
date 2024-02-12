<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Attendance</title>
</head>
<style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        @media (max-width: 600px) {
            th, td {
                display: block;
                width: 100%;
                box-sizing: border-box;
            }
            
            th {
                text-align: center;
            }
        }
        .imred{
            background-color: red !important;
        }
        .imgreen{
            background-color: green !important;
        }
    </style>
<body>
    <h2>Add Attendance</h2>
    @if(session('success'))
    <div id="success-message" style="color: green;">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div id="error-message" style="color: red;">
        {{ session('error') }}
    </div>
    @endif
    <form method="post" action="{{ route('addPersons') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name')
        <p style="color: red;">{{ $message }}</p>
        @enderror

        <label for="department">Department:</label>
        <select id="attendance_status" name="department">
            <option value="" >Select Department</option>
            <option value="PHP" >PHP</option>
            <option value="WordPress">WordPress</option>
            <option value="NodeJs">NodeJs</option>
            <option value="ReactJs">ReactJs</option>
            <option value="IOS">IOS</option>
            <option value="Android">Android</option>
            <option value="Python">Python</option>
            <option value="React Native">React Native</option>
            <option value="Flutter">Flutter</option>
            <option value="Web Design">Web Design</option>
            <option value="SEO">SEO</option>
            <option value="Business Analyst">Business Analyst</option>
            <option value="UI UX">UI UX</option>
            <option value="DevOps">DevOps</option>
        </select>
        @error('department')
        <p style="color: red;">{{ $message }}</p>
        @enderror

        <label for="attendance_status">Attendance Status:</label>
        @error('attendance_status')
        <p style="color: red;">{{ $message }}</p>
        @enderror
        <select id="attendance_status" name="attendance_status">
            <option value="1" @if(old('attendance_status')=='1' ) selected @endif>Present</option>
            <option value="0" @if(old('attendance_status')=='0' ) selected @endif>Absent</option>
        </select>
        <button type="submit">Add New</button>
    </form>

    <a href="{{route('sendmail')}}"><button><h2>Send Mail</h2></button></a>
    <a href="{{route('resetall')}}"> <button><h2>Reset All</h2></button></a>

    <h2>Attandence List</h2>
    <h2>Total Persons: {{$allAttendanceData->count();}}   Present Today:  {{$allAttendanceData->where('attendance_status',1)->count();}}</h2> 

    @if(count($allAttendanceData) > 0)
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Attendance Status</th>
                    <th>Mark Attendance</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allAttendanceData as $attendance)
                    <tr class="@if($attendance->attendance_status == 1) imgreen @else imred @endif">
                        <td>{{ $attendance->name }}</td>
                        <td>{{ $attendance->department }}</td>
                        <td>{{ $attendance->attendance_status == 1 ? 'Present' : 'Absent' }}</td>
                        <td>
                            <button onclick="markAttendance({{ $attendance->id }}, 1)">Present</button>
                            <button onclick="markAttendance({{ $attendance->id }}, 0)">Absent</button>
                        </td>
                        <td><a href="{{ route('delete-person', ['id' => $attendance->id]) }}"><button>Delete</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No attendance records found.</p>
    @endif


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        // Automatically hide success and error messages after 5 seconds using jQuery
        $(document).ready(function() {
            setTimeout(function() {
                $('#success-message, #error-message').fadeOut('slow');
            }, 5000);
        });
    </script>
     <script>
        function markAttendance(attendanceId, status) {
            $.ajax({
                url: "{{route('markAttandence')}}", // Replace with your actual update route
                type: 'GET',
                data: {
                    id: attendanceId,
                    status: status
                },
                success: function(response) {
                    location.reload();
                },
                error: function(error) {
                    console.error(error);
                    // Handle the error
                }
            });
        }
    </script>
</body>

</html>
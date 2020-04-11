<div class="card mb-3">
  <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201810/online-3412473_1920.jpeg?meGHIUut1mybIL3pem8eWqk34osmW3Zi" class="card-img-top" alt="student-details">
  <div class="card-body">
    <h5 class="card-title">Students List</h5>
    <p class="card-text">Here are the full details of the students</p>
  
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col-mt-4">cne</th>
            <th scope="col-mt-4">First Name</th>
            <th scope="col-mt-4">Last Name</th>
            <th scope="col-mt-4">Age</th>
            <th scope="col-mt-4">Speciality</th>
            <th scope="col-mt-4">Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr> 
            <td>{{ $student->cne }}</td>
            <td>{{ $student->firstName }}</td>
            <td>{{ $student->lastName }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->speciality }}</td>
            <td>
                <a href="{{url('/student/edit/'.$student->id) }}" class="btn btn-sm btn-warning"> Edit</a>
                <a href="#" class="btn btn-sm btn-danger"> Delete</a>
            </td>
        </tr>
        @endforeach
        
    </tbody>
    </table>
  </div>
</div>



   
   
               
   

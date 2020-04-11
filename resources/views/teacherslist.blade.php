<div class="card mb-3">
  <img src="https://images.all-free-download.com/images/graphiclarge/back_to_school_background_teacher_chalkboard_icons_6828309.jpg" class="card-img-top" alt="teacher-details">
  <div class="card-body">
    <h5 class="card-title">Teachers List</h5>
    <p class="card-text">Here are the full details of the teachers</p>
  
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col-mt-4">tne</th>
            <th scope="col-mt-4">First Name</th>
            <th scope="col-mt-4">Last Name</th>
            <th scope="col-mt-4">Department</th>
            <th scope="col-mt-4">Speciality</th>
            <th scope="col-mt-4">Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teachers as $teacher)
        <tr> 
            <td>{{ $teacher->tne }}</td>
            <td>{{ $teacher->firstName }}</td>
            <td>{{ $teacher->lastName }}</td>
            <td>{{ $teacher->department }}</td>
            <td>{{ $teacher->speciality }}</td>
            <td>
                <a href="{{url('/teacher/edit/'.$teacher->id) }}" class="btn btn-sm btn-warning"> Edit</a>
                <a href="#" class="btn btn-sm btn-danger"> Delete</a>
            </td>
        </tr>
        @endforeach
        
    </tbody>
    </table>
  </div>
</div>



   
   
               
   

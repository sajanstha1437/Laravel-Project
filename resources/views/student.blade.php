<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title> College Management System</title>
  </head>
  <body>
  @include("stNavbar")
    <div class="row header-container justify-content-center">
        <h1>Student Database</h1>
    </div>

    @if ($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-7">
                        @include("studentslist")
                    </section>
                </div>
            </div>
        </div>

    @elseif($layout == 'create')
        <div class="container-fluid">
            <div class="row">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="http://teibangalore.com/wp-content/uploads/2019/02/ielts-test-training.jpg" class="card-img-top" alt="student-details">
                        <div class="card-body">
                            <h5 class="card-title">Add New Student</h5>
                            <p class="card-text">Enter the full details of new student</p>
                        
                        <form action="{{url('/student/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input name = "cne" type="text" class="form-control" placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name = "firstName" type="text" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input name = "lastName" type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input name = "age" type="text" class="form-control" placeholder="Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input name = "speciality" type="text" class="form-control" placeholder="Enter Speciality">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        
                        </form>
                    </div>
                </section>
            </div>
        </div>

    @elseif($layout == 'show')
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section class="col"></section>
            </div>
        </div>

    @elseif($layout == 'edit')
        <div class="container-fluid">
            <div class="row">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                            <img src="http://teibangalore.com/wp-content/uploads/2019/02/ielts-test-training.jpg" class="card-img-top" alt="student-details">
                            <div class="card-body">
                                <h5 class="card-title">Update details of the Student</h5>
                            


                        <form action="{{url('/student/update/'.$student->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>CNE</label>
                                    <input value = "{{$student->cne}}" name = "cne" type="text" class="form-control" placeholder="Enter cne">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input value = "{{$student->firstName}}" name = "firstName" type="text" class="form-control" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input value = "{{$student->lastName}}" name = "lastName" type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input value = "{{$student->age}}" name = "age" type="text" class="form-control" placeholder="Age">
                                </div>
                                <div class="form-group">
                                    <label>Speciality</label>
                                    <input value = "{{$student->speciality}}" name = "speciality" type="text" class="form-control" placeholder="Enter Speciality">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            
                            </form>
                        </div>
                </section>
            </div>
        </div>

    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
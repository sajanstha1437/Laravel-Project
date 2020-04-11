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
  @include("tchaNavbar")
    <div class="row header-container justify-content-center">
        <h1>Teacher Database</h1>
    </div>

    @if ($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-7">
                        @include("teacherslist")
                    </section>
                </div>
            </div>
        </div>

    @elseif($layout == 'create')
        <div class="container-fluid">
            <div class="row">
                <section class="col-md-7">
                    @include("teacherslist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://media.edutopia.org/styles/responsive_2880px_16x9/s3/masters/2018-01/stock-photo-teacher-helping-his-students-in-classroom-130635701.jpg" class="card-img-top" alt="student-details">
                        <div class="card-body">
                            <h5 class="card-title">Enter the full details of new teacher</h5>
                            
                        
                        <form action="{{url('/teacher/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>TNE</label>
                                <input name = "tne" type="text" class="form-control" placeholder="Enter tne">
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
                                <label>Departmen</label>
                                <input name = "department" type="text" class="form-control" placeholder="Department">
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
                    @include("teacherslist")
                </section>
                <section class="col"></section>
            </div>
        </div>

    @elseif($layout == 'edit')
        <div class="container-fluid">
            <div class="row">
                <section class="col-md-7">
                    @include("teacherslist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                            <img src="https://media.edutopia.org/styles/responsive_2880px_16x9/s3/masters/2018-01/stock-photo-teacher-helping-his-students-in-classroom-130635701.jpg" class="card-img-top" alt="student-details">
                            <div class="card-body">
                                <h5 class="card-title">Update details of the Teacher</h5>
                            


                        <form action="{{url('/teacher/update/'.$teacher->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>TNE</label>
                                    <input value = "{{$teacher->tne}}" name = "tne" type="text" class="form-control" placeholder="Enter tne">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input value = "{{$teacher->firstName}}" name = "firstName" type="text" class="form-control" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input value = "{{$teacher->lastName}}" name = "lastName" type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <input value = "{{$teacher->department}}" name = "department" type="text" class="form-control" placeholder="Department">
                                </div>
                                <div class="form-group">
                                    <label>Speciality</label>
                                    <input value = "{{$teacher->speciality}}" name = "speciality" type="text" class="form-control" placeholder="Enter Speciality">
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
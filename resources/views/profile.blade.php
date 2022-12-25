<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <background-image: linear-gradient(to right, rgba(200, 8,207, 0.75), rgba(28, 70, 184, 0.8)), url(\img\ehc (1).jpg)>
        ;
        <title>Profile</title>
</head>
<style>
body {
    background-image: url('https://cdn.pixabay.com/photo/2017/08/08/07/21/doctors-office-2610509_960_720.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="appointment">take Appointment</a>
                            <a class="dropdown-item" href="#">Send Feedback</a>
                            <a class="dropdown-item" href="hospital">Check Hospitals Near You</a>
                            <a class="dropdown-item" href="labs">Check Laboratories around you</a>
                            <a class="dropdown-item" href="ambulance">Check Ambulance Numbers</a>
                            <div class="dropdown-divider"></div>
                            <!-- <a class="dropdown-item" href="/">hospitals contacts</a> -->
                        </div>
                    </li>
                    <li class="nav-item">
                    <span class="badge badge-danger"><a class="nav-link" href="logout">Logout</a></span>
                         
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" >
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
    </div>


    <h>{{session('name')}}</h>
    <h>Welcome to E-Healthcare Management System</h><br>
    <p>In this system you can easily take appointment for specific disease</p><br>
    <div class="d-flex justify-content-around">
    <div class="card" style="width: 18rem;display:inline-block">
  <img src="https://th.bing.com/th/id/R.1895f3ed5bde83f00593760415a4b707?rik=2n8%2b6vrGmBOJOA&pid=ImgRaw&r=0" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Take Appointment</h5>
    <p class="card-text"></p>
    <a href="appointment" class="btn btn-primary">click here</a>
  </div>
</div>
<div class="card" style="width: 18rem;display:inline-block">
  <img src="https://larryferlazzo.edublogs.org/files/2020/03/feedback_1583238216.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Send Feedback</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">click here</a>
  </div>
</div>
<div class="card" style="width: 18rem;display:inline-block">
  <img src="https://th.bing.com/th/id/OIP.WR1W7tSOsJAjJcmg1FA7cQHaE8?pid=ImgDet&rs=1" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Check Hospitals Near You</h5>
    <p class="card-text"></p>
    <a href="hospital" class="btn btn-primary">click here</a>
  </div>
</div>
    </div>
<br>
<div class="d-flex justify-content-around">
<div class="card" style="width: 18rem;display:inline-block;al">
  <img src="https://www.sciencenewsforstudents.org/wp-content/uploads/2020/09/1030_SS_Chemical.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Check Laboratories Around You</h5>
    <p class="card-text"></p>
    <a href="labs" class="btn btn-primary">click here</a>
  </div>
</div>
<div class="card" style="width: 18rem;display:inline-block">
  <img src="https://th.bing.com/th/id/OIP.5B6FEKgvv_YlJXScuZ1nHAHaES?pid=ImgDet&rs=1" class="card-img-top" alt="...">    
  <div class="card-body">
    <h5 class="card-title">Check Ambulance Numbers</h5>
    <p class="card-text"></p>
    <a href="ambulance" class="btn btn-primary">click here</a>
  </div>
</div>
</div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
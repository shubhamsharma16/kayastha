<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/styling.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
	<title>commudity</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="header">
        <div class="logo">
          <a href="home.html" class="full-block-link"></a>
          <img src="image/logo.png" alt="SABS" style="width: 120px;">   
        </div>
        <!-- Registration form start here -->
        <div class='create-new-sprint-container'style="right: 20px;">
          <button type="button" class="span" data-toggle="modal" data-target="#exampleModal" style="color:#ffd11a; background-color: #000;"><b>REGISTER</b></button>
        </div>&nbsp;
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog ">
                        <div class="modal-content bg-dark">
                            <div class="modal-header ">
                                <h5 class="modal-title" id="exampleModalLabel" style="color:#ffd11a;">Registration Form</h5>
                                <button type="button" class="close bg-warning" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body bg-warning">
                                <form action="#" action="POST">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Enter full name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="check" placeholder="Full Name"><br>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Gender:</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>
                                        Male <input type="radio"value="m" id="gen" name="gen"/>&nbsp;&nbsp;&nbsp;
                                        Female <input type="radio"value="f" id="gen" name="gen"/></b><br><br>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Eneter Mobile Number</label>
                                        <input type="Number" class="form-control" id="exampleInputEmail1" name="check" placeholder="Mobile Number">&nbsp;
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Eneter Email</label>
                                        <input type="Email" class="form-control" id="exampleInputEmail1" name="check" placeholder="Email">&nbsp;
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Enter Profession</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="check" placeholder="Profession">&nbsp;
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Enter Address</label>
                                        <textarea class="form-control" id="exampleInputEmail1" name="check" placeholder="Address"></textarea><br>
                                    </div>
                                    <center>
                                      <button type="submit" class="btn btn-dark" style="color: #ffd11a">Submit</button>
                                    </center>                                   
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Registration form end here -->
            </div>
        </div>
    </div>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
           CATEGORY
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="history.html">SOCIAL WORKER</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="visionn.html">JOURNALISM</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="teamm.html">STARTUP</a></li>
 
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="media.html">ENTREPRENEUR</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="testimonials.html">DOCTOR</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="faqs.html">ENTERTAINMENT</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="resource.html">NURSE</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="resource.html">POLICE</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="resource.html">TRAFFIC POLICE</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="resource.html">WOMEN SELL</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li> 

      <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
           HISTORY
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="history.html">POLITICIAN</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="visionn.html">ACTOR</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="teamm.html">SCIENTIST</a></li>
 
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="media.html">ARTIST</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>

        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
           PRESENT
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="history.html">POLITICIAN</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="visionn.html">ACTOR</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="teamm.html">SCIENTIST</a></li>
 
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="media.html">ARTIST</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>

        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            STATE LEADER
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="child_labour.html">PRESIDENT</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="girl_child.html">VICE PRESIDENT</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="malnutrition.html">TEAM</a></li>
            
            <li><a class="dropdown-item" href="poverty.html">SARPANCH</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="education_illetracy.html">EDUCATION AND ILLITERACY</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="child_marriage.html">CHILD MARRIAGE</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="child_trafficking.html">CHILD TRAFFICKING</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="gender_inequality.html">GENDER INEQUALITY</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            FUNDING SECTION
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="About Child Rights.html">ABOUT CHILD RIGHT</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Statistics Of Children In India.html">STATISTICS ON CHILDREN IN INDIA</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Our Approach.html">OUR APPROACH</a></li>
            <!-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Nature of Support.html">NATURE OF SUPPORT</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="projects_we_support.html">PROJECTS WE SUPPORT</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="stories_of_hope.html">STORIES OF HOPE</a></li> -->
          </ul>
        </li> 

        <li class="nav-item px-2">
          <a class="nav-link  text-white" href="message.html">SOCIAL WELFARE</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link  text-white" href="contactus.html">VOLUNTEER</a>
        </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>

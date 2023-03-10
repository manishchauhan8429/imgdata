<?php
session_start();
echo $_SESSION['username'];
?>
<!DOCTYPE html>
<head>
<title>User profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/profile.js"></script>
</dead>
  <body style="background:FCD0CF">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
          Mr.manish
        </a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-sign-out" style="font-size:18px">Logout</i>
            </a>
          </li>
        </ul>
    </nav>
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 p-5 border">
          <div class="w-100 bg-white rounded-lg d-flex flex-column shadow-lg text-center justify-content-center align-items-center" style="height:250px">
              <i class="fa fa-folder-open upload-icon" style="font-size:100px"></i>
              <h4>UPLOAD FILES</h4>
              <span>FREE SPACE : 10MB</space>
              <div class="progress w-100 my-2" style="height:5px">
                <div class="progress-bar progress-bar animated progress-bar-striped w-50">
                </div>
              </div>
              <span>50%</span>
              <i class="fa fa-pause-circle "></i>
              <i class="fa fa-times-circle"></i>
          </div>
        </div>
        <!--second row -->
        <div class="col-md-6 p-5 border"></div>
        <div class="col-md-3 p-5 border"></div>
      </div>
    </div>
  
  </body>
</html>
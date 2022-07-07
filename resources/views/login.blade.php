<html>
<head>
 <style type="text/css">body{
  padding-top: 15vh;  
}
/* set form background colour*/
form{
 background: #fff;
   box-shadow: 0 5px 30px black;
}
/* set padding and size of th form */
.form-container{
  border-radius: 10px;
  padding: 30px;
}
.btn {
  background-color: #800080;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

form-group1 {
  /* The image used */
  background-image: url("w.jpg");

  /* Control the height of the image */
  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-size: cover;
 width:auto;
height:100px;
}
.bg {
  /* The image used */

  /* Full height */
  height: 200%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
</style>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="css/login_style.css">
</head>
 
<body  class="bg"  background="5553400.jpg">
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Login form creation starts-->
  <section class="container-fluid">
    <!-- row and justify-content-center class is used to place the form in center -->
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-4">
        <form class="form-container">
                      <div class="form-group1">
</div>
            <div class="form-group"></div>
                        <h4 class="text-center font-weight-bold"> Register form </h4>
          <label for="InputEmail1">First name</label>
           <input type="email" class="form-control" id="InputFIRSTNAME1" aria-describeby="emailHelp" placeholder="Enter first name">
        </div>
        <div class="form-group">
          <label for="InputEmail1">Last name</label>

           <input type="email" class="form-control" id="InputLASTNAME1" aria-describeby="emailHelp" placeholder="Enter last name">
        </div>
        <div class="form-group">
          <label for="InputEmail1">mobile phone</label>
           <input type="tel" class="form-control" id="InputMOBILEPHONE" aria-describeby="emailHelp" placeholder="Enter mobilephone">
 
        </div>
        <div class="form-group">
          <label for="InputEmail1">Email Address</label>
           <input type="email" class="form-control" id="InputEmail1" aria-describeby="emailHelp" placeholder="Enter email">
        </div>
       
        <div class="form-group">
          <label for="InputPassword1">Password</label>
          <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn">Submit</button>
        <div class="form-footer">
          <p> If you  have an account? <a href="#">Sign IN</a></p>
          
        </div>
        </form>
      </section>
    </section>
  </section>
<!-- Login form creation ends -->
</body>
</html>
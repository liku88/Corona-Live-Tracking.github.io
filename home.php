<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="shorcut icon" type="image/jfif" href="favicon.jfif">

	<title>Corona Live Tracker</title>

	<!--  -->

	<style>

	</style>

</head>

<body onload="fetchdata()">

	<div class="container">
	  <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">COVID-19</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
	/*navigation bar*/
      <ul class="nav navbar-nav navbar-right">
       <li><a href="#home">HOME</a></li>
        <li><a href="#live">LIVE UPDATE</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#symptoms">SYMPTOMS</a></li>
        <li><a href="#prevention">PREVENTION</a></li>
        <li><a href="#contact">CONTACT US</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
   <a name = "home"></a>
    <div class="row">
       <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2 ">
           <img src="images/coronalogo1.jpg" alt="coronalogo" height="400" width="400" class="img-circle img-responsive imgcus animated  fadeInLeft">
       </div>
        

    <div class="col-lg-7 col-md-7 col-12 mygridcus2">
       <p class="animated  rollIn mycus1">" <span class="tri1">Stay </span><span class="tri2">at </span><span class="tri3">home </span><span class="tri1">and </span><span class="tri2" >stay </span><span class="tri3">safe</span> <span class="tri2">and</span> <br> <span class="tri1">let's </span><span class="tri2">fight</span> <span class="tri3">against </span><span class="spancorona">corona</span> <span class="tri1">virus.</span>"</p>
        
    </div> 
        
    </div>
     <main><a name="live"></a>
    <section class="live">
      <div class="page-header">
     <h3 class="headingcus"><span class="tri1">CORONA</span>  <span class="tri2">LIVE</span> <span class="tri3"> UPDATES</span></h3>
      </div>
    /*table added*/
        <div class="table-responsive">
            <table class="table table-bordered" id="tableid">
             <th class="th-center">Country</th>
             <th>Total Confirmed</th>
             <th>Total Deaths</th>
             <th>Total Recovered</th>
             <th>New Confirmed</th>
             <th>New Deaths</th>
             <th>New Recovered</th>
             </table>
	 </div>
    </section>
       <a name="about"></a>
       <section class="about">
           <div class="row aboutsection">
            <div class="page-header">
     <h3 class="headingcus">ABOUT CORONA</h3>
      </div>
  <div class="col-md-6 aboutpic">
     <img src="images/about1.jpg" alt="coronalogo" height="500" width="500" class="img-responsive  imgcus">
  </div>
  <div class="col-md-6 abouttext">
  <p class="aboutpara">
      Coronavirus disease <span class="spanpara">(COVID-19)</span> is an infectious disease caused by a newly discovered coronavirus.
      Most people who fall sick with <span class="spanpara">(COVID-19)</span> will experience mild to moderate symptoms and recover without special treatment.
  </p>
  
  </div>
  </div>
       </section>
       <a name = "symptoms"></a>
      <section class="symptoms">
         <div class="page-header">
     <h3 class="headingcus"><span class="tri1">SYMPTOMS</span> <span class="tri2">OF </span> <span class="tri3">CORONA</span> </h3>
      </div>
          <div class="row firstcol">
  <div class="col-lg-4 firstsy">
      <img src="images/cough.jpg" alt="coronalogo" height="400" width="400" class="img-circle img-responsive imgcus"> <br>
       <label class="symla" >COUGH</label>
     

  </div>
  
  <div class="col-lg-4">
      <img src="images/coldnose.png" alt="coronalogo" height="400" width="410" class="img-circle img-responsive imgcus"> <br>
       <label class="symla2" >NASAL CONGESTION</label>
  </div>
  <div class="col-lg-4">
         <img src="images/fever.jpg" alt="coronalogo" height="400" width="320" class="img-circle img-responsive imgcus"> <br>
       <label class="symla3" >FEVER</label>
  </div>
 
</div>
       <div class="row">
  <div class="col-lg-4">
       <img src="images/coldnew.jfif" alt="coronalogo" height="400" width="400" class="img-circle img-responsive imgcus"> <br>
       <label class="symla" >COLD</label>
  </div>
  <div class="col-lg-4">
      <img src="images/tired2.png" alt="coronalogo" height="400" width="400" class="img-circle img-responsive imgcusi"> <br>
       <label class="symla2" >TIREDNESS</label>
  </div>
  <div class="col-lg-4">
       <img src="images/fthimage.jpg" alt="coronalogo" height="400" width="400" class="img-circle img-responsive imgcus"> <br>
       <label class="symla3" >DIFICULTY BREATHING</label>
  </div>
 
</div>
        
      </section> 
               <a name = "prevention"></a>
      <section class="symptoms">
         <div class="page-header">
     <h3 class="headingcus"><span class="tri1">PREVENTIONS</span> <span class="tri2">AGAINST</span> <span class="tri3">CORONA</span> </h3>
      </div>
          <div class="row firstcol">
  <div class="col-lg-4 firstsy">
      <img src="images/wash3.png" alt="coronalogo" height="400" width="400" class="img-circle img-responsive imgcus"> <br>
       <label class="symla" >WASH YOUR HAND</label>
     

  </div>
  
  <div class="col-lg-4">
      <img src="images/cover2.jfif" alt="coronalogo" height="400" width="400" class="img-circle img-responsive imgcus mangal"> <br>
       <label class="symla2" >COVER YOUR NOSE AND MOUTH</label>
  </div>
  <div class="col-lg-4">
         <img src="images/closecontact.png" alt="coronalogo" height="400" width="320" class="img-circle img-responsive imgcus mangal"> <br>
       <label class="symla3" >AVOID CLOSE CONTACT</label>
  </div>
 
</div>
       <div class="row">
  <div class="col-lg-4">
       <img src="images/stayathome.png" alt="coronalogo" height="400" width="400" class="img-circle img-responsive imgcus"> <br>
       <label class="symla" >STAY AT HOME</label>
  </div>
  <div class="col-lg-4">
      <img src="images/tv.jpg" alt="coronalogo" height="400" width="400" class="img-circle img-responsive imgcusi"> <br>
       <label class="symla2" >STAY INFORMED</label>
  </div>
  <div class="col-lg-4">
       <img src="images/hospital.png" alt="coronalogo" height="400" width="400" class="img-responsive imgcus"> <br>
       <label class="symla3" >CONTACT TO DOCTORS</label>
  </div>
 
</div>
        
      </section> 
        <a name = "contact"></a>
        <section class="contactus">
     <h3 class="headingcus"><span class="tri1">WANT</span> <span class="tri2">TO</span> <span class="tri3">CONTACT</span> </h3>
     <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1"><span class="tri1">FULLNAME</span></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="fullname" placeholder="FULLNAME" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><span class="tri2">EMAIL ADDRESS</span></label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="EMAIL-ID" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><span class="tri3">MOBILE NUMBER</span></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="mobile" placeholder="MOBILE-NUMBER" required>
  </div>
  <div class="form-group">
  <label class="con" >SELECT SYMPTOMS</label> <br>
  <input type="checkbox" name="symp[]" id="" value="cold">
  <label class="tri1" for="">COLD</label>
  <input type="checkbox" name="symp[]" id="" value="fever">
  <label for="">FEVER</label>
  <input type="checkbox" name="symp[]" id="" value="breath-issue">
  <label class="tri2" for="">DIFFICULTY IN BREATH</label>
      <input type="checkbox" name="symp[]" id="" value = "weak">
  <label class="tri3" for="">FEELING WEAK</label>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><span class="con">DESCRIBE HOW YOU ARE FEELING</span></label>
    <textarea class="form-control" name="message" rows="3"></textarea>
    
  </div>
  
  
  <button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
      
	    
	    

	
        </section>
        <footer class="footer">
            <h3><span class="tri1" >Designed</span><span> BY</span> <span class="tri3">MANGALDEEP</span></h3>
        </footer>

        </main>

	</div>
    <script src="home.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $sym = $_POST['symp'];
    $msg = $_POST['message'];
    $check = '';
    
    foreach($sym as $checkk){
        $check .= $checkk. ",";
    }
    $insertquery = "insert into coronasym(fullname, email, mobile, symptomps, message) values ('$fullname','$email','$mobile','$check','$msg')";
    
    $query = mysqli_query($con, $insertquery);
    
    
}


    





?>

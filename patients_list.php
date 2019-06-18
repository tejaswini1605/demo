<?php
include("header.php");
// include("footer.php");
?>

<div class="">
  <div class="card col-md-10" style="padding:25px;">
<div class="">
  <h2>Patient List</h2>
  <p>View all Patients to whom Form Request was Sent" & click the eye icon to view their files in detail </p>
   
    <hr/>

    <div class="form-inline">
    <label for="Full Name" class="col-md-2">Full Name:</label>
    <input type="text" class="form-control col-md-3" id="Full Name" placeholder="Full Name" name="Full Name">
    <label for="email" class="col-md-2">Email:</label>
    <input type="email" class="form-control col-md-3" id="email" placeholder="Email" name="email">

    <input type="submit" name="search"  class="btn btn-default btn-sm col-md-1" style="margin-left: 1%;background:#47e694;color:white;" value="search">
    
   <!--  <button type="submit" class="btn btn-primary">Submit</button> -->
  </div>

          <hr/>
<br>
                  
           
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>View Details</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>full name</td>
        <td>some@gamil.com</td>

      
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
       
      </tr>
      
       <tr>
        <td>2</td>
        <td>full name</td>
        <td>some@gamil.com</td>

      
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
       
      </tr>
       <tr>
        <td>3</td>
        <td>full name</td>
        <td>some@gamil.com</td>

      
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
       
      </tr> 
      <tr>
        <td>4</td>
        <td>full name</td>
        <td>some@gamil.com</td>

      
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
       
      </tr> 
      <tr>
        <td>5</td>
        <td>full name</td>
        <td>some@gamil.com</td>

      
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
       
      </tr> 
      <tr>
        <td>6</td>
        <td>full name</td>
        <td>some@gamil.com</td>

      
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
       
      </tr>
    </tbody>
  </table>
</div>
    </div>

</div>
<?php

include("footer.php")?>
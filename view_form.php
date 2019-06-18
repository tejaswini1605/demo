<?php
include("header.php");
?>

<div class="">
  <div class="card col-md-10 " style="padding:25px;">
<div class="container ">
  <h2 class="">View Form Entries</h2>
  <p>Select the form below to view all form entries list sorted by patients</p>
  <hr/>


         <div class="form-inline " style="margin:2% auto;"> 
            <label class="col-md-2">Select Form :</label> 
                    <select class="col-md-6 form-control">
                    <option value="#"  >Adult Medical History form</option>
                    <option value="#" >Child Medical History form</option>
                    <option value="#" >HIPAA Consent</option>
                    <option value="#" >Financial Policy form</option>
                    <option value="#" >Insurance form</option>
                    </select>

           </div>
  <table class="table">
    <thead>
      <tr>
        <th>S.no</th>
        
        <Th>Full Name</Th>
        <th>Mobile No</th>
        <th>E-mail</th>
        <th>View </th>
        <th>Export</th>
        <th>Go To Patients</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>some</td>
        <td>8975201520</td>
        <td>abc@gmail.com</td>
    
    
   
          <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
       <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">PDF&nbsp;<i class="fa fa-file"></i> </button></a></td>
        <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">Go To Patients&nbsp;<i class="fa fa-user"></i> </button></a></td>
       
      </tr>
      
       <tr>
        <td>1</td>
        <td>some</td>
        
        <td>8975201520</td>
        <td>abc@gmail.com</td>
    
    
   
          <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
       <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">PDF&nbsp;<i class="fa fa-file"></i> </button></a></td>
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">Go To Patients&nbsp;<i class="fa fa-user"></i> </button></a></td>
       
      </tr>
       <tr>
        <td>1</td>
        <td>some</td>
        
        <td>8975201520</td>
        <td>abc@gmail.com</td>
    
    
   
          <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
       <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">PDF&nbsp;<i class="fa fa-file"></i> </button></a></td>
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">Go To Patients&nbsp;<i class="fa fa-user"></i> </button></a></td>
       
      </tr>
       <tr>
        <td>1</td>
        <td>some</td>
        
        <td>8975201520</td>
        <td>abc@gmail.com</td>
    
   
          <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
       <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">PDF&nbsp;<i class="fa fa-file"></i> </button></a></td>
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">Go To Patients&nbsp;<i class="fa fa-user"></i> </button></a></td>
       
      </tr>
    </tbody>
  </table>
  
</div>


</div>

</div>

<?php
include("footer.php");
?>
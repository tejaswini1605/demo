<?php
include("header.php");
?>

<div class="">
  <div class="card col-md-10">
<div class="container" style="padding:25px;">
  <h2 class="">Patient's File</h2>
  <p> Patient File : All relevant details related to the individual patients</p>
  <hr/>

                           <div class="form-group row">
                              <label for="pat_name" class="col-sm-2 col-form-label">Patient Name :</label>
                              <div class="col-sm-6">
                                
                                 <input  type="text" placeholder="Full Name" name="pat_name" class="form-control  " required="required">
                              </div>
                            </div>
                  


                            <div class="form-group row">
                              <label for="pat_email" class="col-sm-2 col-form-label">Patient Email :</label>
                              <div class="col-sm-6">
                                
                                 <input  type="email" placeholder="Email Address" name="pat_email" class="form-control  " required="required">
                              </div>
                            </div>
               

                            <div class="form-group row">
                              <label for="pat_mobile" class="col-sm-2 col-form-label">Mobile Number :</label>
                              <div class="col-sm-6">
                                
                                 <input  type="tel" placeholder="Mobile Number" name="pat_mobile" class="form-control  " required="required">
                              </div>
                            </div> 


                   
                   
             <h2 class="">Reports</h2>
             <br>
           
  <table class="table">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Forms</th>
        <th>Status</th>
        <th>View </th>
        <th>Export</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Adult</td>
        <td>Received + Timestamp</td>
    
   
          <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
       <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">PDF&nbsp;<i class="fa fa-file"></i> </button></a></td>
       
      </tr>
      
      <tr>
        <td>2</td>
        <td>Child</td>
      <td>Not Applicable</td>
    
     <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
         <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">PDF&nbsp;<i class="fa fa-file"></i> </button></a></td>
       
      </tr>
      <tr>
        <td>3</td>
        <td>HIPA</td>
    <td>Received + Timestamp</td>
     

        <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
         <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">PDF&nbsp;<i class="fa fa-file"></i> </button></a></td>
       
      </tr>
      <tr>
        <td>4</td>
        <td>Finance</td>
         <td>Pending</td>
     

      <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
         <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">PDF&nbsp;<i class="fa fa-file"></i> </button></a></td>
       
      </tr>
      <tr>
        <td>5</td>
        <td>Insurance</td>
     <td>Received</td>
     

      <td><a href="#"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">View&nbsp;<i class="fa fa-eye"></i> </button></a></td>
         <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " style="background:#e0e0e0; ">PDF&nbsp;<i class="fa fa-file"></i> </button></a></td>
       
      </tr>
    </tbody>
  </table>
  
  <br>
  <br>
  <h2 class="">Communication</h2>
  <br>
  <div class="card" style="padding:20px;">
   <div class="col-md-12 mb-3"  >
                   
                    <label for="" class=" form-group">Request To Fill The forms</label>
                    <div>
                              <div class="form-check form-check-inline">
                                          <label class="form-check-label">
                                            <input name="" type="checkbox" class="form-check-input" value="">Adult 
                                          </label>
                                        </div>
                                         <div class="form-check form-check-inline">
                                          <label class="form-check-label">
                                            <input name="" type="checkbox" class="form-check-input" value="">Child 
                                          </label>
                                        </div>
                                      
                                         <div class="form-check form-check-inline">
                                          <label class="form-check-label">
                                            <input name="" type="checkbox" class="form-check-input" value="">HIPA
                                          </label>
                                        </div>
                                         <div class="form-check form-check-inline">
                                          <label class="form-check-label">
                                            <input name="" type="checkbox" class="form-check-input" value=""> Finance
                                          </label>
                                        </div>
                                         <div class="form-check form-check-inline">
                                          <label class="form-check-label">
                                            <input name="" type="checkbox" class="form-check-input" value="">Insurance
                                          </label>
                                        </div>
                                      </div>
     </div>
                 <div class="col-md-12 form-group" >
                    <label for="message">Message</label>
                    <textarea class="form-control" name="" type="message" cols="" rows="4"></textarea>
                    </div> 
                    <div class="form-inline" style="text-align:center;">
                    <input type="submit" name="snd_mail"  class="btn btn-default col-md-5 form-control" style="margin: 1%;background:#00E676;color:white;" value="Send Email">
                    
                     <input type="submit" name="snd_text"  class="btn btn-default col-md-6 form-control" style="margin: 1%;background:#00E676;color:white;" value="Send Text">
                   </div>

</div>


</div>
    </div>
</div>
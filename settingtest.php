<?php 
include("header.php");

?>

<div class="container-fluid setting">
    <h1>Settings</h1>
  <hr>
  <div class="row ">
                           <!-- ..............left side  tabs.................... -->
    <div class=" col-md-3" >
        <ul class="nav nav-pills flex-column" id="myTab" role="tablist" style="width:200px!important">
  <li class="nav-item">
    <a class="nav-link active" id="my_profile-tab" data-toggle="tab" href="#my_profile" role="tab" aria-controls="my_profile" aria-selected="true">My Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="false">Form Preferences</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false">Payment Preferences</a>
  </li>

   <li class="nav-item">
    <a class="nav-link" id="estatement-tab" data-toggle="tab" href="#estatement" role="tab" aria-controls="estatement" aria-selected="false">eStatement Preferences</a>
  </li>
</ul>
    </div>

     <!-- ...................end of left side tabs ............... -->
  <!-- .................right  side content............................... -->
        <div class="col-md-9">
      <div class="tab-content" id="myTabContent">
        <!--   .............My profile ................... -->
  <div class="tab-pane fade show active col-md-7" id="my_profile" role="tabpanel" aria-labelledby="my_profile-tab">
                                   
                                 <div class="card">

              
                            <div class="card-header d-flex align-items-center text-center">
                              <h4 class="card-title myprofile"> My Profie  </h4>
                             <a href="#"> <button type="button" class="btn btn-default btn-sm " style=" "> Edit <i class="fa fa-edit"></i> </button></a>
                            </div>
                            <div class="card-body">
                  
                      <form class="forms-sample">
                              <div class="form-group row">
                                <label for="provider_npi" class="col-sm-4 col-form-label">NPI :</label>
                                <div class="col-sm-8">
                                 
                                   <input  type="text" placeholder=" Enter NPI" name="provider_npi" class="form-control  " required="required">
                                </div>
                              </div>
                            <div class="form-group row">
                              <label for="first_name" class="col-sm-4 col-form-label">First Name :</label>
                              <div class="col-sm-8">
                                
                                 <input  type="text" placeholder="Enter First Name" name="first_name" class="form-control  " required="required">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="last_name" class="col-sm-4 col-form-label">Last Name :</label>
                              <div class="col-sm-8">
                                <input  type="text" placeholder="Enter Last Name" name="last_name" class="form-control  " required="required">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="email" class="col-sm-4 col-form-label">Email :</label>
                              <div class="col-sm-8">
                                <input  type="email" placeholder="Enter Email" name="email" class="form-control" required="required">
                              </div>
                            </div>
                          <div class="form-group row">
                            <label for="phone_nm" class="col-sm-4 col-form-label">Phone Number :</label>
                            <div class="col-sm-8">
                              <input  type="tel" placeholder="Phone Number" class="form-control" name="phone_nm" required="required" >
                            </div>
                          </div>

                            <div class="form-group row">
                              <label for="address" class="col-sm-4 col-form-label">Address :</label>
                              <div class="col-sm-8">
                               <textarea class="form-control" name="address" type="text" cols="" rows="4"></textarea>
                              </div>
                            </div>
                   
                              <div class="form-group text-center" >       
                                <input type="submit" value="Save" name="submit" class="btn btn-default form-control" style="background:#00e676;color:white;">
                              </div>
                  </form>
                </div>
            


            </div>


          
  </div>

   <!--  ......................end of may profile........................... -->

    <!--  ...................... form preferences ........................... -->
  <div class="tab-pane fade " id="form" role="tabpanel" aria-labelledby="form-tab">
   <div class="card" style="text-align:left;">
                <div class="card-header d-flex align-items-center">
                  <h4>Form Preferences</h4>
                 
                </div>
                <div class="card-body">


                  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#text_campaign">Text Campaign</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#email_campaign">Email Campaign</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#notification">Notification</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#campaign_default">Campaign Defaults</a>
    </li>
  </ul>


  <div class="tab-content">
    <div id="text_campaign" class="tab-pane active">
     



<!-- ...................................... txt code start from hear....................................... -->
     
                 <div class="card-body">
                  <h4>Text Message Campaign</h4>
                  <hr>
                  <div class="card-deck" >
                     <div class="col-md-3">

                     
                    <div class="row" style="padding:5px;border:2px solid #f4f5f7">
                     <h6 class=""><small>Initial Request<br>(Sent As soon as possible)</small></p></h6>
                                              <button type="button" class="btn btn-danger btn-sm ">Delete </button>&nbsp;&nbsp;
                                              <button type="button" class="btn btn-danger btn-sm ">View </button>


                     </div>
     
                   
                     <br>

                      <div class="row" style="padding:5px;border:2px solid #f4f5f7">
                    <h6 class=""><small>Follow-up Request <br>(Sent in 24hrs)</small></p></h6>
                                              <button type="button" class="btn btn-danger btn-sm ">Delete </button>&nbsp;&nbsp;
                                              <button type="button" class="btn btn-danger btn-sm ">View </button>


                     </div>
                     <br>
                      <div class="row" style="padding:5px;border:2px solid #f4f5f7">
                                   <h6 class=""> <small>Final Request <br>(  Sent in 3days  )</small></p></h6>
                                   <br>
                                              <button type="button" class="btn btn-danger btn-sm ">Delete </button>&nbsp;&nbsp;
                                              <button type="button" class="btn btn-danger btn-sm ">View </button>


                     </div>
                    
                     <br>
                    <div class="row" style="float:left!important">
                       <button type="button" class="btn btn-default btn-sm" style="background: #a6aebc;color:#fff;float:left!important"><i class="fa fa-plus" style="color:#fff;"></i> Add Text Message</button>
                    </div>
                                            
                     </div>
                     <div class="col-md-9">
                       <div class="card-body " style="background-color: #f4f5f7;margin:0px">
                                    <p>Add An Image(Max 2 MB)</p>


                                                    <form action="" method="post" style="background: #fff;padding-top:10px;padding-right: 5px;">

                                                    <div class=" mb-3">
                                          
                                                   <label class="col-md-4 form-group "style="float:left!important;" >Frequency :</label> 
                                                    <select class="col-md-8 form-control">
                                                    <option value="#" >Immediately</option>
                                                    <option value="#" >Within 24hrs</option>
                                                    <option value="#" >2 Days</option>
                                                    <option value="#" >3 Days</option>
                                                    <option value="#" >4 Days</option>
                                                    <option value="#" >5 Days</option>
                                                    <option value="#" >6 Days</option>
                                                    <option value="#" >7 Days</option>
                                                    </select>
                                                    </div>
                                                    
                                                    
                                                    <div class="mb-3">
                                                    <label class=" col-md-4 form-group" for="phone" style="float:left!important;">From :</label>
                                                    <input class="col-md-8 form-control" type="tel" placeholder="(235)-456-4568" name="phone" readonly>
                                                    </div>
                                                    
                                                    <br>
                                                    <div>
                                                    <label   class=" col-md-4 form-group" style="float:left!important;"  for="msg">Compose Message: </label>
                                                    <textarea name="msg" class="col-md-8 form-control" rows="4" cols="" placeholder="" name=""></textarea>
                                                    </div>
                                                    
                                                    <br>
                                                    <div class="row" style="background-color: #f4f5f7;padding:5px">
                                                      <div class="col-sm-10">
                                                        <p><b style="color:#a6aebc;font-size:13px">Required otp-out will be added :</b>
                                                        <br>Text STOP to stop</p>
                                                      </div>
                                                      <div class="col-sm-2">
                                                    <button type="button" class="btn btn-default btn-sm pull-right" style="background:#a6aebc;color:#fff;float:right!important"> Save Template</button>
                                                  </div>
                                                  </div>
                                                    </form>
                                  
                                  </div>
                     </div>
                








                </div>

                
                </div>
              


              <!-- ...................................... txt code end....................................... -->
    
    </div>
    <div id="email_campaign" class=" tab-pane fade"><br>
       <!-- ...................................... Email code start from hear....................................... -->

     <!--  <h4>Email Campaign</h4> -->

 <div class="card-body">
                  <h4>Email Campaign</h4>
                  <hr>
     
       

    
       <div class="card-deck">

    <div class="col-md-3">
                      <div class="row" style="padding:5px;border:2px solid #f4f5f7">
                     <h6 class=""> <small>Initial Request <br>(Sent As soon as possible)</small></p></h6>
                                              <button type="button" class="btn btn-danger btn-sm ">Remove </button>&nbsp;&nbsp;
                                              <button type="button" class="btn btn-danger btn-sm ">View </button>
                      </div>
     
                   
                     <br>

                      <div class="row" style="padding:5px;border:2px solid #f4f5f7">
                    <h6  class=""><small> Follow-up Request <br>(Sent in 24hrs)</small></p></h6>
                                              <button type="button" class="btn btn-danger btn-sm ">Remove </button>&nbsp;&nbsp;
                                              <button type="button" class="btn btn-danger btn-sm ">View </button>


                     </div>
                     <br>
                      <div class="row" style="padding:5px;border:2px solid #f4f5f7">
                                   <h6  class=""> <small>Final Request <br>(  Sent in 3days  )</small></p></h6>
                                              <button type="button" class="btn btn-danger btn-sm ">Remove </button>&nbsp;&nbsp;
                                              <button type="button" class="btn btn-danger btn-sm ">View </button>


                     </div>
                    
                     <br>
                    <div class="row">
                       <button type="button" style="background: #a6aebc;color:#fff;text-align:" class="btn btn-default btn-sm" ><i class="fa fa-plus" style="color:#fff;"></i> Add Email Template</button>
                    </div>
                    
                  </div>

     
    


                                        <div class="col-md-6" style="margin-right:0px!important">
                                          <form action="" method="post">

                                      <div style="border:2px solid lightgray;padding:8px">

                                                     <div class=" mb-3">
                                                    <label class="form-group col-md-5 " style="float:left;">Sent :&nbsp;&nbsp;</label> 
                                                    <select class="col-md-7 form-control">
                                                    <option value="#" >Immediately</option>
                                                    <option value="#" >Within 24hrs</option>
                                                    <option value="#" >2 Days</option>
                                                    <option value="#" >3 Days</option>
                                                    <option value="#" >4 Days</option>
                                                    <option value="#" >5 Days</option>
                                                    <option value="#" >6 Days</option>
                                                    <option value="#" >7 Days</option>
                                                    </select>
                                                    </div>
                                                   
                                                    <div class="mb-3">
                                          
                                                   <label class="col-md-5 form-group "style="float:left!important;" >Sent on Weekends :</label> 
                                                    <select class="col-md-7 form-control">
                                                    <option value="#" >Yes</option>
                                                    <option value="#" >No</option>
                                                    </select>
                                                    </div>


                                                    
                                                    
                                                    <div class="mb-3">
                                                    <label class="col-md-5 form-group" for="time" style="float:left!important;">Send Time :</label> 
                                                    <input type="time" name="time" class="col-md-7 form-control" required>
                                                    </div>
                                                    
                                                    <div class=" mb-3">
                                                    <label class="col-md-5 form-group" for="sub" style="float:left!important;">Subject :&nbsp;&nbsp;</label> 
                                                    <input type="text" name="sub" class="col-md-7 form-control" placeholder="subject" required>
                                                    </div>
                                                    

                           

                    
                   

                                                        <div >

                  
                      <img src="images/editor-wysiwyg.png" alt="editor-wysiwyg" style="height:200px;width:250px" >
                    </div>
                     <button type="button" class="btn btn-default btn-sm " style="background: #a6aebc;color:#fff;"> Save Email Template</button>

                     </div>
                   </form>

      
    </div>

                     <div class="col-md-3" style="" >
      


                                                  <div class=" " style="background-color: #f4f5f7;padding:10px">
                                                  <p>Mail Settings</p>


                                                  <div class="form-inline">
                                                  <label class="">From Name :</label>
                                                  <input type="text" class="form-control col-md-12"  name="fm_name" placeholder="Display Name" >
                                                  </div>
                                                  <br>
                                                  <div class=" form-inline">
                                                  <label class="">From Email :</label>
                                                  <input type="email" class="form-control col-md-12"  name="fm_email" placeholder="name@yourdomain.com" readonly >
                                                  </div>
                                                  <br>
                                                  <div class=" form-inline">
                                                  <label class="">Reply to: </label>
                                                  <input type="email" class="form-control col-md-12"  name="reply_to" placeholder="name@yourdomain.com" >
                                                  </div>
                                                  <br>
                                                  </div>
                     


          </div> 


</div>

                </div> 

                <!-- ...................................... email code end....................................... -->
    </div>
    <div id="notification" class=" tab-pane fade"><br>
      <h3>Notification</h3>

      <div class="container">
  <p class="row">How would  you like to get notified when ever patient fills up a  form ?</p>
 
  <form action="">
    <div class="form-check-inline row col-md-3">
      <label class="form-check-label" for="email">
        <input type="radio" class="form-check-input" id="email" name="email" value="email" checked>Email
      </label>
    </div>
    <div class="form-check-inline row col-md-3">
      <label class="form-check-label" for="email_pdf">
        <input type="radio" class="form-check-input" id="email_pdf" name="email_pdf" value="email_pdf">Email & Pdf
      </label>
    </div>
   <div class="row" style="margin-top:10px">
    <button type="submit" class="btn btn-default btn-sm" style="background:#a6aebc;color:#fff">Submit</button>
  </div>
  </form>
</div>
    
    </div>
    <div id="campaign_default" class=" tab-pane fade"><br>
      <h3>Campaign Defaults</h3>
        <div class="container">
  <p class="row">Please select the  prefered method you want to send the form fill up request to each patient once added in to the system</p>
 
  <form action="">
    <div class="form-check-inline row col-md-3">
      <label class="form-check-label" for="email">
        <input type="radio" class="form-check-input" id="email" name="email" value="email" checked>Email
      </label>
    </div>
    <div class="form-check-inline row col-md-3">
      <label class="form-check-label" for="SMS">
        <input type="radio" class="form-check-input" id="SMS" name="SMS" value="SMS">SMS
      </label>
    </div>
    <div class="form-check-inline row col-md-3">
      <label class="form-check-label" for="email_&_sms">
        <input type="radio" class="form-check-input" id="email_&_sms" name="email_&_sms" value="email_&_sms">Email & SMS
      </label>
    </div>
   <div class="row" style="margin-top:10px">
    <button type="submit" class="btn btn-default btn-sm" style="background:#a6aebc;color:#fff">Submit</button>
  </div>
  </form>
</div>
    </div>
  </div>













                
                       </div>
                </div>
     </div>
 <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                          <h2>Payment Preferences</h2>
                          ....................................................
                          
      </div>

  


   <div class="tab-pane fade" id="estatement" role="tabpanel" aria-labelledby="estatement-tab">
   <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>eStatement Preferences</h4>
                 
                </div>
                <div class="card-body">


                  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#text_campaign_estatement">Text Campaign</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#email_campaign_estatement">Email Campaign</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#notification_estatement">Notification</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#campaign_default_estatement">Campaign Defaults</a>
    </li>
  </ul>


  <div class="tab-content">
    <div id="text_campaign_estatement" class="tab-pane active">
     



<!-- ...................................... txt code start from hear....................................... -->
     
                 <div class="card-body">
                  <h4>Text Message Campaign</h4>
                  <hr>
                  <div class="card-deck" >
                     <div class="col-md-3">

                     
                    <div class="row" style="padding:5px;border:2px solid #f4f5f7">
                     <h6 class=""><small>Initial Request<br>(Sent As soon as possible)</small></p></h6>
                                              <button type="button" class="btn btn-danger btn-sm ">Delete </button>&nbsp;&nbsp;
                                              <button type="button" class="btn btn-danger btn-sm ">View </button>


                     </div>
     
                   
                     <br>

                      <div class="row" style="padding:5px;border:2px solid #f4f5f7">
                    <h6 class=""><small>Follow-up Request <br>(Sent in 24hrs)</small></p></h6>
                                              <button type="button" class="btn btn-danger btn-sm ">Delete </button>&nbsp;&nbsp;
                                              <button type="button" class="btn btn-danger btn-sm ">View </button>


                     </div>
                     <br>
                      <div class="row" style="padding:5px;border:2px solid #f4f5f7">
                                   <h6 class=""> <small>Final Request <br>(  Sent in 3days  )</small></p></h6>
                                   <br>
                                              <button type="button" class="btn btn-danger btn-sm ">Delete </button>&nbsp;&nbsp;
                                              <button type="button" class="btn btn-danger btn-sm ">View </button>


                     </div>
                    
                     <br>
                    <div class="row" style="float:left!important">
                       <button type="button" class="btn btn-default btn-sm" style="background: #a6aebc;color:#fff;float:left!important"><i class="fa fa-plus" style="color:#fff;"></i> Add Text Message</button>
                    </div>
                                            
                     </div>
                     <div class="col-md-9">
                       <div class="card-body " style="background-color: #f4f5f7;margin:0px">
                                    <p>Add An Image(Max 2 MB)</p>


                                                    <form action="" method="post" style="background: #fff;padding-top:10px;padding-right: 5px;">

                                                    <div class=" mb-3">
                                          
                                                   <label class="col-md-4 form-group "style="float:left!important;" >Frequency :</label> 
                                                    <select class="col-md-8 form-control">
                                                    <option value="#" >Immediately</option>
                                                    <option value="#" >Within 24hrs</option>
                                                    <option value="#" >2 Days</option>
                                                    <option value="#" >3 Days</option>
                                                    <option value="#" >4 Days</option>
                                                    <option value="#" >5 Days</option>
                                                    <option value="#" >6 Days</option>
                                                    <option value="#" >7 Days</option>
                                                    </select>
                                                    </div>
                                                    
                                                    
                                                    <div class="mb-3">
                                                    <label class=" col-md-4 form-group" for="phone" style="float:left!important;">From :</label>
                                                    <input class="col-md-8 form-control" type="tel" placeholder="(235)-456-4568" name="phone" readonly>
                                                    </div>
                                                    
                                                    <br>
                                                    <div>
                                                    <label   class=" col-md-4 form-group" style="float:left!important;"  for="msg">Compose Message: </label>
                                                    <textarea name="msg" class="col-md-8 form-control" rows="4" cols="" placeholder="" name=""></textarea>
                                                    </div>
                                                    
                                                    <br>
                                                    <div class="row" style="background-color: #f4f5f7;padding:5px">
                                                      <div class="col-sm-10">
                                                        <p><b style="color:#a6aebc;font-size:13px">Required otp-out will be added :</b>
                                                        <br>Text STOP to stop</p>
                                                      </div>
                                                      <div class="col-sm-2">
                                                    <button type="button" class="btn btn-default btn-sm pull-right" style="background:#a6aebc;color:#fff;float:right!important"> Save Template</button>
                                                  </div>
                                                  </div>
                                                    </form>
                                  
                                  </div>
                     </div>
                








                </div>

                
                </div>
              


              <!-- ...................................... txt code end....................................... -->
    
    </div>
    <div id="email_campaign_estatement" class=" tab-pane fade"><br>
       <!-- ...................................... Email code start from hear....................................... -->

     <!--  <h4>Email Campaign</h4> -->

 <div class="card-body">
                  <h4>Email Campaign</h4>
                  <hr>
     
       

    
       <div class="card-deck">

    <div class="col-md-3">
                      <div class="row" style="padding:5px;border:2px solid #f4f5f7">
                     <h6 class=""> <small>Initial Request <br>(Sent As soon as possible)</small></p></h6>
                                              <button type="button" class="btn btn-danger btn-sm ">Remove </button>&nbsp;&nbsp;
                                              <button type="button" class="btn btn-danger btn-sm ">View </button>
                      </div>
     
                   
                     <br>

                      <div class="row" style="padding:5px;border:2px solid #f4f5f7">
                                   <h6  class=""> <small>Final Request <br>(  Sent in 3days  )</small></p></h6>
                                              <button type="button" class="btn btn-danger btn-sm ">Remove </button>&nbsp;&nbsp;
                                              <button type="button" class="btn btn-danger btn-sm ">View </button>


                     </div>
                    
                     <br>
                    <div class="row">
                       <button type="button" style="background: #a6aebc;color:#fff;text-align:" class="btn btn-default btn-sm" ><i class="fa fa-plus" style="color:#fff;"></i> Add Email Template</button>
                    </div>
                    
                  </div>

     
    


                                        <div class="col-md-6" style="margin-right:0px!important">
                                          <form action="" method="post">

                                      <div style="border:2px solid lightgray;padding:8px">

                                                  <div class="mb-3">
                                                    <label class="col-md-5 form-group" for="template_name" style="float:left!important;">Template Name :</label> 
                                                    <input type="text" name="template_name" class="col-md-7 form-control" placeholder="Template Name" required>
                                                    </div>



                                                     <div class=" mb-3">
                                                    <label class="form-group col-md-5 " style="float:left;">Sent :&nbsp;&nbsp;</label> 
                                                    <select class="col-md-7 form-control">
                                                    <option value="#" >Immediately</option>
                                                    <option value="#" >Within 24hrs</option>
                                                    <option value="#" >2 Days</option>
                                                    <option value="#" >3 Days</option>
                                                    <option value="#" >4 Days</option>
                                                    <option value="#" >5 Days</option>
                                                    <option value="#" >6 Days</option>
                                                    <option value="#" >7 Days</option>
                                                    </select>
                                                    </div>
                                                   
                                                    <div class="mb-3">
                                          
                                                   <label class="col-md-5 form-group "style="float:left!important;" >Sent on Weekends :</label> 
                                                    <select class="col-md-7 form-control">
                                                    <option value="#" >Yes</option>
                                                    <option value="#" >No</option>
                                                    </select>
                                                    </div>


                                                    
                                                    
                                                    <div class="mb-3">
                                                    <label class="col-md-5 form-group" for="time" style="float:left!important;">Send Time :</label> 
                                                    <input type="time" name="time" class="col-md-7 form-control" required>
                                                    </div>
                                                    
                                                    <div class=" mb-3">
                                                    <label class="col-md-5 form-group" for="sub" style="float:left!important;">Subject :&nbsp;&nbsp;</label> 
                                                    <input type="text" name="sub" class="col-md-7 form-control" placeholder="subject" required>
                                                    </div>
                                                    

                           

                    
                   

                                                        <div >

                  
                      <img src="images/editor-wysiwyg.png" alt="editor-wysiwyg" style="height:200px;width:300px;" >
                    </div>
                     <button type="button" class="btn btn-default btn-sm " style="background: #a6aebc;color:#fff;"> Save Email Template</button>

                     </div>
                   </form>

      
    </div>

                     <div class="col-md-3" style="" >
      


                                                  <div class=" " style="background-color: #f4f5f7;padding:10px">
                                                  <p>Mail Settings</p>


                                                  <div class="form-inline">
                                                  <label class="">From Name :</label>
                                                  <input type="text" class="form-control col-md-12"  name="fm_name" placeholder="Display Name" >
                                                  </div>
                                                  <br>
                                                  <div class=" form-inline">
                                                  <label class="">From Email :</label>
                                                  <input type="email" class="form-control col-md-12"  name="fm_email" placeholder="name@yourdomain.com" readonly >
                                                  </div>
                                                  <br>
                                                  <div class=" form-inline">
                                                  <label class="">Reply to: </label>
                                                  <input type="email" class="form-control col-md-12"  name="reply_to" placeholder="name@yourdomain.com" >
                                                  </div>
                                                  <br>
                                                  </div>
                     


          </div> 


</div>

                </div> 

                <!-- ...................................... email code end....................................... -->
    </div>
    <div id="notification_estatement" class=" tab-pane fade"><br>
      <h3>Notification</h3>

      <div class="container">
  <p class="row">How would  you like to get notified when patient pays eStatement ?</p>
 
  <form action="">
    <div class="form-check-inline row col-md-3">
      <label class="form-check-label" for="email">
        <input type="radio" class="form-check-input" id="email" name="email" value="email" checked>Email
      </label>
    </div>
    <div class="form-check-inline row col-md-3">
      <label class="form-check-label" for="email_pdf">
        <input type="radio" class="form-check-input" id="email_pdf" name="email_pdf" value="email_pdf">Email & Pdf
      </label>
    </div>
   <div class="row" style="margin-top:10px">
    <button type="submit" class="btn btn-default btn-sm" style="background:#a6aebc;color:#fff">Submit</button>
  </div>
  </form>
</div>
    
    </div>
    <div id="campaign_default_estatement" class="tab-pane fade"><br>
      <h3>Campaign Defaults</h3>
        <div class="container">
  <p class="row">Please select the  prefered method you want to send the eStatement request to each patients once added in to the system</p>
 
  <form action="">
    <div class="form-check-inline row col-md-3">
      <label class="form-check-label" for="email">
        <input type="radio" class="form-check-input" id="email" name="email" value="email" checked>Email
      </label>
    </div>
    <div class="form-check-inline row col-md-3">
      <label class="form-check-label" for="SMS">
        <input type="radio" class="form-check-input" id="SMS" name="SMS" value="SMS">SMS
      </label>
    </div>
    <div class="form-check-inline row col-md-3">
      <label class="form-check-label" for="email_&_sms">
        <input type="radio" class="form-check-input" id="email_&_sms" name="email_&_sms" value="email_&_sms">Email & SMS
      </label>
    </div>
   <div class="row" style="margin-top:10px">
    <button type="submit" class="btn btn-default btn-sm" style="background:#a6aebc;color:#fff">Submit</button>
  </div>
  </form>
</div>
    </div>
  </div>


                
                       </div>
                </div>
     </div>
                 </div>
         </div>
     </div>
</div>



<?php
include("footer.php");
 ?>
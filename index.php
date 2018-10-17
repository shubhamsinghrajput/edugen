<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edugen - Regestration Form</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/select.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body id="page-top" class="side-panel">
   <div class="tabs">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top " id="sideNav">
      <a class="navbar-brand " href="#page-top">
        <span class="d-block d-lg-none">Edugen</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav">
          <li class="nav-item">
            <a class="nav-link" href="#school" data-toggle="pill">School</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#teacher" data-toggle="pill">Teacher</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#student" data-toggle="pill">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#parent" data-toggle="pill">Parent</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="unit.php">Unit</a>
          </li>
         </ul>
      </div>
    </nav>
    <div class="tab-content">
             <section class="p-3 p-lg-5 tab-pane active" id="school">
                 <div class="my-auto">
                   <div class="container">
                     <h2 class="text-center text-uppercase text-secondary mb-0">School Form</h2>
                     <hr class="star-dark mb-5">
                     <div class="row">
                       <div class="col-lg-8 mx-auto">
                        <form name="school-form" id="school-form" novalidate="novalidate">
                           <div class="mb-0 pb-2">
                               <label>CID</label>
                               <input class="form-control" id="cid" type="text" placeholder="CID" disabled="disabled" value="JH-B/002B2018" required="required">
                                </div>                           
                             <div class="mb-0 pb-2">
                             <label>User</label>
                               <select  name="user" id="user"> 
                               <option value="">Please choose a user</option>
                                 <option value="school">School</option>
                                 <option value="authorised Person">Authorised Person</option>
                                 <option value="owner/chairman">Owner/Chairman</option>
                                 <option value="principal">Principal</option>
                             </select>   
                               </div>
                            <div class="mb-0 pb-2">
                               <label>Name</label>
                               <input class="form-control" id="user-name" type="text" placeholder="User name" required="required">
                             </div>
                             <div class="mb-0 pb-2">
                               <label>Phone No.</label>
                               <input class="form-control" id="user-phone" type="text" placeholder="Phone No." required="required">
                             </div>
                             <div class="mb-0 pb-2">
                               <label>Email Address</label>
                               <input class="form-control" id="school-email" type="email" placeholder="Email Address" required="required">
                             </div>
                             <div class="mb-0 pb-2">
                               <label>Address</label>
                               <textarea class="form-control" id="school-address" rows="5" placeholder="Address" required="required" data-validation-required-message="Please enter address."></textarea>
                             </div>                         
                           <br>
                           <div id="success"></div>                          
                             <button type="submit" class="btn btn-xl" id="school-form-submit">Send</button>    
                         </form>
                          <div class="mb-0 pb-2"><br> 
                         <p>Before you can login, you must active your account with the link sent to your email address.
							 
                     </div>
                       </div>                       
                       <div class="col-xl-3 col-sm-4 "><br> 
                        <form name="otp-school-form" id="otp-school-form" novalidate="novalidate">
                           <div class="mb-0 pb-2">
                               <label>OTP</label>
                               <input class="form-control" id="otp-school" type="text" placeholder="Please enter OTP" required="required">
                               <div id="success"></div>   <br>                       
                             <button type="submit" class="btn btn-xl" id="school-otp-submit">Send</button> 
                                </div>  
                           </form> 
                         </div>                          
                     </div>
                   </div>
                 </div>
               </section>         
               <hr class="m-0">         
               <section class="p-3 p-lg-5 tab-pane" id="teacher">
                 <div class="my-auto">
                   <div class="container">
                     <h2 class="text-center text-uppercase text-secondary mb-0">Teacher Form</h2>
                     <hr class="star-dark mb-5">
                     <div class="row">
                       <div class="col-lg-8 mx-auto">
                         <form name="teacher-form" id="teacher-form" novalidate="novalidate">
                            <div class="mb-0 pb-2">
                               <label>CID</label>
                               <input class="form-control" id="teacher-cid" type="text" placeholder="Please enter school CID" required="required">
                                </div> 
                             <div class="mb-0 pb-2">
                               <label>Name</label>
                               <input class="form-control" id="teacher-name" type="text" placeholder="Name" required="required" >
                             </div>
                             <div class="mb-0 pb-2">
                               <label>Phone No.</label>
                               <input class="form-control" id="teacher-phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                             </div>
                             <div class="mb-0 pb-2">
                               <label>Email Address</label>
                               <input class="form-control" id="teacher-email" type="email" placeholder="Email Address" required="required" >
                             </div>                             
                             <div class="mb-0 pb-2">
                             <label>Subject</label>
                               <select class="multiselect"  name="teacher-sub" multiple="multiple" id="teacher-sub">
                                 <option value="math">Math</option>
                                 <option value="science">Science</option>
                                 <option value="english">English</option>
                                 <option value="hindi">Hindi</option>
                                 <option value="sanskrit">Sanskrit</option>
                             </select>   
                               </div>
                            <div class="mb-0 pb-2">
                             <label>Class</label>
                               <select class="multiselect"  name="teacher-class" multiple="multiple" id="teacher-class">
                                 <option value="class-5">Class-5</option>
                                 <option value="class-6">Class-6</option>
                                 <option value="class-7">Class-7</option>
                                 <option value="class-8">Class-8</option>
                                 <option value="class-9">Class-9</option>
                             </select>   
                               </div>
                           <br>
                           <div id="success"></div>                         
                             <button type="submit" class="btn btn-xl" id="teacher-form-submit">Send</button>  
                         </form>
                         <div class="mb-0 pb-2"><br> 
                         <p>Before you can login, you must active your account with the link sent to your email address.
							 
                     </div>
                         
                       </div>
                          <div class="col-lg-2 mx-auto"><br> 
                        <form name="otp-teacher-form" id="otp-teacher-form" novalidate="novalidate">
                           <div class="mb-0 pb-2">
                               <label>Teacher OTP</label>
                               <input class="form-control" id="otp-teacher" type="text" placeholder="Please enter OTP" required="required">
                               <div id="success"></div>   <br>                       
                             <button type="submit" class="btn btn-xl" id="otp-teacher-submit">Send</button> 
                                </div>  
                           </form>
                           <br>
                           <form name="otp-school-teacher-form" id="otp-school-teacher-form" novalidate="novalidate">
                           <div class="mb-0 pb-2">
                               <label>OTP From school #</label>
                               <input class="form-control" id="otp-school-teacher" type="text" placeholder="Please enter OTP" required="required">
                               <div id="success"></div>   <br>                       
                             <button type="submit" class="btn btn-xl" id="otp-school-teacher-submit">Send</button> 
                                </div>  
                           </form>
                           <p>#The Service will be stopped within 72 hours, Please submit OTP Provided to the school.</p>
                         </div>                   
                     </div>
                   </div>
                 </div>
             </section>
             <hr class="m-0">
             <section class="p-3 p-lg-5 tab-pane" id="student">
                 <div class="my-auto">
                   <div class="container">
                     <h2 class="text-center text-uppercase text-secondary mb-0">Student Form</h2>
                     <hr class="star-dark mb-5">
                     <div class="row">
                       <div class="col-lg-8 mx-auto">
                         <form name="student-form" id="student-form" novalidate="novalidate">
                             <div class="mb-0 pb-2">
                               <label>Name</label>
                               <input class="form-control" name="student-name" id="student-name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                             </div>
                             <div class="mb-0 pb-2">
                               <label>Student ID</label>
                               <input class="form-control" name="student-id" id="student-id" type="text" placeholder="Student ID" required="required" data-validation-required-message="Please enter your name.">
                             </div>
                              <div class="mb-0 pb-2">
                               <label>Phone No.</label>
                               <input class="form-control" id="student-phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                             </div>
                             <div class="mb-0 pb-2">
                               <label>Email</label>
                               <input class="form-control" id="student-email" type="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email address.">
                             </div>
                              <div class="mb-0 pb-2">
                               <label>Class</label>
                               <input class="form-control" name="student-class" id="student-class" type="text" placeholder="Section" required="required">
                             </div>
                              <div class="mb-0 pb-2">
                               <label>Section</label>
                               <input class="form-control" name="student-section" id="student-section" type="text" placeholder="Section" required="required" data-validation-required-message="Please enter your name.">
                             </div>
                             <div class="mb-0 pb-2">
                               <label>Roll No.</label>
                               <input class="form-control" name="student-roll" id="student-roll" type="text" placeholder="Roll no." required="required" data-validation-required-message="Please enter your name.">
                             </div>
                             <div class="mb-0 pb-2">
                             <label>Subject</label>
                               <select class="multiselect"  name="stu_subject" multiple="multiple" id="stu_subject">
                                 <option value="math">Math</option>
                                 <option value="science">Science</option>
                                 <option value="english">English</option>
                                 <option value="hindi">Hindi</option>
                                 <option value="sanskrit">Sanskrit</option>
                             </select>   
                               </div>
                             <div class="mb-0 pb-2">
                               <label>Address</label>
                               <textarea class="form-control" id="stu_address" rows="5" placeholder="Address" required="required"></textarea>
                             </div>                           
                           <br>
                           <div id="success"></div>
                             <button type="submit" class="btn btn-xl" id="student-form-submit">Send</button>
                         </form>
                         <div class="mb-0 pb-2"><br> 
                         <p>Before you can login, you must active your account with the link sent to your email address.
							 
                     </div>
                        
                       </div>
                        <div class="col-lg-2 mx-auto"><br> 
                        <form name="otp-student-form" id="otp-student-form" novalidate="novalidate">
                           <div class="mb-0 pb-2">
                               <label>OTP</label>
                               <input class="form-control" id="otp-student" type="text" placeholder="Please enter OTP" required="required">
                               <div id="success"></div>   <br>                       
                             <button type="submit" class="btn btn-xl" id="student-otp-submit">Send</button> 
                                </div>  
                           </form>
                         </div>                          
                     </div>
                   </div>
                 </div>
               </section>
               <hr class="m-0">         
               <section class="p-3 p-lg-5 tab-pane" id="parent">
                 <div class="my-auto">
                   <div class="container">
                     <h2 class="text-center text-uppercase text-secondary mb-0">Parent Form</h2>
                     <hr class="star-dark mb-5">
                     <div class="row">
                       <div class="col-lg-8 mx-auto">
                         <form name="parent-form" id="parent-form" novalidate="novalidate">
                             <div class="mb-0 pb-2">
                               <label>Student ID</label>
                               <input class="form-control" id="parent-student-id" type="text" placeholder="Student ID" required="required">
                             </div>
                              <div class="mb-0 pb-2">
                               <label>Parent Name</label>
                               <input class="form-control" id="parent-name" type="text" placeholder="Parent Name" required="required">
                             </div>
                             <div class="mb-0 pb-2">
                               <label>Email Address</label>
                               <input class="form-control" id="parent-email" type="email" placeholder="Email Address" required="required">
                             </div>
                             <div class="mb-0 pb-2">
                               <label>Phone Number</label>
                               <input class="form-control" id="parent-phone" type="tel" placeholder="Phone Number" required="required">
                             </div>
                           <br>
                           <div id="success"></div>
                           <div class="">
                             <button type="submit" class="btn btn-xl" id="parent-form-submit">Send</button>
                           </div>
                         </form>
                         <div class="mb-0 pb-2"><br> 
                         <p>Before you can login, you must active your account with the link sent to your email address.
							 
                     </div>
                       </div>
                        <div class="col-lg-2 mx-auto"><br> 
                        <form name="otp-parent-form" id="otp-parent-form" novalidate="novalidate">
                           <div class="mb-0 pb-2">
                               <label>OTP</label>
                               <input class="form-control" id="otp-parent" type="text" placeholder="Please enter OTP" required="required">
                               <div id="success"></div>   <br>                       
                             <button type="submit" class="btn btn-xl" id="parent-otp-submit">Send</button> 
                                </div>  
                           </form>
                         </div>                          
					   </div>
                   </div>
                 </div>
               </section>
                    </div>
       <hr class="m-0">
      </div>
 
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/site.js"></script>
     <script src="assets/js/select.js"></script>
    <script>
       $(function () {
    $('.multiselect').multiselect({
        buttonText: function(options){
          if (options.length === 0) {
              return 'Please Choose';
           }
           var labels = [];
           options.each(function() {
               if ($(this).attr('value') !== undefined) {
                   labels.push($(this).attr('value'));
               } 
            });
            return labels.join(', ');  
         }
    }); 
});
    </script>

    <script>
    (function($) {
   // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#sideNav'
  });

})(jQuery); // End of use strict

    </script>
  </body>

</html>

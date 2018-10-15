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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                           <div class="control-group">
                           <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>CID</label>
                               <input class="form-control" id="cid" type="text" placeholder="CID" disabled="disabled" value="JH-B/002B2018" required="required">
                               <p class="help-block text-danger"></p>
                             </div>
                             <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                             <label>Admin</label>
                               <select  name="admin" id="admin"> 
                               <option value="">Please Chhose admin</option>
                                 <option value="school">School</option>
                                 <option value="authorised Person">Authorised Person</option>
                                 <option value="owner/chairman">Owner/Chairman</option>
                                 <option value="principal">Principal</option>
                             </select>   
                               </div>
                             </div>
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>School Name</label>
                               <input class="form-control" id="school-name" type="text" placeholder="School Name" required="required">
                               <p class="help-block text-danger"></p>
                             </div>
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>School Name</label>
                               <input class="form-control" id="school-name" type="text" placeholder="School Name" required="required">
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>School Email Address</label>
                               <input class="form-control" id="school-email" type="email" placeholder="Email Address" required="required">
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>School Phone Number</label>
                               <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>Message</label>
                               <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <br>
                           <div id="success"></div>
                           <div class="form-group">
                             <button type="submit" class="btn btn-xl" id="sendMessageButton">Send</button>
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
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>Name</label>
                               <input class="form-control" id="name" type="text" placeholder="Name" required="required" >
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>Email Address</label>
                               <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" >
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>Phone Number</label>
                               <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <select  name="lstStates" multiple="multiple" id="lstStates">
                                 <option value="NJqqq">New Jersey</option>
                                 <option value="NYqqqqq">New York</option>
                                 <option value="OHqqqqqqq">Ohio</option>
                                 <option value="TXqqqqq">Texas</option>
                                 <option value="PAqqqqq">Pennsylvania</option>
                             </select>   
                               </div>
                             </div>
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>Message</label>
                               <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <br>
                           <div id="success"></div>
                           <div class="form-group">
                             <button type="submit" class="btn btn-xl" id="sendMessageButton">Send</button>
                           </div>
                         </form>
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
                         <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                         <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                         <form name="sentMessage" id="contactForm" novalidate="novalidate">
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>Name</label>
                               <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>Email Address</label>
                               <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>Phone Number</label>
                               <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>Message</label>
                               <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <br>
                           <div id="success"></div>
                           <div class="form-group">
                             <button type="submit" class="btn btn-xl" id="sendMessageButton">Send</button>
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
                         <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                         <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                         <form name="sentMessage" id="contactForm" novalidate="novalidate">
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>Name</label>
                               <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>Email Address</label>
                               <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>Phone Number</label>
                               <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                               <label>Message</label>
                               <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                               <p class="help-block text-danger"></p>
                             </div>
                           </div>
                           <br>
                           <div id="success"></div>
                           <div class="form-group">
                             <button type="submit" class="btn btn-xl" id="sendMessageButton">Send</button>
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
    $('#lstStates').multiselect({
        buttonText: function(options){
          if (options.length === 0) {
              return 'Subjects';
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

<!DOCTYPE html>
<html >
   <head >
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <title >Form Page: contact_us</title>
      <meta name='generator' content='Simfatic Forms 5.0.1.430'>
      <script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
      <script src='scripts/sfm-png-fix.js' type='text/javascript'></script>
      <script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
      <link rel='stylesheet' type='text/css' href='style/contact_us.css?r=1786193640'>
   </head>
   <body id='sfm_contact_us_body'>
      <form id='contact_us' class='sfm_form' method='post' action='/form_gallary/contact_us/contact_us.php?sfm_sid=1c9122oajbi2jnts44unqrdhf4' accept-charset='UTF-8'>
         <div id='contact_us_errorloc' class='error_strings' style='width:424px;text-align:left'></div>
         <div id='contact_us_outer_div' class='form_outer_div' style='width:424px;height:427px'>
            <div style='position:relative' id='contact_us_inner_div'>
               <input type='hidden' name='sfm_form_submitted' value='yes'>
               <input type='hidden' name='id_83fe70f615748148d07d' value='6042d056088669c496d3c573d'>
               <input type='text' name='tdb94be2f9fae930d1199' id='tdb94be2f9fae930d1199'>
               <div id='heading_container' class='form_subheading'>
                  <h2 id='heading' class='form_subheading'>Contact us</h2>
               </div>
               <div id='Name_container' class='sfm_element_container'>
                  <input type='text' name='Name' id='Name' value='' size='20' class='sfm_textbox'>
               </div>
               <div id='TextBlock_container' class='sfm_form_label'>
                  <label id='TextBlock'>Name*</label>
               </div>
               <div id='Email_container' class='sfm_element_container'>
                  <input type='text' name='Email' id='Email' value='' size='20' class='sfm_textbox'>
               </div>
               <div id='TextBlock1_container' class='sfm_form_label'>
                  <label id='TextBlock1'>Email*</label>
               </div>
               <div id='TextBlock2_container' class='sfm_form_label'>
                  <label id='TextBlock2'>Message</label>
               </div>
               <div id='Image_container'>
                  <img class='sfm_image_in_form' src='images/postbox-4-0-0.gif' width='133' height='199' alt=''>
               </div>
               <div id='Message_container' class='sfm_element_container'><textarea name='Message' id='Message' cols='50' rows='10' class='sfm_textarea'></textarea></div>
               <div id='Submit_container' class='sfm_element_container'>
                  <input type='image' name='Submit' id='contact_us_Submit_img' src='images/contact_us-Submit-0-4-0-0.png' alt='submit'>
               </div>
            </div>
         </div>
<div class='sfm_cr_box' style='padding:3px; width:350px;cursor:default'>Form powered by: easy dynamic web form builder <a style='text-decoration:none;' href='http://simfatic.com/form-software/html-contact-form-generator.html'>Simfatic Forms</a></div>
      </form>
      <script type='text/javascript'>
sfm_fix_png("contact_us_Submit_img","images/spacer.gif");
      </script>
      <script type='text/javascript'>
var contact_usValidator = new Validator("contact_us",{enable_smart_live_validation:false});
contact_usValidator.addValidation("Name",{required:true,message:"Please fill in Name"} );
contact_usValidator.addValidation("Name",{maxlen:"50",message:"The length of the input for Name should not exceed 50"} );
contact_usValidator.addValidation("Email",{email:true,message:"The input for Email should be a valid email value"} );
contact_usValidator.addValidation("Email",{required:true,message:"Please fill in Email"} );
contact_usValidator.addValidation("Email",{maxlen:"50",message:"The length of the input for Email should not exceed 50"} );
contact_usValidator.addValidation("Message",{maxlen:"10240",message:"The length of the input for Message should not exceed 10240"} );
      </script>
   </body>
</html>

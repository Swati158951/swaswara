<!DOCTYPE html>

<html lang="en">



  <head>

<script src="js/jquery.validate.min.js"></script> 
<script type="text/javascript">
  $(document).ready(function () {  
//Form Validation and submission 
         $("#booking_form").validate({
        submitHandler : function() {
         $.post("php/formsubmission.php", {
            name : $("#name").val(),
            email : $("#email").val(),
            mobile : $("#mobile").val(),
            message : $("#gender").val(),
            country : $("#country").val(),
            city : $("#city").val(),
            programme : $("#programme").val(),
            duration : $("#duration").val(),
            message : $("#message").val(),
            mode : 'ContactForm',
	    site_url:window.location.href,
          },

          function(data) {
          window.location.href = "thank-you.php"; 
          
            //$("#property_booking_form").html('<h4>Thank You</h4>');
            //$(".msgblock").show();
            //$(".msgblock").html(data);
          });
        },
        ignore : "",
        rules : {
          name : {
            required : true
          },
          /* offerId: {required: true}, */
          mobile : {
            required : true,
            digits : true,
            minlength : 10,
            maxlength : 10
          },
          email : {
            required : true,
            email : true
          },
          gender : {
            required : true
          },
           country : {
            required : true
          }
        },
        city : {
            required : true
          }
        },
        programme : {
            required : true
          }
        },
        duration : {
            required : true
          }
        },
        messages : {
          name : {
            required : "Please enter your name"
          },
          /* offerId:{required: "Please Select your offer"}, */
          mobile : {
            required : "Enter your Number"
          },
          email : {
            required : "Please enter your email",
            email : "Please enter a valid email"
          },
          gender : {
            required : "Please select gender"
          },
          country : {
            required : "Please select country"
          }
        },
        city : {
            required : "Please select city"
          }
        },
        programme : {
            required : "Please select programme"
          }
        },
        duration : {
            required : "Please select duration"
          }
        },
        message : {
            required : "Please enter your message"
          }
        },
      });

      </script>
 

</head>

<body>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
  

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        

        <!-- Template Stylesheet -->
        <link href="contact.css" rel="stylesheet">
    </head>
    <body>
        
<div class="contact">
    <div class="container">
        <div class="section-header text-center">
            <p>Get In Touch</p>
            <h2>Contact for any query</h2>
        </div>
     
            <div>
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate" method="POST" action="contact.php" >
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name"  name="name" required>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required  name="email">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="phone" placeholder="Phone No." required  name="phone">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="message" placeholder="Message" required name="massage"></textarea>
                            <p class="text-danger"></p>
                        </div>
                        <div>
        
                            <input type="submit" class="btn btn-custom" value="Send Message">
                        </div>
                    </form>
                </div>
            
            </div>
            
        </div>
    </div>
    
</div>


</body>
</html>
<?php ob_start(); session_start(); ?>
<?php $con=mysqli_connect("localhost","root","","doc_appoint");?>
<?php $a = mysqli_query($con, "SELECT * FROM  `login` WHERE  `patient_id` LIKE  '".$_SESSION['patient_id']."'") ;
 $b = mysqli_fetch_array($a); ?>
 <?php
 echo ($b['username']);
 ?>
<html><head>
        <title>dr ritu jain</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="keywords" content="Remedial Appointment Form Bootstrap Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates">
        <link href="csss/easy-responsive-tabs.css" rel="stylesheet" type="text/css">
        <link href="csss/jquery-ui.css" rel="stylesheet" type="text/css" media="all">
        <link href="csss/style.css" rel="stylesheet" type="text/css">
        <!--webfonts-->
        <link href="//fonts.googleapis.com/csss?family=Open+Sans:400,600,700" rel="stylesheet">
        <!--//webfonts-->
        
        </head>
        <body>
        
         <h1></h1>
            <div class="container">
                    <div class="w3-agileits-team-title"> 
                        
                        
                    <div id="horizontalTab">
                            <ul class=" resp-tabs-list">
                            <li>
                               <!-- <img src="images1/tm1.jpg" alt=" " class="img-responsive">-->
                            </li>
                            </ul>
                            <div class=" resp-tabs-container">
                            <div class="tab1">
                                <div class="team-img-w3-agile">
                                <img src="images1/tm11.png" alt=" " class="img-responsive">
                                <h4>Dr.Ritu Jain</h4><br>
                                    <span>BDS<br>
                                            5 years experience overall</span>
                        
                                </div>
                                <form action="after_booking.php" method="post">
                                       
                                <div class=" team-Info-agileits">
                                <div class=" register-form">
                                        <font color="white">doctor id  <input type="number" name="id" value="101"><br><br>
                                            <input type="text" name="name" value="Dr.Ritu Jain"><br><br>
                                       	<b><u>ADDERESS:</u></b> Shop Number-4C, 1st Floor, Green India Palace Mall<br> 
                                            Landmark: Near Labour Chowk, Noida<br><br>
                                           Consultation fee <input type="number" name="fee" value="500"><br><br>
                        
                          
                                <div class="fields-grid">
                                       
                                <br>	Select a Date-<br>
                                    <select name="date"><option>16 November</option>
                                    <option>17 November</option>
                                <option>18 November</option></select>
                                        
                                    
                                    <div class="styled-input">
                                            <br>Select a Time-<br>
                                            <select name="time"><option>9am</option>
                                            <option>10am</option>
                                        <option>11am</option>
                                    <option>12noon</option></select>
                                    </div></font>
                                    
                                    
                                    <br><a href="bookingreceipt.php">	<input type="submit" name="submit" value="Book Appointment"></a>
                                    
                                </div>
                                
                            </form>
                                
                        </div>	
                                                        
                                </div>
                                <div class="clear"> </div>
                            </div>
                            
                                <div class="clear"> </div>
                            </div>
                           
                                <div class="clear"> </div>
                            </div>
                           
                                <div class="clear"> </div>
                            </div>
                            </div>
                            <div class="clear"> </div>
                            
                    </div>
            </div>
         </div>
        
                
                <div class="copyright">
                
                
                    <p><a href="">home</a> <br><a href="">back</a></p>
                
                
            </div>
            
             
            <!--tabs-->	
        <script src="jss/jquery.min.js"></script>
        <script src="jss/easy-responsive-tabs.js"></script>
        <script>
        $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true,   // 100% fit in a container
        closed: 'accordion', // Start closed if in accordion view
        activate: function(event) { // Callback function if tab is switched
        var $tab = $(this);
        var $info = $('#tabInfo');
        var $name = $('span', $info);
        $name.text($tab.text());
        $info.show();
        }
        });
        $('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
        });
        });
        </script>
        <!--//tabs-->
        <!-- Calendar -->
        <script src="jss/jquery-ui.js"></script>
            <script>
                $(function() {
                $( "#datepicker,#datepicker1" ).datepicker();
                });
            </script>
        <!-- //Calendar -->
        
        </body></html>
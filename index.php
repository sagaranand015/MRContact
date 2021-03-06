<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Mentored Research Equity Research Initiative - the flagship program of Mentored-Research, is a 6 week course designed to help participants in the art of smart and logical investing. This is done by dealing with an application-based approach to analyses of securities.">
    <meta name="keywords" content="Mentored Research Equity Research Initiative - the flagship program of Mentored-Research, is a 6 week course designed to help participants in the art of smart and logical investing. This is done by dealing with an application-based approach to analyses of securities. ERI and Technical Analysis by Mentored-Research.">
    <meta name="author" content="Sagar Anand, Mentored-Research Tech Team">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />

    <title>Contact Us | Mentored-Research</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- for jQuery -->
    <script src="js/jquery-1.7.1.min.js"></script>

    <!-- for my own custom jQuery Scripts -->
    <script src="js/customScripts.js"></script>

    <!-- for the social buttons coming from Bootstrap -->
    <link href="css/bootstrap-social.css" rel="stylesheet">    

    <!-- the latest jQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- for the scrolly thing -->
    <script src="js/jquery.scrolly.min.js"></script>

    <!-- For validation of the Form input elements -->
    <script src="js/validator.min.js"></script>

    <style type="text/css">

        @font-face {
            font-family: regularText;
            src: url('fonts/AlegreyaSansSC-Regular.ttf');
        }

        @font-face {
            font-family: boldText;
            src: url('fonts/AlegreyaSansSC-Bold.ttf');
        }

        @font-face {
            font-family: lightText;
            src: url('fonts/AlegreyaSansSC-Light.ttf');
        }

        @font-face {
            font-family: mediumText;
            src: url('fonts/AlegreyaSansSC-Medium.ttf');
        }

        @font-face {
            font-family: writingText;
            src: url('fonts/SEGOEUIL.ttf');
        }

        #alertMsg {
        	width: 60%;
            z-index:999999; 
            margin: 2% 2% 2% 2%;
            font-family: boldText;
            position: fixed;
        }

        #popup {
        	width: 60%;
            z-index:999999; 
            margin: 2% 2% 2% 2%;    
            font-family: boldText;
            position: fixed;
        }

        footer {
        	background: rgb(233, 233, 233);
        }

        body {
        	background: #070716;
        }

        h1 {
        	color: #fff;
        }

         /*for the smallest phones*/ 
        @media (max-width:767px){
			#contactUsTab {
				float: left;
			}   
			#campusAbsTab {
				float: left;
			}         
			#campusAbs {
				padding-top: 50px;
			}
        }   

        /*for the tablets and all*/
        @media (min-width:768px){
        	#contactUsTab {
				float: left;
			}   
			#campusAbsTab {
				float: right;
			}         
			#campusAbs {
				padding-top: 60px;
			}
        }

        /*for medium screens and desktops*/
        @media (min-width:992px){
            #contactUsTab {
				float: left;
				font-size: 1.2em;
			}   
			#campusAbsTab {
				float: right;
				font-size: 1.2em;
			}         
			#campusAbs {
				padding-top: 60px;
			}
        }

        /*for large screens*/ 
        @media (min-width:1200px){
            #contactUsTab {
				float: left;
				font-size: 1.2em;
			}   
			#campusAbsTab {
				float: right;
				font-size: 1.2em;
			}         
			#campusAbs {
				padding-top: 70px;
			}
        }

        #campusAbsText h4 {
        	color: #fff;
        	text-align: center;
        	font-family: writingText;
        	text-transform: capitalize;
        }

    </style>

	<script type="text/javascript">
        
        $(document).ready(function() {

            var alertMsg = $('#alertMsg').fadeOut();
            var popup = $('#popup').fadeOut();    

            $('#btnExitPopup').on('click', function() {
                popup.children('p').remove();
                popup.fadeOut();
                return false;
            });

            // for checking the query string and all.
	    	var qs = getQueryStrings();

    		// for the scrolly thing.
    		$('.scrolly').scrolly();

    		// for the queryStrings.
    		if(qs["contact"] == "1") {
    			$('#contactUsLink').trigger('click');
    		}
    		else if(qs["campusAbs"] == "1") {
    			$('#campusAbsLink').trigger('click');
    		}
    		else {
    			// nothing to be done here.
    		}

        	// for submission of the contact us form.
        	$('#formContactUs').validator().on('submit', function (e) {
				if (e.isDefaultPrevented()) {
					alertMsg.children('p').remove();
					alertMsg.fadeOut();
					popup.children('p').remove();
					popup.append("<p>Oops! Looks like you did not fill the fields correctly. Please Recheck and try again.</p>").fadeIn();
				} 
				else {
					// everything looks good! AJAX request to be given here.
					var contactName = $('#txtContactName').val().trim();
					var contactEmail = $('#txtContactEmail').val().trim();
					var contactTel = $('#txtContactTel').val().trim();
					var contactMsg = $('#txtContactMsg').val().trim();

					// make the AJAX request for adding the data to the database here.
					popup.fadeOut();
					alertMsg.children('p').remove();
					alertMsg.append("<p>Please wait for a moment while we submit your message...</p>").fadeIn();
					$.ajax({
						type: "GET",
						url: "AJAXFunctions.php",
						data: {
							no: "1", contactName: contactName, contactEmail: contactEmail, contactTel: contactTel, contactMsg: contactMsg
						},
						success: function(response) {
							alertMsg.children('p').remove();
							alertMsg.fadeOut();

							var res = response.split(" ~ ");
							response = res[0];
							var adminMail = res[1];
							var userMail = res[2];

							if(response == "1") {
								if(adminMail == "1" && userMail == "1") {
									popup.children('p').remove();
									popup.append("<p>Thank You for connecting with Mentored-Research. Please check your mailbox for more details. Thank You.</p>").fadeIn();
								}
								else if(adminMail == "-2" || userMail == "-2") {
									popup.children('p').remove();
									popup.append("<p>Thank You for connecting with Mentored-Research. Please check your inbox for more details. We'll send you the mail in sometime. Thank You.</p>").fadeIn();									
								}
								else {
									popup.children('p').remove();
									popup.append("<p>Thank You for connecting with Mentored-Research, but we could not send the required mails. Please write to us at: <code>info@mentored-research.com</code> for more details. Thank You.</p>").fadeIn();																		
								}
							}
							else {
								popup.children('p').remove();
								popup.append("<p>Oops! There seems to be a problem connecting to the Mentored-Research's server. Please try again.</p>").fadeIn();																
							}
						},
						error: function(response) {
							alertMsg.children('p').remove();
							alertMsg.fadeOut();
							popup.children('p').remove();
							popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
						}
					});
				}   // end of else
				return false;
			});

			// for the campus ambassador form
			$('#formCampusAbs').validator().on('submit', function (e) {
				if (e.isDefaultPrevented()) {
					alertMsg.children('p').remove();
					alertMsg.fadeOut();
					popup.children('p').remove();
					popup.append("<p>Oops! Looks like you did not fill the fields correctly. Please Recheck and try again.</p>").fadeIn();
				} 
				else {
					// everything looks good! AJAX request to be given here.
					var campusAbsName = $('#txtCampusAbsName').val().trim();
					var campusAbsEmail = $('#txtCampusAbsEmail').val().trim();
					var campusAbsTel = $('#txtCampusAbsTel').val().trim();
					var campusAbsCollege = $('#txtCampusAbsCollege').val().trim();

					// make the AJAX request for adding the data to the database here.
					popup.fadeOut();
					alertMsg.children('p').remove();
					alertMsg.append("<p>Please wait for a moment while we submit your request...</p>").fadeIn();
					$.ajax({
						type: "GET",
						url: "AJAXFunctions.php",
						data: {
							no: "2", campusAbsName: campusAbsName, campusAbsEmail: campusAbsEmail, campusAbsTel: campusAbsTel, campusAbsCollege: campusAbsCollege
						},
						success: function(response) {
							alertMsg.children('p').remove();
							alertMsg.fadeOut();

							var res = response.split(" ~ ");
							response = res[0];
							var adminMail = res[1];
							var userMail = res[2];

							if(response == "1") {
								if(adminMail == "1" && userMail == "1") {
									popup.children('p').remove();
									popup.append("<p>Thank You for applying to the Campus Ambassador programme of Mentored-Research. Please check your inbox for more details. Thank You.</p>").fadeIn();
								}
								else if(adminMail == "-2" || userMail == "-2") {
									popup.children('p').remove();
									popup.append("<p>Thank You for applying to the Campus Ambassador programme of Mentored-Research. Please check your inbox for more details. We'll send you the mail in sometime. Thank You.</p>").fadeIn();									
								}
								else {
									popup.children('p').remove();
									popup.append("<p>Thank You for applying to the Campus Ambassador programme of Mentored-Research, but we could not notify the Admin. Please write to us at: <code>info@mentored-research.com</code> for more details. Thank You.</p>").fadeIn();																		
								}
							}
							else {
								popup.children('p').remove();
								popup.append("<p>Oops! There seems to be a problem connecting to the Mentored-Research's server. Please try again.</p>").fadeIn();																
							}
						},
						error: function(response) {
							alertMsg.children('p').remove();
							alertMsg.fadeOut();
							popup.children('p').remove();
							popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
						}
					});

				}   // end of else
				return false;
			});

        });    // end of ready function.

	</script>

	<script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-41267406-1', 'auto');
        ga('send', 'pageview');
	</script>

</head>

<body id="page-top" class="index">

    <div id="alertMsg" class="alert alert-warning" role="alert">
    </div>

    <div id="popup" class="alert alert-danger" role="alert">
          <button type="button" class="close" id="btnExitPopup" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background: #070716;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Mentored-Research</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a class="scrolly" href="#page-top"></a>
                    </li>
                    <li>
                    	<a href="http://mentored-research.com">MR-Home</a>
                    </li>
                    <!-- <li>
                    	<a class="scrolly" href="#contactus">Contact Us</a>
                    </li>
                     <li>
                    	<a class="scrolly" href="#campusAbs">Ambassador</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container" style="margin-top: 120px;">
    	<ul class="nav nav-tabs">
    		<li id="contactUsTab">
    			<a href="#contactus" id="contactUsLink" class="scrolly">Contact Us</a>
    		</li>
    		<li id="campusAbsTab">
    			<a href="#campusAbs" id="campusAbsLink" class="scrolly">Be our Campus Ambassador</a>
    		</li>
    	</ul>
    </div>

    <section id="contactus" style="padding-top: 60px;">
    	<div class="container">
    		<h1 class="page-header">
    			Contact Us
    		</h1>

    		<!-- table for the contact us form -->
    		<form role="form" data-toggle="validator" id="formContactUs">
	    		<table class="table">
	    			<tr>
	    				<td>
	    					<input type="text" id="txtContactName" placeholder="Enter Name*" class="form-control" required />
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<input type="email" id="txtContactEmail" placeholder="Enter Email Address*" class="form-control" required />
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<input type="tel" id="txtContactTel" placeholder="Enter Phone number*" class="form-control" required />
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<textarea id="txtContactMsg" placeholder="Tell us what you think..." class="form-control" rows="8" required></textarea>
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<input type="submit" value="Submit" id="btnContactUs" class="btn btn-lg btn-primary btn-block" />
	    				</td>
	    			</tr>
	    		</table>
    		</form>
		</div>
    </section>

    <section id="campusAbs">

		<div class="container" id="campusAbsText">
	    	<h4>
	    		Are you interested in joining the Mentored-Research family?
	    	</h4>
	    	<h4>
	    		Are you interested in making your college a Centre of Excellence in the field of finance?
	    	</h4>
	    	<h4>
	    		If yes, then Apply for the Campus Ambassador position!
	    	</h4>
	    </div>

    	<div class="container">
    		<h1 class="page-header">
    			Campus Ambassador
    		</h1>

    		<!-- table for the contact us form -->
    		<form role="form" data-toggle="validator" id="formCampusAbs">
	    		<table class="table">
	    			<tr>
	    				<td>
	    					<input type="text" id="txtCampusAbsName" placeholder="Enter Name*" class="form-control" required />
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<input type="email" id="txtCampusAbsEmail" placeholder="Enter Email Address*" class="form-control" required />
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<input type="tel" id="txtCampusAbsTel" placeholder="Enter Phone number*" class="form-control" required />
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<input type="text" id="txtCampusAbsCollege" placeholder="Enter College Name*" class="form-control" required />
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<input type="submit" value="Be a Campus Ambassador" id="btnCampusAbs" class="btn btn-lg btn-primary btn-block" />
	    				</td>
	    			</tr>
	    		</table>
    		</form>
		</div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Mentored-Research 2015</span>
                </div>
                <div class="col-md-4">
                    <!-- <ul class="list-inline social-buttons">
                        <li><a href="https://www.facebook.com/pages/Mentored-Researchs-Equity-Research-Initiative/313860081992430?ref=br_tf" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/2217419?trk=tyah&trkInfo=tarId%3A1401993298521%2Ctas%3Amentored%2Cidx%3A1-3-3" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul> -->
                </div>
                <div class="col-md-4">   <!-- TODO -->
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.facebook.com/pages/Mentored-Researchs-Equity-Research-Initiative/313860081992430?ref=br_tf" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/2217419?trk=tyah&trkInfo=tarId%3A1401993298521%2Ctas%3Amentored%2Cidx%3A1-3-3" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 
    <script src="js/classie.js"></script> 
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <!-- <script src="js/contact_me.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <!-- <script src="js/agency.js"></script> -->

</body>

</html>

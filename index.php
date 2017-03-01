<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="We are a New York-based group of scientists who partner with partisan and non-partisan organizations that are creating positive social change.">
    <meta property="og:description" content="We are a New York-based group of scientists who partner with partisan and non-partisan organizations that are creating positive social change." />
    <meta property="og:url" content="http://www.scaan.net/" />
    <meta property="og:title" content="Scientist Action and Advocacy Network" />
    <meta property="og:image" content="http://www.scaan.net/logos/logo_blue.png" />
    <meta name="author" content="">
    <meta name="google-site-verification" content="zF32yFGiPnamVn1rhcrc311deNarsiAmquLuY1TY7mg" />
    <link rel="icon" href="logos/favicaan.ico" type="image/x-icon">

    <title>Scientist Action and Advocacy Network | ScAAN</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="scaan.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,900" rel="stylesheet">
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
	<script src='fullcalendar/fullcalendar.min.js'></script>
    <script type='text/javascript' src='fullcalendar/gcal.js'></script>

	<script type='text/javascript'>
		$(document).ready(function() {
		    $('#calendar').fullCalendar({
                defaultView: 'list',
                // defaultDate: moment(),

                header: false,

                height: 297,

                views: {
                	list: {
                		duration: { days: 90 },
                		listDayAltFormat: 'dddd',
                	}
                },

		        googleCalendarApiKey: 'AIzaSyCZvO74KdqAFqm1Zwzzo9l3K8CpO0rVw3Q',
		        events: {
		            googleCalendarId: 'nyu.edu_ifm76t83fckh8jviji92irkjk8@group.calendar.google.com'
		        },

		        eventRender: function(event, element, view) {
	        	if (event.location) {
			        element.find(".fc-list-item-title")
			            .append("<div class='eventLoc'>" + event.location + "</div>");
		    	}
			}

		    });
		});
	</script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-89937713-1', 'auto');
      ga('send', 'pageview');
    </script>  
	<script src="https://use.fontawesome.com/7b8eff5c01.js"></script>
</head>

<body>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <img class="logo" src="logos/logo_white.svg" alt="">
            </div>
            <div class="col-lg">
                <h1 class="bigtitle">Scientist Action and Advocacy Network</h1>
            </div>
       </div>
       <p>We are a New York-based group of scientists who partner with partisan and non-partisan organizations that are creating positive social change.</p>
    </div>  
</div>

<div class="container">
    <div class="row" id="action">
        <div class="col-md">
            <h2>Action</h2>
            <h4><em>Pro bono</em> science</h4>
             <p>Our members are doctoral students, PhD-holding research scientists, and professors who donate their skilled labor and expertise to our partner organizations. We can help formulate questions that can be answered with data, analyze pre-existing data, and figure out how to act on the results. We can also serve as guides to particular domains of scientific knowledge.</p>
        </div>

        <div class="col-md">
            <h2>Advocacy</h2>
            <h4>Lobbying and outreach</h4>
            <p>We organize actions to encourage our elected officials to support both evidence-based policies and scientific discovery. We also promote candidates with pro-science platforms.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-md-1">
        	<h2>Current Projects</h2>
            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card topcard">
                    <div class="card-header" role="tab">
                        <h4 class="mb-0">
                        	<a data-toggle="collapse" href="#rta" aria-controls="rta" aria-expanded="false">
                        		Raise the Age NY <i class="fa fa-angle-down"></i>
                    		</a>
                		</h4>
                    </div>

                    <div id="rta" class="collapse" role="tabpanel">
                        <div class="card-block">
                            <a href="http://raisetheageny.com/"><img class="projectpartnerlogo" src="logos/raisetheage_square.png"></a>
                        
                            <p>Currently, New York State and North Carolina are the only two states that prosecute all 16- and 17-year-olds as adults, incarcerating them in adult jails and prisons, severely affecting their re-entry, rehabilitation, and social development. <a href="http://raisetheageny.com/">Raise the Age NY</a> is a campaign that supports a comprehensive approach to raising the age of criminal responsibility in New York State.</p>
                            <p>At ScAAN, we are compiling scientific evidence for Raise the Age NY on brain development and on the effectiveness of adolescent intervention, and are producing infographics appropriate for public communications. We recently delivered a <a href="docs/ScAAN_NYCC_RTA_testimony.pdf" download>statement <i class="fa fa-file-pdf-o"></i></a><!--  [<a data-toggle="collapse" href="#rtaVideo" aria-expanded="false" aria-controls="rtaVideo">video <i class="fa fa-angle-down"></i></a>, <a href="docs/ScAAN_NYCC_RTA_testimony.pdf" download>pdf <i class="fa fa-download"></i></a>] --> on this topic to a joint committee meeting of the New York City Council:</p>
                            <!-- <div class="collapse show" id="rtaVideo"> -->
	                            <div class="videoWrapperWrapper">
		                            <div class="videoWrapper">
			                            <iframe src="https://www.youtube.com/embed/wxQ4FQhnqrY?modestbranding=1" frameborder="0" allowfullscreen></iframe>
		                            </div>
	                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
				</div>
				<div class="card bottomcard">
                    <div class="card-header not-top-card-header" role="tab">
                        <h4 class="mb-0">
                        	<a data-toggle="collapse" href="#met" aria-controls="met" aria-expanded="false">
	                        	Metropolitan Council on Housing <i class="fa fa-angle-down"></i>
							</a>
                    	</h4>
                    </div>
                    <div id="met" class="collapse" role="tabpanel">
                        <div class="card-block">
                            <a href="http://metcouncilonhousing.org/"><img class="projectpartnerlogo" src="logos/met.png"></a>
                        
                            <p>The <a href="http://metcouncilonhousing.org/">Metropolitan Council on Housing</a> is a tenants' rights organization that has been fighting for safe, decent, and affordable housing in New York City for over 50 years. Every year, thousands of New Yorkers use the Council's telephone hotline or walk-in clinic to get assistance with their housing.</p>
                            <p>At ScAAN, we are helping the Council understand the people they serve in order to better address their needs. We are also producing reports that the Council can use in their campaigns to strengthen rent regulation laws.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    
    <div class="row">
        <div class="col-md-6">
	        <h2>Contact Us</h2>
            Email us at <a href="mailto:info@scaan.net">info@scaan.net</a> or use the contact form if you are:
            <ul>
                <li>a scientist who wants to get involved</li>
                <li>an organization that is interested in partnering with us on a project</li>
            </ul>
            <p>
            <form id="contact-form" method="post" action="scripts/contact.php" role="form">
                <div class="controls">
                    <div class="form-group">
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Your name is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="A valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="A message is required."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="messages"></div>
                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                </div>
            </form>
            </p>
        </div>
        <div class="col-md-6">
        <h2>Upcoming Events</h2>
            <div id='calendar'></div>
			
	            
				<div id="addGCal">

					 <!-- go to google calendar -->
					<a href="https://calendar.google.com/calendar/embed?src=nyu.edu_ifm76t83fckh8jviji92irkjk8@group.calendar.google.com&ctz=America/New_York">
			            <img border="0" src="https://www.google.com/calendar/images/ext/gc_button1_en.gif">
		            </a>            


					<!-- add google calendar hack -->
					<!-- <a href="https://calendar.google.com/calendar/render?cid=nyu.edu_ifm76t83fckh8jviji92irkjk8@group.calendar.google.com" target="_blank">
						<img src="logos/gcal.gif">
					</a> -->
				</div>

			

	        <!-- embed google calendar (ugly)
	        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=349&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=nyu.edu_ifm76t83fckh8jviji92irkjk8%40group.calendar.google.com&amp;color=%2329527A&amp;ctz=America%2FNew_York" style="border-width:0" width="100%" height="349px" frameborder="0" scrolling="yes"></iframe> -->

        </div>
    </div>


    <hr>

    <h2>Members</h2>
    <div id="members" class="row">
        <div class="col-md">
            <div class="media member">
                <img class="d-flex align-self-start mr-3 rounded headshot" src="headshots/will2_sq.jpg">
                <div class="media-body bio">
                    <h4 class="mt-0">
                        <a href="http://wtadler.com/" title="wtadler.com">William T. Adler</a>
                        <a class="email" href="mailto:will@wtadler.com" title="will@wtadler.com">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </h4>
                    <p>Will is the founder of ScAAN and a predoctoral fellow in the Center for Neural Science at NYU. He is passionate about building a network of volunteer scientists, and founded ScAAN to bridge the gap between scientists and organizations working for the public good. Will is particularly interested in issues relating to criminal justice and electoral reform.</p>
                </div>
            </div>
            <div class="media member">
                <img class="d-flex align-self-start mr-3 rounded headshot" src="headshots/weiji_sq.jpg">
                <div class="media-body bio">
                    <h4 class="mt-0">
                        Wei Ji Ma, PhD
                        <a class="email" href="mailto:weijima@nyu.edu" title="weijima@nyu.edu">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </h4>
                    <p>Wei Ji is an associate professor of neural science and psychology at NYU, where <a href="http://www.cns.nyu.edu/malab/" title="Ma Lab">his research group</a> studies human decision-making, perception, and working memory. He is the first author of an upcoming textbook on mathematical models of behavior. Wei Ji has long-standing interests in education policy, non-profit management, and science outreach. He is the co-founder and chairman of the board of the <a href="http://ruralchina.org" title="Rural China Education Foundation">Rural China Education Foundation</a>, a 501(c)(3) non-profit organization which aims to improve the quality of primary education in rural China through student-centered teaching methods, community-based content, and sustainable teacher professional development.</p>
                </div>
            </div>
            <div class="media member">
                <img class="d-flex align-self-start mr-3 rounded headshot" src="headshots/jenn_sq.jpg">
                <div class="media-body bio">
                    <h4 class="mt-0">Jenn Laura Lee
                        <a class="email" href="mailto:jenn.laura.lee@gmail.com" title="jenn.laura.lee@gmail.com">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </h4>

                    <p>Jenn is a predoctoral fellow in the Center for Neural Science at NYU. She is spearheading ScAAN's project with Raise the Age NY, providing scientific support for legislation that would raise the age at which juveniles are tried as adults in New York State. She is interested in working with public advocacy groups in general.</p>
                </div>
            </div>

            <div class="media member">
                <img class="d-flex align-self-start mr-3 rounded headshot" src="headshots/leana_sq.jpg">
                <div class="media-body">
                    <h4 class="mt-0">Leana King
                        <a class="email" href="mailto:lek338@nyu.edu" title="lek338@nyu.edu">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </h4>

                    <p>Leana is a neural science student and researcher at NYU, and is interested in how good design can produce effective advocacy.</p>
                </div>
            </div>

        </div>


            
        <div class="col-md">
            <div class="media member">
                <img class="d-flex align-self-start mr-3 rounded headshot" src="headshots/silvia2_sq.jpg">
                <div class="media-body bio">
                    <h4 class="mt-0">
                        Silvia Lopez-Guzman, MD
                        <a class="email" href="mailto:slg471@nyu.edu" title="slg471@nyu.edu">
                            <i class="fa fa-envelope"></i>
                        </a>

                    </h4>
                    <p>Silvia is a predoctoral fellow at the Center for Neural Science at NYU, where she studies the connection between drug addiction and decision-making. She is interested in supporting advocacy groups fighting against juvenile incarceration, racial profiling, and the criminalization of drug addiction. She is working on an initiative to connect public defenders with scientific expert witnesses.</p>
                </div>
            </div>

            <div class="media member">
                <img class="d-flex align-self-start mr-3 rounded headshot" src="headshots/milenna_sq.jpg">
                <div class="media-body bio">
                    <h4 class="mt-0">Milenna van Dijk, MSc
                        <a class="email" href="mailto:milenna.vandijk@gmail.com" title="milenna.vandijk@gmail.com">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </h4>

                    <p>Milenna is a predoctoral fellow in neuroscience at the NYU School of Medicine. She is working on ScAAN’s Raise the Age project, and is also interested in supporting campaigns that work to restrict solitary confinement. Specifically, she is gathering research findings that demonstrate the trauma and long-term negative consequences of solitary confinement of juveniles and of juveniles being held in adult jails and prisons.</p>
                </div>
            </div>

            <div class="media member">
                <img class="d-flex align-self-start mr-3 rounded headshot" src="headshots/eg_sq.jpg">
                <div class="media-body">
                    <h4 class="mt-0">EG Gaffin-Cahn, MSc
                        <a class="email" href="mailto:eg.gc@nyu.edu" title="eg.gc@nyu.edu">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </h4>

                    <p>EG is a predoctoral candidate in psychology at NYU. He is a promoter of open access and uncensored government-funded research. He is also interested in building the public's trust in science as a means to improving the long-term well-being of our society.</p>
                </div>
            </div>



            <div class="media member">
                <img class="d-flex align-self-start mr-3 rounded headshot" src="headshots/px.png" height=1>
                <div class="media-body">
                    <h4 class="mt-0">David Halpern</h4>
                </div>
            </div>

            <div class="media member">
                <img class="d-flex align-self-start mr-3 rounded headshot" src="headshots/px.png" height=1>
                <div class="media-body">
                    <h4 class="mt-0">William F. Broderick</h4>
                </div>
            </div>

            <div class="media member">
                <img class="d-flex align-self-start mr-3 rounded headshot" src="headshots/px.png" height=1>
                <div class="media-body">
                    <h4 class="mt-0">Owen Marschall</h4>
                </div>
            </div>

            <div class="media member">
                <img class="d-flex align-self-start mr-3 rounded headshot" src="headshots/px.png" height=1>
                <div class="media-body">
                    <h4 class="mt-0">Andra Mihali</h4>
                </div>
            </div>

        </div>
    </div>


    <hr>
    <footer>
        <p>&copy; Scientist Action and Advocacy Network <?php echo date("Y"); ?></p>
    </footer>

</div> <!-- /.container-->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>

<!-- contact form JavaScript -->
<script src="scripts/contactvalidator.js"></script>
<script src="scripts/contact.js"></script>
</body>
</html>

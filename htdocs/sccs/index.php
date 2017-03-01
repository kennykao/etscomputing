<?php include 'db.php';?>
<?php include 'schedule.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/favicon.ico">

	<title>Student Computer Consulting Services</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Custom styles for this template-->
      <link href="css/carousel.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/styles.css" rel="stylesheet">

      <!-- Fonts -->
      <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>

    </head>

<!-- NAVBAR
	================================================== -->
	<body data-spy="scroll" data-target=".navbar-collapse">
		<div id = "home" class="navbar-wrapper anchor_offset">
			<div class="container">

				<div id = "navbar" class="navbar navbar-default navbar-fixed-top nav_transparent" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="http://ets.berkeley.edu/"><img id = "logo" src = "images/logo.png"></a>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav" style="font-family: Lato;">
								<li id = "home_nav" class="active"><a class = "smoothScroll link_fade" href="#home">HOME</a></li>
								<li id = "hours_nav"><a class = "smoothScroll link_fade" href="#hours_locations">WHO WE ARE</a></li>
								<li id = "services_nav"><a class = "smoothScroll link_fade" href="#services">OUR LOCATION</a></li>
								<li id = "jobs_nav"><a class = "smoothScroll link_fade" href="#jobs">OUR SERVICES</a></li>
								<li id = "contact_nav"><a class = "smoothScroll link_fade" href="#contactus">CONTACT US</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
    <!-- HEADER IMAGE + HOURS -->
    <div class="header-image">
      <div class="table-position">
        <table class ="table_center table_wider">

          <tr>
          <td>Sunday</td>
            <td>
              <?php
              echo getHours($week[0], 4)
              ?></td>
            </tr>
            <tr>
              <td>Monday</td>
              <td>
                <?php
                echo getHours($week[1], 4)
                ?></td>
              </tr>
              <tr>
                <td>Tuesday</td>
                <td>
                  <?php
                  echo getHours($week[2], 4)
                  ?></td>
                </tr>
                <tr>
                  <td>Wednesday</td>
                  <td>
                    <?php
                    echo getHours($week[3], 4)
                    ?></td>
                  </tr>
                  <tr>
                    <td>Thursday</td>
                    <td>
                      <?php
                      echo getHours($week[4], 4)
                      ?></td>
                    </tr>
                    <tr>
                      <td>Friday</td>
                      <td>
                        <?php
                        echo getHours($week[5], 4)
                        ?></td>
                      </tr>
                      <tr>
                        <td>Saturday</td>
                        <td>
                          <?php
                          echo getHours($week[6], 4)
                          ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>

                  <!-- WHO WE ARE SECTION -->
                  <div class ="who-we-are-sccs">
                   <div id ="jobs" class="row featurette anchor_offset2">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                     <img class="featurette-image img-responsive" src="images/Consultant_Vibrant-compressor.jpg" alt="Generic placeholder image">
                   </div>
                   <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                     <h2 class="featurette-heading">What is SCCS?</h2>
                     <p class="lead">We are a group of computer consulants here to help any current Cal student, faculty, campus staff, postdoc, or visiting scholars with software and campus network issues on their personal devices (laptops, iOS, android, iPad, etc).</p>
                     <p><a class="btn btn-default" href="jobs" role0="button">More information &raquo;</a></p>

                   </div>
                 </div>
               </div>

               <!-- OUR LOCATION -->
               <div class ="sccs-location">
                 <div id ="jobs" class="row featurette anchor_offset2">
                   <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                     <h2 class="featurette-heading">Where are we located?</h2>
                     <p class="lead">We are located in Moffitt Library on the first floor behind the main ETS consultant desk. If you have any trouble locating us, please ask the student consultants at the front and they can direct you to the SCCS help desk.</p>
                     <p><a class="btn btn-default" href="jobs" role0="button">More information &raquo;</a></p>

                   </div>
                   <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                     <?xml version="1.0" encoding="utf-8"?>
                     <!-- Generator: Adobe Illustrator 18.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                     <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="-49 51 600 600" enable-background="new -49 51 600 600" xml:space="preserve">
                     <g>
                      <g>
                        <path fill="#5A5A5A" d="M-8.1,154.5c28.4-0.1,56.8-0.1,85.2-0.2c61.7-0.1,123.4-0.2,185-0.3c59.7-0.1,119.5-0.2,179.2-0.3
                        c23,0,46-0.1,69-0.1c-0.4-0.4-0.8-0.8-1.2-1.2c0,34.8,0,69.6,0,104.4c0,64.1,0,128.2,0,192.3c0,33,0,66,0,99
                        c0.4-0.4,0.8-0.8,1.2-1.2c-28.3,0-56.6,0-84.9,0c-61.6,0-123.2,0-184.7,0c-59.8,0-119.7,0-179.5,0c-23.4,0-46.8,0-70.2,0
                        c0.4,0.4,0.8,0.8,1.2,1.2c0-34.3,0-68.6,0-102.9c-0.4,0.4-0.8,0.8-1.2,1.2c4.7,0,9.4,0,14.2,0c0.7,0,1.2-0.6,1.2-1.2
                        c0-49.9,0-99.8,0-149.7c0-8.7,0-17.3,0-26c0-0.7-0.6-1.2-1.2-1.2c-4.4,0-8.8,0-13.2,0c0.4,0.4,0.8,0.8,1.2,1.2
                        c0-38.7,0-77.4,0-116.2c0-1.6-2.5-1.6-2.5,0c0,38.7,0,77.4,0,116.2c0,0.7,0.6,1.2,1.2,1.2c4.4,0,8.8,0,13.2,0
                        c-0.4-0.4-0.8-0.8-1.2-1.2c0,49.9,0,99.8,0,149.7c0,8.7,0,17.3,0,26c0.4-0.4,0.8-0.8,1.2-1.2c-4.7,0-9.4,0-14.2,0
                        c-0.7,0-1.2,0.6-1.2,1.2c0,34.3,0,68.6,0,102.9c0,0.7,0.6,1.2,1.2,1.2c28.3,0,56.6,0,84.9,0c61.6,0,123.2,0,184.7,0
                        c59.8,0,119.7,0,179.5,0c23.4,0,46.8,0,70.2,0c0.7,0,1.2-0.6,1.2-1.2c0-34.8,0-69.6,0-104.4c0-64.1,0-128.2,0-192.3
                        c0-33,0-66,0-99c0-0.7-0.6-1.3-1.2-1.2c-28.4,0.1-56.8,0.1-85.2,0.2c-61.7,0.1-123.4,0.2-185,0.3c-59.7,0.1-119.5,0.2-179.2,0.3
                        c-23,0-46,0.1-69,0.1C-9.7,152-9.7,154.5-8.1,154.5z"/>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path fill="#5A5A5A" d="M198.4,153.3c0,41.2,0,82.5,0,123.7c0,0.7,0.6,1.2,1.2,1.2c49.1,0,98.3,0,147.4,0c18.5,0,37.1,0,55.6,0
                        c-0.4-0.4-0.8-0.8-1.2-1.2c0,18.6,0,37.1,0,55.7c0,0.7,0.6,1.2,1.2,1.2c23.6,0,47.2,0,70.8,0c-0.4-0.4-0.8-0.8-1.2-1.2
                        c0,12,0,23.9,0,35.9c0.4-0.4,0.8-0.8,1.2-1.2c-23.6,0-47.2,0-70.8,0c-0.7,0-1.2,0.6-1.2,1.2c0,14.5,0,29,0,43.4
                        c0,0.7,0.6,1.2,1.2,1.2c35.3,0,70.5,0,105.8,0c1.6,0,1.6-2.5,0-2.5c-35.3,0-70.5,0-105.8,0c0.4,0.4,0.8,0.8,1.2,1.2
                        c0-14.5,0-29,0-43.4c-0.4,0.4-0.8,0.8-1.2,1.2c23.6,0,47.2,0,70.8,0c0.7,0,1.2-0.6,1.2-1.2c0-12,0-23.9,0-35.9
                        c0-0.7-0.6-1.2-1.2-1.2c-23.6,0-47.2,0-70.8,0c0.4,0.4,0.8,0.8,1.2,1.2c0-18.6,0-37.1,0-55.7c0-0.7-0.6-1.2-1.2-1.2
                        c-49.1,0-98.3,0-147.4,0c-18.5,0-37.1,0-55.6,0c0.4,0.4,0.8,0.8,1.2,1.2c0-41.2,0-82.5,0-123.7
                        C200.9,151.7,198.4,151.7,198.4,153.3L198.4,153.3z"/>
                      </g>
                    </g>
                    <g>
                      <polyline fill="#5A5A5A" points="370.1,408.2 370.1,305.8 200.2,305.8 200.2,306.3 200.2,408.7 370.1,408.7  "/>
                    </g>
                    <g>
                      <polyline fill="#5A5A5A" points="176.6,385.3 176.6,327 119.4,327 119.4,327.3 119.4,385.6 176.6,385.6  "/>
                    </g>
                    <g>
                      <g>
                        <path fill="#5A5A5A" d="M176.8,309.5c0-4.2,0-8.5,0-12.7c0-0.1-0.1-0.2-0.2-0.2c-19,0-38.1,0-57.1,0c-0.1,0-0.3,0.1-0.2,0.2
                        c0,4.2,0,8.5,0,12.7c0,0.1,0.1,0.2,0.2,0.2c19,0,38.1,0,57.1,0c0.3,0,0.3-0.5,0-0.5c-11.8,0-23.7,0-35.5,0c-6.4,0-12.7,0-19.1,0
                        c-0.7,0-1.3,0-2,0c-0.7,0-0.3,0.2-0.3-0.1c0-3.5,0-6.9,0-10.4c0-1.9-0.7-1.8,0.8-1.8c2.3,0,4.5,0,6.8,0c7.6,0,15.1,0,22.7,0
                        c7.1,0,14.3,0,21.4,0c1.6,0,3.2,0,4.8,0c0.5,0,0.1-0.3,0.1,0.5c0,1.9,0,3.7,0,5.6c0,2.1,0,4.2,0,6.3
                        C176.3,309.8,176.8,309.8,176.8,309.5L176.8,309.5z"/>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path fill="#5A5A5A" d="M510.1,441.7c-40.6,0-81.1,0-121.7,0c-57.6,0-115.2,0-172.8,0c-6.4,0-12.8,0-19.2,0
                        c-0.7,0-1.2,0.6-1.2,1.2c0,34.9,0,69.9,0,104.8c0,1.6,2.5,1.6,2.5,0c0-34.9,0-69.9,0-104.8c-0.4,0.4-0.8,0.8-1.2,1.2
                        c40.6,0,81.1,0,121.7,0c57.6,0,115.2,0,172.8,0c6.4,0,12.8,0,19.2,0C511.7,444.2,511.7,441.7,510.1,441.7L510.1,441.7z"/>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path fill="#5A5A5A" d="M5.2,446.3c32.3,0,64.7,0,97,0c-0.4-0.4-0.8-0.8-1.2-1.2c0,34.2,0,68.5,0,102.7c0,1.6,2.5,1.6,2.5,0
                        c0-34.2,0-68.5,0-102.7c0-0.7-0.6-1.2-1.2-1.2c-32.3,0-64.7,0-97,0C3.6,443.8,3.6,446.3,5.2,446.3L5.2,446.3z"/>
                      </g>
                    </g>
                    <text transform="matrix(1 0 0 1 337.5635 200.4932)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">MEDIA </text>
                    <text transform="matrix(1 0 0 1 337.5635 214.0912)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">RESOURCES</text>
                    <text transform="matrix(1 0 0 1 337.5635 227.6892)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">CENTER</text>
                    <text transform="matrix(1 0 0 1 59.9346 203.3262)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">ETS </text>
                    <text transform="matrix(1 0 0 1 59.9346 216.9242)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">COMPUTER</text>
                    <text transform="matrix(1 0 0 1 59.9346 230.5222)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">FACILITIES</text>
                    <text transform="matrix(1 0 0 1 38.9248 360.5547)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">STUDY</text>
                    <text transform="matrix(1 0 0 1 38.9248 374.1527)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">SPACE</text>
                    <text transform="matrix(1 0 0 1 92.75 322.3096)" fill="#EDBF38" font-family="'Montserrat-Regular'" font-size="11.3317">SCCS</text>
                    <g>
                      <text transform="matrix(1 0 0 1 129.8154 489.4521)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">STUDY</text>
                      <text transform="matrix(1 0 0 1 129.8154 503.0501)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">SPACE</text>
                    </g>
                    <text transform="matrix(1 0 0 1 379.1006 502.2734)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">ROOM 145</text>
                    <text transform="matrix(1 0 0 1 12.7207 498.8955)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">ROOM 150D</text>
                    <g>
                      <g>
                        <path fill="#5A5A5A" d="M402.7,301.8c16,0,32,0,48,0c2.7,0,5.4,0,8.1,0c0.8,0,0.3-0.4,0.3,0.4c0,1.6,0,3.1,0,4.7c0,8,0,16,0,23.9
                        c0,0.3,0.5,0.3,0.5,0c0-9.8,0-19.5,0-29.3c0-0.1-0.1-0.2-0.2-0.2c-18.9,0-37.8,0-56.7,0C402.4,301.3,402.4,301.8,402.7,301.8
                        L402.7,301.8z"/>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path fill="#5A5A5A" d="M147.6,309.1c0,9.7,0,19.4,0,29c0,0.3,0.5,0.3,0.5,0c0-9.7,0-19.4,0-29
                        C148.1,308.8,147.6,308.8,147.6,309.1L147.6,309.1z"/>
                      </g>
                    </g>
                    <g>
                      <line fill="none" stroke="#5A5A5A" stroke-width="0.5" stroke-miterlimit="10" x1="452.1" y1="370.4" x2="452.1" y2="410"/>
                      <line fill="none" stroke="#5A5A5A" stroke-width="0.5" stroke-miterlimit="10" x1="449" y1="370.4" x2="449" y2="410"/>
                      <line fill="none" stroke="#5A5A5A" stroke-width="0.5" stroke-miterlimit="10" x1="445.9" y1="370.4" x2="445.9" y2="410"/>
                      <line fill="none" stroke="#5A5A5A" stroke-width="0.5" stroke-miterlimit="10" x1="442.8" y1="370.4" x2="442.8" y2="410"/>
                      <line fill="none" stroke="#5A5A5A" stroke-width="0.5" stroke-miterlimit="10" x1="439.7" y1="370.4" x2="439.7" y2="410"/>
                      <line fill="none" stroke="#5A5A5A" stroke-width="0.5" stroke-miterlimit="10" x1="436.6" y1="370.4" x2="436.6" y2="410"/>
                      <line fill="none" stroke="#5A5A5A" stroke-width="0.5" stroke-miterlimit="10" x1="433.5" y1="370.4" x2="433.5" y2="410"/>
                      <line fill="none" stroke="#5A5A5A" stroke-width="0.5" stroke-miterlimit="10" x1="430.4" y1="370.7" x2="430.4" y2="410.4"/>
                      <line fill="none" stroke="#5A5A5A" stroke-width="0.5" stroke-miterlimit="10" x1="427.3" y1="370.7" x2="427.3" y2="410.4"/>
                    </g>
                    <g>
                      <text transform="matrix(1 0 0 1 418.7734 396.9082)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">STAIRS</text>
                    </g>
                    <g>
                      <text transform="matrix(1 0 0 1 408.1504 319.7109)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">ELEVATORS</text>
                    </g>
                    <g>
                      <text transform="matrix(1 0 0 1 116.1504 291.7109)" fill="#5A5A5A" font-family="'Montserrat-Regular'" font-size="11.3317">HELP DESK</text>
                    </g>
                    <g>
                      <g>
                        <path fill="#5A5A5A" d="M302.4,153.3c0,40.9,0,81.8,0,122.8c0,0.3,0.5,0.3,0.5,0c0-40.9,0-81.8,0-122.8
                        C302.9,153,302.4,153,302.4,153.3L302.4,153.3z"/>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path fill="#5A5A5A" d="M303.3,443.2c0,34.9,0,69.9,0,104.8c0,0.3,0.5,0.3,0.5,0c0-34.9,0-69.9,0-104.8
                        C303.8,442.9,303.3,442.9,303.3,443.2L303.3,443.2z"/>
                      </g>
                    </g>
                    <circle fill="#EDBF38" cx="132.3" cy="318.3" r="3.9"/>
                  </svg>

                </div>

              </div>
            </div>

            <!-- OUR SERVICES -->
            <div class="container sccs-services">
              <div class="row">
                <h2>OUR SERVICES</h2>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <!-- Generator: Adobe Illustrator 18.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                  <svg width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="-274 276 150 150" enable-background="new -274 276 150 150" xml:space="preserve">
                  <g>
                    <path fill="black" d="M-231,325c0,0,0-27.5,0-41.1c0-4.7,5-3.9,8.1-3.9c6.8,0,13.6,0,20.4,0c18,0,36,0,54,0c5.4,0,10.8,0,16.2,0
                    c2.9,0,2.3,2.6,2.3,4.9c0,31.2,0,62.4,0,93.7c0,6,0,12.1,0,18.1c0,4.5,0.3,9.5-0.5,13.9c-0.2,1-13.7,0.4-15.5,0.4
                    c-9,0-17.9,0-26.9,0c-3.5,0-7.1,0-11.1,0c-2,0-2,3,0,3c14,0,28.8,0,42.9,0c3,0,10.6,1.6,12.9-1.1c2.8-3.2,1.2-9.8,1.2-14
                    c0-31.6,0-63.2,0-94.8c0-5.8,0-11.5,0-17.2c0-2.6,0.8-8-0.9-9.8c-1.5-1.5-7.3-1-9.1-1c-7.1,0-14.2,0-21.3,0c-17.9,0-35.8,0-53.7,0
                    c-5,0-10,0-15,0c-4.7,0-8,2.3-8,7.5c0,13.8,0,27.5,0,41.5C-235,327-231,327-231,325C-231,325-231,327-231,325z"/>
                    <path fill="black" d="M-182.1,378c-0.4,24.1-19.6,43.3-43.7,43.7c-24.1,0.4-43.3-20.2-43.7-43.7c-0.4-24.1,20.2-43.3,43.7-43.7
                    C-201.7,333.9-182.5,354.5-182.1,378c0,2.2,3.5,2.2,3.4,0c-0.4-24.3-18.4-44-42.4-46.9c-24.4-3-46.7,15.1-51.2,38.6
                    c-4.6,23.8,10.9,46.9,33.6,53.7c23.3,7,47.7-6.4,56.7-28.3c2.2-5.4,3.1-11.3,3.2-17.1C-178.6,375.8-182.1,375.8-182.1,378z"/>
                    <path fill="black" d="M-216.8,378.6c-0.6,10.9-16.3,10.9-16.9,0C-234.3,367.7-217.4,367.8-216.8,378.6c0.1,2.2,3.6,2.2,3.4,0
                    c-0.4-6.7-5.2-11.5-11.9-11.9c-6.7-0.4-11.5,5.7-11.9,11.9c-0.4,6.7,5.7,11.5,11.9,11.9c6.7,0.4,11.5-5.7,11.9-11.9
                    C-213.3,376.4-216.7,376.4-216.8,378.6z"/>
                    <path fill="black" d="M-225.6,395.3c-9.4,0-17.1-7.7-17.1-17.1c0-9.4,7.7-17.1,17.1-17.1c9.4,0,17.1,7.7,17.1,17.1
                    C-208.6,387.6-216.2,395.3-225.6,395.3z M-225.6,362.3c-8.8,0-15.9,7.1-15.9,15.9c0,8.8,7.1,15.9,15.9,15.9
                    c8.8,0,15.9-7.1,15.9-15.9C-209.7,369.4-216.9,362.3-225.6,362.3z"/>
                    <path fill="black" d="M-232,319c0,0,68.5,0,103,0c-0.6,0-1-1-1-1.6c0,20.2,0,40.5,0,60.7c0-0.6,0.5-1.1,1-2.1c-14.6,0-30,0-44,0
                    c-3,0-3,3,0,3c14,0,29.4,0,44,0c0.9,0,2,0.1,2-0.9c0-20.2,0-40.5,0-60.7c0-0.9-1-1.4-2-1.4c-34.6,0-69,0-103,0
                    C-235,316-235,319-232,319C-232,319-235,319-232,319z"/>
                  </g>
                </svg>
                <div>
                  <h4>Software Installation</h4>
                </div>
                <div>
                  Microsoft Office 2013/2010 (for Windows) and 2011 (for Mac) are provided to UCB students and staff at no costs. Please click here to access the download on Berkeley's available software page.
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <?xml version="1.0" encoding="utf-8"?>
                <!-- Generator: Adobe Illustrator 18.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="-274 276 150 150" enable-background="new -274 276 150 150" xml:space="preserve">
                <g>
                  <path fill="#000" d="M-185.8,397.1c0,7.4-6,13.5-13.5,13.5c-7.4,0-13.5-6-13.5-13.5c0-7.4,6-13.5,13.5-13.5
                  C-191.8,383.6-185.8,389.6-185.8,397.1z"/>
                  <path fill="#000" d="M-130.1,329.7c-36.9-39.5-99.1-41.6-138.6-4.7l-5.4-5.8c42.7-39.9,109.8-37.6,149.7,5L-130.1,329.7z"/>
                  <path fill="#000" d="M-147.3,348.6c-13.6-14.5-31.9-22.9-51.7-23.5c-19.8-0.6-38.7,6.4-53.2,20l-5.4-5.8
                  c16-15,37-22.9,58.9-22.1c21.9,0.7,42.2,10,57.2,26L-147.3,348.6z"/>
                  <path fill="#000" d="M-167.7,372c-17.1-18.3-45.9-19.3-64.3-2.2l-5.4-5.8c10.4-9.7,24-14.9,38.2-14.4
                  c14.2,0.5,27.4,6.5,37.2,16.9L-167.7,372z"/>
                </g>
              </svg>
              <div>
                <h4>Wifi Troubleshooting</h4>
              </div>
              <div>
                With the addition of two new campus networks, Eduroam and CalVisitor, network troubleshooting can get a little difficult. If you’re having any campus wifi issues, we’re here to help!
              </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <?xml version="1.0" encoding="utf-8"?>
              <!-- Generator: Adobe Illustrator 18.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
              <svg width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="-274 276 150 150" enable-background="new -274 276 150 150" xml:space="preserve">
              <g id="lock_1_">
                <path fill="#000" d="M-152.6,329.3c-2.9,0-5.8,0-8.6,0c0.5,0.6,1,1.3,1.4,1.9c2-11.5-1.5-25.4-6.9-35.6
                c-6.3-11.7-17.7-18.6-30.9-18.8c-13-0.2-23.8,7-30.4,17.8c-6,9.9-9.6,25-7.5,36.6c0.5-0.6,1-1.3,1.4-1.9c-4,0-15-1.6-15,5.1
                c0,2.8,0,5.6,0,8.5c0,15,0,29.9,0,44.9c0,10.5,0,21,0,31.5c0,8.6,16.6,5.9,21.6,5.9c25,0,49.9,0,74.9,0c5,0,5.5-4.9,5.5-8.6
                c0-5.3,0-10.7,0-16c0-15.8,0-31.5,0-47.3c0-5.3,0-10.7,0-16C-147.1,333.1-147.7,329.9-152.6,329.3c-1.9-0.2-1.9,2.8,0,3
                c4,0.5,2.5,8.2,2.5,10.5c0,6.8,0,13.6,0,20.3c0,15.3,0,30.6,0,45.8c0,3.4,0,6.9,0,10.3c0,4.2-7.2,2.9-9.4,2.9c-14.5,0-29,0-43.5,0
                c-12.5,0-25,0-37.5,0c-3.5,0-5.6-1.7-5.6-5.3c0-5.2,0-10.4,0-15.6c0-15.8,0-31.5,0-47.3c0-5.5,0-11,0-16.5c0-1,0-2.1,0-3.1
                c0-3.2,9.3-2.2,10.9-2.2c0.4,0,0.8,0,1.1,0c1,0,1.6-1,1.4-1.9c-1.9-10.2,1.5-23.1,6.1-32.2c5.7-11.3,16.2-18.1,28.9-18.4
                c12.4-0.2,22.4,6.8,28.4,17.3c5.2,9.1,8.4,22.8,6.6,33.3c-0.2,0.9,0.4,1.9,1.4,1.9c2.9,0,5.8,0,8.6,0
                C-150.6,332.3-150.6,329.3-152.6,329.3z"/>
                <path fill="#000" d="M-197.6,288.4c11,0.2,18.6,6.8,22.7,16.7c3.5,8.4,3.1,16.8,3.6,25.7c0.5-0.5,1-1,1.5-1.5
                c-18.5,0-37.1,0-55.6,0c0.5,0.5,1,1,1.5,1.5c0.6-9,0.3-17.1,3.6-25.7C-216.5,295.2-208.3,288.7-197.6,288.4c1.9,0,1.9-3,0-3
                c-10.8,0.2-19.1,5.9-24,15.4c-5.1,9.6-4.6,19.5-5.3,30c-0.1,0.8,0.7,1.5,1.5,1.5c18.5,0,37.1,0,55.6,0c0.8,0,1.5-0.7,1.5-1.5
                c-0.6-10.6-0.5-20.1-5.3-30c-4.6-9.5-13.5-15.1-24-15.4C-199.5,285.4-199.5,288.4-197.6,288.4z"/>
                <path fill="#000" d="M-209,395.5c2.3-6.2,4.6-12.4,6.9-18.6c0.2-0.6-0.2-1.3-0.7-1.7c-7.9-5.1-5-16.8,4.4-17.4
                c9.9-0.6,11.5,12.7,4.4,17.5c-0.5,0.3-0.9,1-0.7,1.7c2.3,6.2,4.6,12.4,6.9,18.6c0.5-0.6,1-1.3,1.4-1.9c-8,0-16.1,0-24.1,0
                c-1.9,0-1.9,3,0,3c8,0,16.1,0,24.1,0c0.9,0,1.8-1,1.4-1.9c-2.3-6.2-4.6-12.4-6.9-18.6c-0.2,0.6-0.5,1.1-0.7,1.7
                c10.4-6.8,6.6-22.3-5.9-23c-4.8-0.3-9.9,3.5-11.4,8c-1.9,5.9,0.3,11.7,5.4,15c-0.2-0.6-0.5-1.1-0.7-1.7c-2.3,6.2-4.6,12.4-6.9,18.6
                C-212.6,396.5-209.7,397.3-209,395.5z"/>
              </g>
            </svg>
            <div>
              <h4>VPN + Proxy Setup</h4>
            </div>
            <div>
              Looking to connect to an off campus VPN or proxy server? Click here to access instructions for both. If you're wondering what the difference is or need help running through the installation, come on by!
            </div>
          </div>
        </div>
      </div>

      <!-- CONTACT US -->
      <div class="hand_pic2 anchor_offset3" id="contactus">
        <div class = "container marketing">
         <div class="row featurette" style="margin-right:0;">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-left: 60px;">
           <h2 class="featurette-heading text-down container_pad_left" style="color:white;">Drop us a message!</h2>
           <p class="lead text-pad-right container_pad_left" style="color:white;">Please feel free to provide feedback on our services using the form below as well! Your feedback is what helps SCCS cater our services towards your needs. </p>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding:20px;">
           <br>
           <form id = "contact_form" class="center_form" style="text-align: right; margin-right: 50px;" action="contact.php" method="post">
            <input style="margin-bottom: 5px;" class="form_short" type="text" name="name" value="" placeholder="Full name goes here" required><br>
            <input style="margin-bottom: 5px;" class="form_short" type="email" name="email" value="" placeholder="Email address goes here" required><br>
            <textarea style="margin-bottom: 5px;" class="form_long" name="comments" value="" placeholder="Your message to us" required></textarea><br>
          <!-- <span id = "success_container" class = "hidden_success">
          <span style="margin-right:4px;"><img src = "images/check.png" height=25px style="margin-top:-3px;"></span>
          <span style="margin-right:15px; font-family: Montserrat; color: white; font-size: 15px;">SUCCESS!</span></span> --><input id ="submit_button" class="submit" type="submit" name="" value="SUBMIT">  
        </form>
        <br>&nbsp;
      </div>
    </div>
  </div><!-- /.container -->
</div>
<hr class="featurette-divider" style="border-top:0;">


<!-- /END THE FEATURETTES -->
<div class="container marketing anchor_offset4">

 <!-- FOOTER -->
 <footer style="margin-bottom: 25px;">
  <p class="pull-right"><a href="#home" class="smoothScroll">Back to top</a></p>
  <p>&copy; 2015 ETS Computer Facilities &middot; <a target="_blank" href="http://ets.berkeley.edu/help/computer-facility-policy">Computer Facility Policy</a> &middot; <a target ="_blank" href="http://ets.berkeley.edu/help/computer-facility-services-0">Computer Facility Services</a></p>
</footer>

</div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--<script src="http://getbootstrap.com/assets/js/docs.min.js"></script>-->
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/waypoints/waypoints.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- Navbar click stuff -->
    <script>
      $("#contact_form")[0].reset();
    	// $("a.smoothScroll").parent().click(
    	// 	function(){
     //            debugger;
    	// 		$('a.smoothScroll').parent().removeClass('active');
    	// 		$(this).addClass('active');
    	// 	}
    	// 	);

</script>
</body>
</html>

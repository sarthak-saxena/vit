<!DOCTYPE html>
<html ng-app="vitApp">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    
    <title>VIT University</title>
    <!-- CSS  -->
    <link href="css/materialize.css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" rel="stylesheet"/>

    <!-- SPELLS -->
    <!-- load angular and angular route via CDN -->
    <script src="js/angular.js"></script>
    <script src="js/angular-route.js"></script>
    <script src="js/script.js"></script>
  </head>

  <body ng-controller="mainController">
        
        <header>
          <nav class="nav-top-fixed" role="navigation">
            <div class="nav-wrapper">
              <a href="/vit" class="brand-logo"><img class="logo" src="/vit/images/logo.png"></a>
              <div>
                <ul class="hide-on-med-and-down right bottom">
                  <li><input type="text" class="searchbar" width="10px"></li>
                </ul>
                <ul class="hide-on-med-and-down right center">
                  <!-- Sidebar Trigger -->
                  <a href="#"><i class="mdi-action-search" style="height:30px"></i></a>
                </ul>
                <ul class="hide-on-med-and-down right center shift-events">
                  <!-- Sidebar Trigger -->
                  <a href="#" data-activates="nav-sidebar" class="button-events"><i class="mdi-av-playlist-add"></i></a>
                </ul>
              </div>
              <div class="row navrow">
                <div class="row">
                  <div class="col l10 nav-top-padding">
                    <ul class="hide-on-med-and-down center ">
                      <li><a href="/vit/about">ABOUT</a></li>
                    </ul>
                    <ul class="hide-on-med-and-down center ">
                      <li><a href="academics.html" class='dropdown-button' data-activates='dropdownacademics'>ACADEMICS</a></li>
                    </ul>
                    <ul class="hide-on-med-and-down center ">
                      <li><a href="research.html" class='dropdown-button' data-activates='dropdownresearch'>RESEARCH</a></li>
                    </ul>
                    <ul class="hide-on-med-and-down center ">
                      <li><a href="admissions.html" class='dropdown-button' data-activates='dropdownadmissions'>ADMISSIONS</a></li>
                    </ul>
                    <ul class="hide-on-med-and-down center ">
                      <li><a href="placements.html" class='dropdown-button' data-activates='dropdownplacements'>PLACEMENTS</a></li>
                    </ul>
                    <!--<ul class="hide-on-med-and-down center ">
                      <li><a href="campus.html" class='dropdown-button' data-activates='dropdowncampuslife'>CAMPUS LIFE</a></li>
                      <ul id='dropdownabout' class='dropdown-content'>
                        <li><a href="#!">Administrative offices</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Leadership</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Administrative Offices</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Timeline</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Infrastructure</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Careers</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Community outreach</a></li>
                      </ul>
                       <ul id='dropdownacademics' class='dropdown-content'>
                        <li><a href="#!">FFCS</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Schools</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Library</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Conference Facilities</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Computing Centers</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Smart Classrooms</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">International Relations</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">COE</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Honours and Awards</a></li>
                      </ul>
                        
                       <ul id='dropdownadmissions' class='dropdown-content'>
                        <li><a href="#!">Undergraduate</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Postgraduate</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Research</a></li>
                      </ul>
                    </ul>-->
                  </div>
                </div>
                <div class="row nav-top-bottom" style="color:black">
                  <ul class="hide-on-med-and-down right ">
                    <li><a href="#" class="nav-bottom-text-size">Alumni</a></li>
                  </ul>
                  <ul class="hide-on-med-and-down right ">
                    <li><a href="#" class="nav-bottom-text-size">Parents</a></li>
                  </ul>
                  <ul class="hide-on-med-and-down right ">
                    <li><a href="#" class="nav-bottom-text-size">Faculty/Staff</a></li>
                  </ul>
                  <ul class="hide-on-med-and-down right ">
                    <li><a href="#" class="nav-bottom-text-size">Students</a></li>
                  </ul>
                </div>
              </div>
              <!--navbar mobile-->
              <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
              <ul id="nav-mobile" class="side-nav white">
                <li><a href="#">Navbar Link</a></li>
              </ul>
              <!--sidebar events-->
              <ul id="nav-sidebar" class="side-nav white right">
                <div class="row">
                  <div class="col s12 nav-sidebar-text">
                    Events
                  </div>
                  <!--event-->
                  <div class="col s12">
                    <div class="row vitblue">
                      Fire in M block
                    </div>

                    <div class="row myblack" style="line-height: 1;">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    </div>
                    <div class="row vitgrey events-date-bottom-padding" style="line-height: 1;">
                12-JUN-2015
              </div>
                    <a href="#" class="events-sidenav-a"><i class="mdi-content-add-circle-outline right vitblue events-sidenav-height"></i></a>
                  </div>
                  <!--End event-->
                  <!--event-->
                  <div class="col s12">
                    <div class="row vitblue">
                      Fire in M block
                    </div>
                    <div class="row myblack" style="line-height: 1;">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    </div>
                    <div class="row vitgrey events-date-bottom-padding" style="line-height: 1;">
                12-JUN-2015
              </div>
                    <a href="#" class="events-sidenav-a"><i class="mdi-content-add-circle-outline right vitblue events-sidenav-height"></i></a>
                  </div>
                  <!--End event-->
                  <!--event-->
                  <div class="col s12">
                    <div class="row vitblue">
                      Fire in M block
                    </div>
                    <div class="row myblack" style="line-height: 1;">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    </div>
                    <div class="row vitgrey events-date-bottom-padding" style="line-height: 1;">
                12-JUN-2015
              </div>
                    <a href="#" class="events-sidenav-a"><i class="mdi-content-add-circle-outline right vitblue events-sidenav-height"></i></a>
                  </div>
                  <!--End event-->
                </div>
              </ul>
            </div>
          </nav>
          <!--End nav bar-->
      
      

      <script src="js/jquery-2.1.3.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/init.js"></script>
      <!-- MAIN CONTENT AND INJECTED VIEWS -->
      <div id="main">

          <!-- angular templating -->
          <!-- this is where content will be injected -->
          <div ng-view></div>

      </div>


      <!-- Footer -->
      <footer class="page-footer" style="background:#283B66">
        <div class="row">
          <div class="col l10 offset-l1">
          <div class="row">
            <div class="col l4">
              <h5 class="white-text">CONNECT WITH US</h5>
            </div>
            <div class="col l16">
            </div>
          </div>

          <div class="row">
            <div class="col l3 s12">
              <h5 class="white-text">Parents</h5>
              <ul>
                <li><a class="white-text footer-lighten-text" href="#!">Guest House</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">Hotels in vellore</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">Parent Login</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">Programmes Offered</a></li>
              </ul>
            </div>

            <div class="col l3 s12">
              <h5 class="white-text">VITians</h5>
              <ul>
                <li><a class="white-text footer-lighten-text" href="#!">VIT Intranet </a></li>
                <li><a class="white-text footer-lighten-text" href="#!">VIT Webmail</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">VIT Gmail</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">Student Login</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">People Orbit</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">Industrial Visit(Format and Guidelines)</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">Alumni</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">Lab / Facilities</a></li>
              </ul>
            </div>

            <div class="col l3 s12">
              <h5 class="white-text">Visitors</h5>
              <ul>
                <li><a class="white-text footer-lighten-text" href="#!">To apply for Transcripts</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">To apply for Medium of Instruction Certificate / Migration Certificate</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">Careers@VIT</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">IQAC</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">Women Cell</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">IPR Cell</a></li>
                <li><a class="white-text footer-lighten-text" href="#!">Past Events</a></li>
                <li><a class="white-text footer-lighten-text" href="#">Vellore Campus Map</a></li>
              </ul>
            </div>

            <div class="col l3 s12">
              <h5 class="white-text">Contact Us</h5>
              <ul>
                <li class="white-text footer-lighten-text"><i class="mdi-image-landscape  white-text"></i> Vellore Institute of Technology, Near Katpadi Rd Vellore,<br>Tamil Nadu - 632014</li><br>
                <li class="white-text footer-lighten-text">
                  <i class="mdi-communication-phone white-text"></i> +91 416 2243091/93</li><br>
                <li class="white-text footer-lighten-text"><i class="mdi-communication-email white-text"></i> info@vit.ac.in</li>
              </ul>
            </div>
          </div>
        </div>

        </div>

        <div class="footer-copyright">
          <div class="row">

            <div class="col l12 offset-l1">Copyright&copy; <a class="grey-text text-lighten-3" href="">VIT University</a></div>
          </div>
        </div>

      </footer>
      <!-- END Footer -->
     
     <script src="js/route-styles.js"></script>

  </body>

</html>
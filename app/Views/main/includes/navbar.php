<div class="page-content container-fluid">
<!---------------------------------------------------------------------Top navbar--------------------------------------------------------------------------------->
    <div class="row bg-maroon">
        <div class="nav-top container">
            <div class=" row">                
                <!----------------------------------This is Display for all Screens--------------------------------------->
                <div class="col-md-12 d-flex center-content-around">
                <ul class="d-block d-sm-block d-md-block nav">
                            <li class="nav-item dropdown">
                               <a class="dropdown-item" href="#" >admin@livestockmarkets.com </a>
                            </li>
                    </ul>
                <ul class="d-block d-sm-block d-md-block nav">
                            <li class="nav-item dropdown">
                               <a class="dropdown-item" href="#" >0711648268</a>
                            </li>
                    </ul>
                     <ul class="d-block d-sm-block d-md-block nav">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" target="_blank" href="<?php echo base_url();?>markets/login" >Login</a>  
                            </li>
                    </ul>
                    <ul class="d-block d-sm-block d-md-block nav">
                            <li class="nav-item dropdown">
                               <a class="dropdown-item" href="<?php echo base_url();?>markets/register" >Register</a>
                            </li>
                    </ul>
                <!----------------------------------This is Display for Small Screens Only--------------------------------------->
                    <ul class="d-block d-sm-block d-md-none nav">
                             <li class="text-white nav-item">
                                    <a class="dropdown-item" href="<?php echo base_url();?>admissions/programmes" >Courses</a>                                 </li>
                             </li>
                    </ul>
                <!----------------------------------This is Display for all Screens--------------------------------------->
                    <ul class="d-block d-sm-block d-md-block nav">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" target="_blank" href="https://webmail.tseikurutti.ac.ke/">Staff Mail</a>
                            </li>
                    </ul>
                    <ul class="d-none d-sm-none d-md-block nav">
                            <li class="nav-item dropdown">
                                  <a class="dropdown-item" target="_blank" href="https://197.138.83.200/tseikuru/login">Staff Portal</a>  
                            </li>
                    </ul>
                    <ul class="d-none d-sm-none d-md-block nav">
                            <li class="nav-item dropdown">
                                  <a class="dropdown-item" target="_blank" href="https://197.138.83.200/tseikuru/login">Student Portal</a>  
                            </li>
                    </ul>
                    <ul class="d-block d-sm-block nav">
                            <li class="nav-item dropdown float-right">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Downloads</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php echo base_url();?>downloads/staff" >Staff Downloads</a>
                                    <a class="dropdown-item" href="<?php echo base_url();?>downloads/student">Student Downloads</a>
                                </div>
                            </li>
                     </ul>
                     
                     <!----------------------------------This is Display for Small Screens Only--------------------------------------->
                    <ul class="d-block d-sm-block d-md-none nav">
                                 <li class="text-white nav-item">
                                        <a class="dropdown-item" target="_blank" href="https://197.138.83.200/tseikuru/login">Portal</a>                                 </li>
                                 </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
  
<!------------------------------------------Middle navbar---------------------------------------------------------------------------------------------------->
<div class="page-content container-fluid">
    <div class="row" id = "middle">
        <div class="container">
            <div class=" row">
                <div class="col-md-4 col-sm-4 col-12 d-flex align-items-center py-2 ">
                    <a href="<?php echo base_url();?>">
                        <img class="img-fluid  thumbnail" src="<?php echo base_url();?>/uploads/system/logo.png" alt="<?php echo $settings['institution_long'];?>"/>
                    </a>
                </div>
                <div class="col-md-8 col-sm-8 col-12 row  py-2  d-none d-md-flex ">
                    <div class="col-md-4 d-flex justify-content-center align-items-center ">
                        <div class="text-maroon navicon  px-2"><i class='fas fa-paper-plane'></i></div>
                        <div class="text">
                            <span>Email</span><br>
                            <span><?php echo $settings['email'];?></span>
                        </div>
                    </div>
                    
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <div class="text-maroon navicon  px-2"><i class='fas fa-phone'></i></div>
                        <div class="text ">
                            <span>Call</span><br>
                            <span><?php echo $settings['phone'];?></span>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <div class="text-maroon navicon px-3"><i class='fas fa-money-check'></i></div>
                        <div class="text">
                            <span>Tenders</span><br>
                            <a class="text-maroon" href="<?php echo base_url();?>downloads/tenders">Visit Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----------------------Main navbar----------------------------------------------------------------------------------------------------->
<nav class=" page-content navbar navbar-expand-md bg-black navbar-dark sticky-top">
    
    <div class="container ml-md-5 pl-md-5">
        
        <!-- Brand -->
        <a class=" navbar-brand" href="<?php echo base_url();?>">Home</a>
        
        <ul class="d-block d-sm-block d-md-none nav">
            <li class="text-white nav-item">
                <i class='fas fa-phone'></i> <span><?php echo $settings['phone'];?></span>
            </li>
        </ul>
         <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseNav">
            <span class=" navbar-toggler-icon"></span>
        </button>
        
         <!-- Navbar links -->
        <div class=" collapse navbar-collapse" id="collapseNav">
            <ul class="navbar-nav ">
                
                <!--------------------About us section---------------------------------------------------------------------------------------------------------->
                <li  class="nav-item dropdown px-md-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      About Us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo base_url();?>about">About TSEIKURU TTI</a></li>
                        <li class="dropdown-submenu">
                           <a class="dropdown-item dropdown-toggle" href="#">Governance & Administration</a>
                           <ul class="dropdown-menu">
                              <li class="dropdown-submenu"><a class="dropdown-item" href="<?php echo base_url();?>about/BOG">Board of Governors</a></li>
                              <li class="dropdown-submenu"><a class="dropdown-item" href="<?php echo base_url();?>about/administration">Top Management</a></li>
                              <li class="dropdown-submenu"><a class="dropdown-item" href="<?php echo base_url();?>about/HODs">Middle Level Management</a></li>
                              <li class="dropdown-submenu"><a class="dropdown-item" href="<?php echo base_url();?>student/council">Students Governing Council</a></li>
                           </ul>
                      	</li>
                      	<li><a class="dropdown-item" href="<?php echo base_url();?>uploads/about/Service Delivery Charter.pdf" target = "_blank">Our Service Delivery Charter</a></li>
                      	
                      	<!--<li class="dropdown-submenu">-->
                       <!--    <a class="dropdown-item dropdown-toggle" href="#">Administration</a>-->
                       <!--    <ul class="dropdown-menu">-->
                       <!--         <li><a class="dropdown-item" href="<?php echo base_url();?>about/principal">Principal</a></li>-->
                       <!--         <li><a class="dropdown-item" href="<?php echo base_url();?>about/deputy_principal">Deputy Principal</a></li>-->
                       <!--         <li><a class="dropdown-item" href="<?php echo base_url();?>about/dean_of_students">Office of Dean of Students</a></li>-->
                       <!--         <li><a class="dropdown-item" href="<?php echo base_url();?>about/registrar">Office of Registrar</a></li>-->
                       <!--         <li><a class="dropdown-item" href="<?php echo base_url();?>about/HODs">Heads of Departments</a></li>-->
                       <!--    </ul>-->
                      	<!--</li>-->
                      	
                    </ul>
                </li>
                 <!--------------------All programmes section------------------------------------------------------------------------------------------------------->
                <!--<li class="nav-item dropdown px-md-4">-->
                <!--    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--      All Programmes-->
                <!--    </a>-->
                <!--    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
                <!--        <li><a class="dropdown-item" href="<?php echo base_url();?>admissions/programmes">All Programmes</a></li>-->
                <!--    </ul>-->
                <!--</li>-->
                
                <!--------------------Admissions section------------------------------------------------------------------------------------------------------->
                <li class="nav-item dropdown px-md-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Admission
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo base_url();?>admissions/online_application">Apply Online</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>admissions/procedure">Admission Requirements</a></li>
                      	    <li class="dropdown-submenu"><a class="dropdown-item" href="https://tseikurutti.ac.ke/uploads/admissions/FeeStructure.pdf" target = "_blank">Updated Fees Structure</a></li>
                    </ul>
                </li>
                <!--------------------Departments section---------------------------------------------------------------------------------------------------------->
                <li  class="nav-item dropdown px-md-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Training & Learning
                    </a>
                   
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        	<li class="dropdown-submenu">
                           <a class="dropdown-item dropdown-toggle" href="#">Courses</a>
                           <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url();?>admissions/diploma">Diploma </a></li>
                                <!--<li><a class="dropdown-item" href="<?php echo base_url();?>admissions/craft">Certificate</a></li>-->
                                <li><a class="dropdown-item" href="<?php echo base_url();?>admissions/artisan">Artisan </a></li>
                                <!--<li><a class="dropdown-item" href="<?php echo base_url();?>admissions/short">Short Courses</a></li>-->
                           </ul>
                      	</li>
                        <li class="dropdown-submenu">
                           <a class="dropdown-item dropdown-toggle" href="#">Academic Departments</a>
                           <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url();?>academics/ict">ICT</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>academics/business">Business Studies </a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>academics/automotive">Mechanical Engineering </a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>academics/hospitality">Hospitality Management </a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>academics/electrical">Electrical & Electronincs Engineering </a></li>
                           </ul>
                      	</li>
                      	<li class="dropdown-submenu">
                           <a class="dropdown-item dropdown-toggle" href="#">Support Departments</a>
                           <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Career Guidance Office</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>about/examinations">Examination</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>about/ILO">Industrial Liason Office</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>about/guiding_and_counselling">Guidance and Counseling</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>about/sports">Sports and Recreation </a></li>
                                <li><a class="dropdown-item" href="#IQA">IQA and PC </a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>about/finance_officer">Finance Office</a></li>
                                <li><a class="dropdown-item" href="#Procurement">Procurement Office</a></li>
                           </ul>
                      	</li>
                            <li class="dropdown-submenu"><a class="dropdown-item" href="#">Library</a></li>
                      	    <li class="dropdown-submenu"><a class="dropdown-item" href="https://tseikurutti.ac.ke/uploads/admissions/Nov-2022-Exams.pdf" target = "_blank">Nov 2022 Exam Timetable</a></li>
                    </ul>
                </li>
                <!--------------------Academics section------------------------------------------------------------------------------------------------------->
                <!--<li class="nav-item dropdown px-md-4">-->
                <!--    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--      Academic Departments-->
                <!--    </a>-->
                <!--    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
                <!--        <li><a class="dropdown-item" href="<?php echo base_url();?>academics/business">Business Department</a></li>-->
                <!--        <li><a class="dropdown-item" href="<?php echo base_url();?>academics/ict">ICT Department</a></li>-->
                <!--        <li><a class="dropdown-item" href="<?php echo base_url();?>academics/automotive">Mechanical Engineering Department</a></li>-->
                <!--        <li><a class="dropdown-item" href="<?php echo base_url();?>academics/electrical">Electrical & Electronincs Engineering Department</a></li>-->
                <!--        <li><a class="dropdown-item" href="<?php echo base_url();?>academics/electrical">Hospitality Management Department</a></li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!--------------------Media section------------------------------------------------------------------------------------------------------->
                <li class="nav-item dropdown px-md-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Media Center
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo base_url();?>media/news">All News </a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>media/events">Events</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>downloads/tenders">Tenders</a></li>
                         <li><a class="dropdown-item" href="<?php echo base_url();?>downloads/jobs">Jobs and Vacancies</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>media/announcements">Announcements</a></a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>media/gallery">Photo Gallery</a></li>
                    </ul>
                </li>
                 <!--------------------Student affairs section------------------------------------------------------------------------------------------------------->
                <li class="nav-item dropdown px-md-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      College Life
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo base_url();?>student/finance">Education Financing</a></a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>student/council">Student Governing Council</a></a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>about/clubs">Clubs and Societies</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>about/guiding_and_counselling">Guiding and Counseling</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>about/sports">Sports and Recreation</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>about/accomodation">Hostels and Accommodation</a></li>
                    </ul>
                </li>
                
           <a class=" navbar-brand" href="<?php echo base_url();?>about/contact">Contact Us</a>       
                
            </ul>
        </div>
    </div>
</nav>
    
    <link rel="icon" href="<?php echo base_url();?>/uploads/system/logo.png" type="image/png"/>
     <!--<link rel="copyright" href="copyright.html">-->
    <!-- <link rel="canonical" href="<?php 
    // echo base_url();?>" /> -->
    
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>  -->
    
 <style>

/***---------------General typographic styles--------------------------------**/ 
    body{
        font-family: 'Lucida Console', monospace;
        font-size:0.9em;
        line-height:1.5;
    }
    .loader{
          position: absolute;
          bottom: 50%;
          top: 50%;
          left:50%;
          right:50%;
    }
    
    
    .btn-maroon{
        color:white !important;
        background-color:#eb4511 !important;
        border-radius:  200px 10px 200px 10px;
    }
    .btn-maroon:hover{
        color:#eb4511 !important;
        background-color:white !important;
        border-radius:  200px 10px 200px 10px;
        box-shadow:2px 5px 10px #cccccc;
    }
    .text-maroon{
       color:#eb4511 !important;
    }
    .text-green{
       color:#007500!important;
       font-weight: bold !important;
       text-decoration: none !important;
    }
    .text-lightorange{        
        color:#be9e67 !important; 
        font-weight: bold !important;
    }
    .text-white{
       color:white!important;
       font-weight: bold !important;
       text-decoration: none !important;
    }
    .text-lightgreen{
       color:#90EE90 !important;
    }
    .text-blue{
       color:#2a2a72 !important;
    }
    .text-black{
       color:black !important;
    }
    .text-black:hover{
       color:green !important;
       text-decoration: none;
    }
    .bg-maroon{
      background-color:  #B22222;
      background-image: linear-gradient(315deg, #eb4511 0%, #b02e0c 74%);
    }
    .bg-nav-top{
      background-color:  #be9e67;
      background-image: linear-gradient(315deg, #be9e67 0%, #be9e67 74%);
    }
    .bg-black{
       background-color: #000000;
       background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
       box-shadow:2px 5px 10px #cccccc;
   }
   .bg-blue{
       background-color: #2a2a72;
       background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);
   }
   .bg-gray{ 
       background-color: #D3D3D3 ;
       background-image: linear-gradient(315deg, #D3D3D3 0%, #808080 74%);
   }
   .bg-gray, .bg-blue, .bg-maroon{
       color:white !important;
   }
   .page-box{
        box-shadow:0 1px 4px #be9e67, 0 0 20px #be9e67;
        border-radius:5px;
        position:relative;
        padding-bottom:1%;
        padding-left:1em;
   }
   .title-head{
        background-color:white;
        border-radius:10px 10px 10px 10px;
        text-align:left;
        position:relative;
        box-shadow:0 3px 6px white, 0 0 20px #be9e67;
        padding-left:0.5em;
        margin:0.5em;
        margin-top:1em !important;
        border:none !important;
      }
    .subtitle-head{
        background-color:inherit;
        box-shadow:0 3px 6px white, 0 0 20px #be9e67;
        border-radius:10px 10px 10px 10px;
        text-align:left;
        position:relative;
        padding:0.2em 1em 0.2em 1em;
        margin:1em;
        margin-top:1em !important;
        border:none !important;
      }
      .para{
        margin-left:3em;
        margin-right:3em;
        text-align: justify;
        color:#696969;
        line-height:2.5em !important;
      }
   .form-btn{
       color:white !important;
        border-radius:0px 0px 20px 20px;
        float:right;
        font-size:large;
        text-decoration:none;
        text-align:center;
        padding-left:2em;
        padding-right:2em;
        border:none;
   }
   .navi-btn{
        color:white !important;
        background-color:#be9e67;
        border-radius:5px 5px 5px 5px; 
        padding:7px 2em 7px 2em;
        border:none;
        font-size: 1em;
        background-image: linear-gradient(315deg, #be9e67 0%, #be9e67 74%);
   }
   .navbtn{
        background-color:green !important;
   }
   .form-btn:hover{
       text-decoration:none;
   }
    .text-faint{
        color:#cccccc;
    }
    hr{
        border-bottom: 1px solid #eb4511 !important;
        width:200px !important;
        float: left !important;
    }
    .card{
        box-shadow:2px 5px 10px #cccccc !important;
    }
    .border-radius-round{
        border-radius:  200px 10px 200px 10px;
        box-shadow:2px 5px 10px #cccccc !important;
    }
    .custom-list{
        list-style-type:disc;
    }
    table td, th{
        padding:0.4em !important;
    }
    table th{
        font-weight:bold;
    }
    table{
      counter-reset: rowNumber;
    }
    
    table tr {
      counter-increment: rowNumber;
    }
    
    table tr td:first-child::before {
      content: counter(rowNumber)".";
      min-width: 1em;
      margin-right: 0.5em;
    }
    
   @media screen and (max-width: 480px) {
        hr{
            border-bottom: 1px solid #eb4511 !important;
            width:200px !important;
            float: none !important;
        }
    }

/*-------------------Navbars settings-------------------------------------------**/
   .navicon{
       font-size:1.5em;
   }
   .nav-top{
       background-color:#be9e67;
   }
   .nav-top>div>div>ul>li>a{
       color:white;
       font-size:0.9em;
       padding-left:1em;
       padding-right:1em;
       padding-bottom:0.3em;
       padding-top:0.3em;       
       text-align:right;
   }
    .nav-top>div>div>ul>li>a>div>a{
       color:white;
       font-size:0.8em;
   }
   .nav-top>div>div>ul>li>a:hover{
       background-color: #be9e67 !important;
       color:white;
   }
   .logo{
       max-height:7em;
       max-width:27em;
   }
   .navbar-brand{
       text-transform:capitalize;
       font-size: 1.0em;
       font-weight:normal;
       color:black !important;
       background-color: #D3D3D3 ;
       border-radius: 0px 20px 20px 0px; 
       padding-left: 1em;
       padding-right: 1em;    
       border-bottom: 2px solid #D3D3D3  !important;
       border-right: 2px solid #D3D3D3 !important; 
   }
  
    nav>div>div>ul>li>a {
       color:white !important;
   }
   .navbar-brand:hover, nav>div>div>ul>li>a:hover  {
       color:#007500  !important;
       font-weight: bold !important;
       font-size:14px;
       text-decoration: none !important;
       border-bottom: 2px solid #be9e67 !important;
       border-right: 2px solid #be9e67 !important;
   }
    .navbar-brand:hover, nav>div>div>ul>li>a:active  {
           /* background-color:#D3D3D3 !important; */
           /* border-radius:  50px 10px 50px 10px; */
           /* color:#007500!important;
            font-weight: bold !important; */
            text-decoration: none !important;
            border-bottom: 2px solid #be9e67 !important;
            border-right: 2px solid #be9e67 !important;
       }
   .dropdown-submenu {
      position: relative;
      
    }
    
    .dropdown-submenu a::after {
      transform: rotate(-90deg);
      position: absolute;
      right: 6px;
      top: .8em;
    }
    
    .dropdown-submenu .dropdown-menu {
      top: 0;
      left: 100%;
      margin-left: .1rem;
      margin-right: .1rem;
      border: 1px solid lightgray;
    }
    .dropdown{
      font-size: 1.0em;
      background-color: #D3D3D3 ;
      border-radius: 0px 20px 20px 0px; 
      padding-left: 1em;
      padding-right: 1em; 
      color:black !important;
    }
     .dropdown-menu {
      border: 1px solid lightgray;
    }
    .dropdown:hover> .dropdown-menu {
      display: block !important;
    }
    .dropdown-submenu:hover> .dropdown-menu {
      display: block !important;
    }
    .dropdown-submenu>a:hover, .dropdown-menu>li>a:hover{
        /* background-color:#eb4511 !important;
        color:white !important; */
        color:#007500!important;
        font-weight: bold !important;
        text-decoration: none !important;
    }
    .dropdown-submenu>a:hover, .dropdown-menu>li>a{
        font-size:0.9em;
    }
    .navbar{
      padding:0;
    }
/*----------------*Slider styles----------------------------------------**/
.tablinks {
  display: block;
  background-color: #FAFAD2;
  width: 100%;
  outline: none;
  text-align: center;
  cursor: pointer;
  transition: 0.3s;
  font-size: 0.9em;
  border:none;
}
.tablinks:hover {
  background-color:  #FAFAD2 important!;
  color:lightgreen;
  font-weight: bold;
  outline: none !important;
}

.tablinks:active {
  background-color: white important!;
  color:brown;
  font-weight: bold;
  font-size: 0.8em;
  outline: none !important;
}
.trademark{
	min-width:100%;
	background-color: #be9e67;
	text-align: center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	overflow:auto;
    line-height:1.5em;
	margin-bottom: 1%;
}
.footer{
  background-color: #FAFAD2;
  width: 100%;
  cursor: pointer;
  font-size: 0.9em;
  border:none;
}
/*----------------*Slider styles----------------------------------------**/
   .carousel-control-prev {
       margin-left:20%;
   }
   .carousel-item img{
      width:100%;
      max-height:70vh;
   }
   .carousel-caption{
        top: 50vh;
        bottom: auto;
   }
   .carousel-caption h1{
       font-size:1.5em !important;
       text-decoration:bold;
   }
   .carousel-caption h3{
       font-size:1.3em !important;
       color:black;
       background-color:#FFFDD0;
       opacity:0.8;
       border-radius:5px;
   }
   .carousel-item h4{
       color: black; 
       margin-top:0%;
       font-size:1.2em !important;
       text-align:center;
       line-height:1.5em;
   }
   .carousel-item strong{
       color: tomato;
       font-size:1.1em;
   }
    .carousel-item a{
       text-decoration: none;
       color: blue;
   }
   @media screen and (max-width: 576px) {
       .carousel-control-prev{
         display:none;
   }
       .carousel-control-next  {
         display:none;
   }
    .carousel-caption{
        top: 20.5vh;
        bottom: auto;
    }
    .carousel-caption h3{
       font-size:0.8em !important;
   }
   .carousel-item h4{
   font-size:1.0em !important;
   line-height:1.4em;
   background-color:#FFFDD0;
   }
   .carousel-item img{
   width:100% !important;
   height:30vh !important;
   }
   .carousel-caption{
    top: 18vh;
    bottom: auto;
    }
    .carousel-item figure>img{
        display:none;
    }
    .nav-topper{
        display:none;
    }
   
    }
     @media screen and (min-width: 576px) and (max-width: 768px) {
         
          .carousel-caption h3{
           font-size:0.8em !important;
       }
       .carousel-control-prev{
         display:none;
   }
       .carousel-control-next  {
         display:none;
   }
    #flex-container{
        display: -webkit-flex;
        display: flex;
    }
    #first{
        order: 2;
    }
    #second{
        order: 1;
    }
    .carousel-item figure>img{
            display:none;
        }
    .nav-topper{
            display:none;
        }
}
    
/***-----------------Page items styles---------------------------------------***/
    .page-background{
        background-image:url('<?php echo base_url();?>uploads/page/about.jpg');
        background-position: center; 
        background-repeat: no-repeat !important;
        color:white c;
        height:20em;
        background-size: cover;
        max-width:100%;
    }
    .page-overlay {
        position: absolute;
        height:20em;
        width:100%;
        background-color: rgba(0,0,0,0.5);
        z-index: 2;
        color:white !important;
    }
    @media screen and (max-width: 576px) {
        .page-overlay {
            height:15em;
            width:100%;
        }
        .page-background {
            height:15em;
            width:100%;
        }
    }
    .pills .nav-link:not(.active){
        background-color:lightgray  ! important;
        color:#eb4511 ! important;
    }
    .pills .nav-link:not(.active):hover{
        background-color:#eb4511 ! important;
        color:white ! important;
    }
    
    .pills i{
        font-size:2em !important;
    }
    .pills .nav-link{
        border-bottom:solid  #eb4511;
        border-radius:5px;
        background-color: #eb4511! important;
        color:white ! important;
        border-radius: 100px 20px;
    }
    .tab-pane a{
        color:#eb4511 ! important;
    }
/***----------------------Events and announcements section styles-----------------------------------------**/
    .events-a{
        color:  #2a2a72 !important;
    }
/***----------------------Welcome section styles-----------------------------------------**/
    .welcome span a{
        color:#eb4511 !important;
    }
    .welcome span a:hover{
        color:white !important;
    }
    .welcome span:hover{
        
        background-color:#eb4511 !important;
    }
    .bg-light{
        font-size:1.1em;
    }
/****----------------------News section styles-------------------------------**/
    .news-card{
        color:black !important;
        height:31.25em;
    }
    .news-card:hover{
        text-decoration:none !important;
        width:101% !important;
        height:102% !important;
    }
    .news-card .card-title:hover{
        color:#eb4511 !important;
    }
    .news-card img{
        max-height:18.75em;
    }
    .latest-news:hover{
        text-decoration:none !important;
        color:#eb4511 !important;
    }
    .card>a:hover{
        text-decoration:none !important; 
    }
 /***----------------------Admissions Settings-----------------------------------------**/ 
    
     .form-control:hover{
         background-color:#FFFDD0;
    }
    .form-control:active{
         border:1px solid #FFFDD0;
    }
     #admissions>div>div{
       padding-right:1%;
       padding-left:1%;
       margin-bottom:0;
    }
    #admissions>div>div>form>div>div>div .form-control{
       font-size:1em;
    }
     #admissions>div>#first{
        background-color:#FFFDD0;
    }
    #admissions>div>#second{
        margin-bottom:1%;
    }
    #admissions>div>#first>a{
        color:white !important;
        background-color:#b02e0c;
        background-image: linear-gradient(315deg, #eb4511 0%, #b02e0c 74%);
        border-radius:0px 0px 5px 5px;
        text-decoration:none;
        float:right;
        padding:5px;
    }
    #admissions>div>#first>figure{
        margin-bottom:0px !important;
        padding-bottom:0px !important;
    }
     #admissions>a{
        color:white !important;
        background-color:#b02e0c;
        border-radius:0px 0px 5px 5px;
        margin-left:10%;
        margin-right:10%;
        text-decoration:none;
        text-align:center;
        padding:5px;
        background-image: linear-gradient(315deg, #eb4511 0%, #b02e0c 74%);
    }
    #admissions .btn{
        color:white !important;
        float:right !important;
        border:1px solid #b02e0c !important;
        background-image: linear-gradient(315deg, #eb4511 0%, #b02e0c 74%);
        padding-left:5% !important;
        padding-right:5% !important; 
        margin-right:5% !important;
        background-color:#b02e0c !important;
        border-radius:0px 0px 5px 5px !important;
    }
    #admissions>h5{
        margin-left:2em;
    }
     #admissions>p{
        margin-left:3em;
    }
    #admissions>ul>li{
        margin-left:3em;
    }
   
   
     @media screen and (max-width: 576px) {
    #admissions>a{
        margin-left:0%;
        margin-right:0%;
        font-size:0.8em;
    }
     #admissions>h4{
        font-size:1.3em;
        text-align:left;
        }
    #admissions>div>div>h4{
        font-size:1.3em;
        text-align:left;
        }
    #admissions>h5{
        margin-left:0em;
        font-size:1em;
        }
     #admissions>p{
        margin-left:0em;
        }
    #admissions>ul>li{
        margin-left:0em;
        }
    #administration>h2{
        font-size:1.3em;
        text-align:left;
        }
    #flex-container{
        display: -webkit-flex;
        display: flex;
    }
    #first{
        order: 2;
    }
    #second{
        order: 1;
    }
}
   
 /***----------------------Tenders and jobs section styles-----------------------------------------**/
    .tenders-card, .jobs-card {
        box-shadow:2px 3px 5px gray;
    }
/***----------------------Footer styles--------------------------------------**/
    .tc-footer{
        background-color: #000000;
        background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
        padding:6 em;
        color: white !important;
    }
    
    .tc-footer .tc-footer-widget ul li a  {
        color: white !important;
    }
    
    /****----------------------Administration and BOG  styles-----------------------**/ 
    #administration>div>div>figure{
        font-size:20px; 
        color:blue;
        background-color:white;
        text-align:center;
    }
    
   /****----------------------Admin dashboard  styles-----------------------**/
    .dashboard-nav, .dashboard-dropdown{
       background-color:#3bb78f! important; 
    }
    .dashboard-nav  .nav-link, .dashboard-dropdown .dropdown-item{
        color:white  ! important;
    }
    .dashboard-nav .nav-link:hover, .dashboard-dropdown .dropdown-item:hover{
        color:yellow  ! important;
    }
    .dashboard-dropdown{
        border:none;
    }
    .dashboard-dropdown .dropdown-item{
        background-color:#3bb78f ! important;
    }
  
    .dashtab a{
        color:#3bb78f ! important;
    }
   .dashboard-pill .nav-link:not(.active){
        background-color:white ! important;
        color:#3bb78f ! important;
    }
    .dashboard-pill .nav-link:not(.active):hover{
        background-color:#3bb78f ! important;
        color:white ! important;
        
    }

    .dashboard-pill .nav-link{
        background-color: #3bb78f! important;
        color:white ! important;
        font-size:1.2em;
    }
    .profile-card{
        box-shadow:5px 10px 20px gray;
        color:black !important;
        height:35.25em;
    }
    .profile-card .card-title{
        color:#eb4511 !important;
    }
    .profile-card img{
        max-height:17.75em;
    }
    
    /*form section*/
    
    .form .col{
        padding:2%;
    }
    .form .col .form-check .form-switch{
        padding:2%;
    }
    .form input[type=text]{
        font-family:'Courier New', monospace;
        font-size:12px;
    }
 </style>



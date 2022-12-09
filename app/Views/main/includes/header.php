    
    <link rel="icon" href="<?php echo base_url();?>uploads/system/log.png" type="image/png"/>
     <!--<link rel="copyright" href="copyright.html">-->
    <link rel="canonical" href="<?php echo base_url();?>" />
    
 <!----------Custom css and other tags-------------------------------->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css"/>
<!----------Bootstrap online scripts and css----------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script> 
    
 <style>

/***---------------General typographic styles--------------------------------**/ 
    body{
        font-family: 'Poppins', sans-serif;
        font-size:0.9em;
        line-height:1.5;
    }
    /**h1{font-size:32px !important;}  h2{font-size:28px !important;}  
    h3{font-size:24px !important;}  h4{font-size:20px !important;} 
    h5{font-size:16px !important;}  h5{font-size:16px !important;} **/
    
  
    .loader{
          position: fixed;
          bottom: 50%;
          top: 50%;
          left:50%;
          right:50%;
    }
    .page-content{
        display:none;
       
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
       color:#3bb78f !important;
    }
    .text-blue{
       color:#2a2a72 !important;
    }
    .bg-maroon{
      background-color:  #B22222.;
      background-image: linear-gradient(315deg, #eb4511 0%, #b02e0c 74%);
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
   .bg-green{
       background-color: #3bb78f;
       background-image: linear-gradient(315deg, #3bb78f 0%, #0bab64 74%);
   }
   .bg-green, .bg-blue, .bg-maroon{
       color:white !important;
   }
   .page-box{
        box-shadow:0 1px 4px lightgray, 0 0 20px lightgray;
        border-radius:5px;
        position:relative;
        padding-bottom:1%;
        padding-left:1em;
   }
   .title-head{
        background-color:white;
        border-radius:10px 10px 0px 0px;
        text-align:left;
        position:relative;
        box-shadow:0 3px 6px white, 0 0 20px lightgray;
        padding-left:0.5em;
   }
   .nav-btn{
       color:white !important;
        background-color:#b02e0c;
        border-radius:0px 0px 5px 5px;
        margin-top:2%;
        margin-left:2%;
        text-decoration:none;
        text-align:center;
        padding:5px;
        background-image: linear-gradient(315deg, #eb4511 0%, #b02e0c 74%);
   }
   .nav-btn:hover{
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
       background-color:#B22222.;
   }
   .nav-topper{
       margin:0;
   }
  #marq{
       background-color:#B22222;
       background-image: linear-gradient(315deg, #eb4511 0%, #b02e0c 74%);
       padding:0;
       
   }
   .blink {
            animation: blinker 1.5s linear infinite;
            color: #B22222;
            font-family: sans-serif;
            }
            @keyframes blinker {
                50% {
                    opacity: 1;
                }
            }
   .nav-topper marquee{
       padding:0;
       margin-bottom:0;
       width:100%; 
       direction:left; 
       height:18px;
       font-size:1em;
       color:brown;
   }
   .nav-topper h6{
       color:white;
       margin:0;
       padding:0;
       line-height:1.5;
       text-align:center;
   }
   
   .nav-top>div>div>ul>li>a{
       color:white;
       font-size:0.9em;
       padding-left:1em;
       padding-right:1em;
       padding-bottom:0.3em;
       padding-top:0.3em;
   }
    .nav-top>div>div>ul>li>a>div>a{
       color:white;
       font-size:0.8em;
   }
   .nav-top>div>div>ul>li>a:hover{
       background-color: #b02e0c !important;
       color:white;
   }
   .logo{
       max-height:7em;
       max-width:27em;
   }
   .navbar-brand{
       text-transform:capitalize;
       font-size: 1em;
       font-weight:normal;
       color:white !important;
       
   }
  
    nav>div>div>ul>li>a {
       color:white !important;
   }
   .navbar-brand:hover, nav>div>div>ul>li>a:hover  {
       background-color:#eb4511 !important;
       border-radius: 200px 10px 200px 10px;
       padding-left:1em !important;
       padding-right:1em !important;
   }
    .navbar-brand:hover, nav>div>div>ul>li>a:active  {
           background-color:#eb4511 !important;
           border-radius:  200px 10px 200px 10px;
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
        background-color:#eb4511 !important;
        color:white !important;
    }
    .dropdown-submenu>a:hover, .dropdown-menu>li>a{
        font-size:0.9em;
    }
    .navbar{
      padding:0;
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
    .tc-heading{
         
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



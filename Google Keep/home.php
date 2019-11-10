<?php

    include('plugins/config.php');
    $connection= mysqli_connect(constant('HOST'),constant('USER'),constant('PASSWORD'),constant('DB'));
        
    if(isset($_POST['submit']))
    {
        session_unset(); 
        session_destroy();
        header("Location:../index.php");
    }


?>
<! Doctype html>
<html>
<title>Google Keep</title>
<link rel="icon" href="img/google_keep.jpg" type="image/gif">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<link rel="stylesheet" type="text/css" href="css/home.css">
<!-- <script src="jquery-3.3.1.min.js"></script> -->
<script src="javascript/home.js"></script>
<style>


</style>
</head>
<body>
  <!-- header nav bar start from here -->
<nav>
    
    <ul style="padding-left:7px;">
        <li onclick="menuBar()"><a class="active" onclick="menuBar()" href="#home"><i onclick="menuBar()" class="fa fa-bars" style="font-size:20px"></i></a></li>
        <li><a href="#news"><img style="margin-left:-7px;margin-top:-7px" height=35px width=35px src="img/google_keep.jpg"></a></li>
        <li><a href="#contact"><p style="margin-left:-20px;margin-top:-4px;font-size:24px">Keep</p></a></li>
        <li><a href="#about" style="margin-left:50px;margin-top:-8px">
                <i class="fa fa-search" id="input_img" > &nbsp;  &nbsp; Search</i>
                <input style="" type="text"/>
            </a>
        </li>
        <li><a href="#about" style="margin-left:1000%;margin-top:2px">
            <img height=20 width=20 src="img/refresh.png"/ > 
            </a>
        </li>
        <li><a href="#about" style="margin-left:815%;margin-top:-4px">
            <img height=30 width=30 src="img/setting.png"/ > 
            </a>
        </li>
        <li><a href="#about" style="margin-left:1075%;margin-top:5px">
            <img height=17 width=17 src="img/menu.png"/ > 
            </a>
        </li>
        <li><a href="#about" style="margin-left:765%;margin-top:-4px">
            <img style="border-radius:100%" height=35 width=35 src="img/login_page.jpg"/ > 
            </a>
        </li>
    </ul>
</nav>
<!-- header nav bar ended here -->
<!-- main page for notes and pinned othes includes here -->
<section >
    <div id="mySidebar" class="sidebar">
        
        <a href="#"><div style="float:left"><img height=29 width=29 src="img/notes.png"/></div><div style="margin-left:55px;margin-top:3px">Notes</div></a>
        <a href="#" style="border-bottom:1px solid;border-bottom-color:rgba(0,0,0,0.2)"><div style="float:left"><img height=25 width=25 src="img/remainder.jpg"/></div><div style="margin-left:55px;margin-top:3px">Remainders</div></a>
        <a href="#"><div style="float:left;font-size:12px">LEBELS</div></a>
        <a href="#" style="border-bottom:1px solid;border-bottom-color:rgba(0,0,0,0.2)"><div style="float:left"><img height=25 width=23 src="img/edit_label.png"/></div><div style="margin-left:55px;margin-top:3px">Edit labels</div></a>
        <a href="#"><div style="float:left"><img height=25 width=23 src="img/archive.png"/></div><div style="margin-left:55px;margin-top:3px">Archive</div></a>
        <a href="#"><div style="float:left"><img height=25 width=25 src="img/trash.png"/></div><div style="margin-left:55px;margin-top:3px">Trash</div></a>
        <a href="#"><div style="float:left;font-size:15px;margin-top:65px"><p>Policy Terms</p><p>Open-source licences</p></div></a>
    </div>

    <div id="main">
        <div id="main-page"style="">
            <div class="note">
                  <!-- it will be shown on the the by default -->
                <div id="input-note" class="border" style="height:40px;padding:5px 10px 5px 10px">
                    <div style="float:right">
                      <a><img style="margin-top:10px;margin-right:35px" height=15 width=25 src="img/checkbox.png"></a>
                      <a><img style="margin-right:35px" height=15 width=25 src="img/edit_label.png"></a>
                      <a><img style="margin-right:35px"  height=15 width=25 src="img/image.png"></a>
                    </div>
                    <div id="title"  onclick="note()" class="top outline" style="height:30px,auto;margin-top:5px;border-radius:10%;" contentEditable="true" data-text="Take a note"></div>
                </div>
                <!-- start when click on add notes by default hidden -->
                <div id="input-note-second" class="border note-second" style="padding:5px 5px 5px 10px;">
                  <div style="float:right">
                      <a><img id="pin" onclick="callPin(0)" value="0" height=15 width=25 src="img/pin.png"></a>
                      <a><img id="unpin" onclick="callPin(1)" value="1" height=15 width=25 src="img/unpin.png"></a>
                  </div>
                  <div id="title"  class="top outline" style="height:30px,auto;margin-top:5px;border-radius:10%;" contentEditable="true" data-text="Title"></div>
                  
                  <div id="description" onblur="addRow()" class="text outline" style="margin-top:15px;margin-bottom:25px;border-radius:2% 2% 2% 2%;" contentEditable="true" data-text="Type here..."></div>
                    <!-- all icons which are in add notes bottom -->
                  <div class="bottom" style="margin-bottom:10px;border-radius:10%;">
                    <a><img height=17 width=17 src="img/remainder.jpg"/></a>
                    <a ><img src="img/add.png"/></a>
                    <a ><img src="img/paint.png"/></a>
                    <a ><img src="img/image.png"/></a>
                    <a ><img src="img/archive.png"/></a>
                    <a ><img src="img/more.png"/></a>
                    <a ><img src="img/refresh.png"  class="rotateimg"/></a>
                    <a ><img src="img/refresh.png" /></a>
                    <a style="margin-left:180px;font-size:18px" onclick="note()" >Close</a>
                    
                  </div>
                </div>
                  <div class="border" style="width:100%;height:150px;padding:15px;margin-top:15px">
                        <div style="float:left;margin-top:10px">
                            <img style="border-radius:100%" height=65 width=65 src="img/login_page.jpg"/ >
                        </div>
                        <div style="float:right">
                            <h4>Dark theme is here</h4>
                            <p>Enjoy a more comfortable reading experience. Toggle it on or off in Settings.</p>
                        </div>
                        <div></div>
                  </div>

                  <div style="width:100%">
                      <h5>PINNED</h5>
                      <div id="pinned" style="width:100%;background-color:red">


                      </div>
                  </div>

                  <div style="float:left;margin-bottom:-10px;width:100%">
                      <h5>OTHER</h5>
                      <div id="other">
                      </div>
                  <div>
            </div>
            
            

        
        </div>
    </div>
</section>

<!-- <footer id="footer">
    <div class="container">
        <div class="about ">
            <h1> About us</h1>
            <p>Our core value make us who we are. As we change and grow, the beliefs that are most important to us stay the same.</p>
        </div>
        <div class="contact ">
            <h1>Contact</h1>
            <p> <b> Add: </b>123, Plaza Dadar, CityMax mall, Mumbai 400019</p>
            <p style="line-height: 0;margin-top:-10px"><b>Con: </b> +91-2124156789</p>
            <p style="line-height: 0;margin-top:-1px"><b>Email: </b> abc@gmail.com</p>
        </div>

    </div>
    <div class="container2">
        <div class="policy">
            <h1>Policy</h1><br>
            <a href=""><p>Term & Conditions</p></a>
            <a href=""><p>Refund & Cancellation</p></a>
            <a href=""><p>Privacy Policy</p></a>
            <a href=""><p>Offer Term</p></a>
        </div>
        <div class="store-img-div">
            <a href=""><img src="img/google_play.png" height="100px" width="300px"></a><br>
            <a href=""><img src="img/ios_store.png" style="margin-left:22px" height="76px" width="260px"></a>

        </div>

    </div>

</footer> -->
<script>

</script>
</body>
</html>
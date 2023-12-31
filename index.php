<?php 
  session_start();

?>
<!DOCTYPE html>
<html lang="en" class="" style="">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <meta name="description" content="Local file hosting">
    <meta name="keywords" content="peer, host, file, share">
    <script type="module" src="https://cdn.jsdelivr.net/gh/zerodevx/zero-md@2/dist/zero-md.min.js"></script>
    <link rel="icon" type="image/x-icon" href="./favicon.ico">


</head>
<body style="width: 100%;" class="" >

    <div class="row p-3 border-end-0 shadow" style="backdrop-filter: blur(10px); position: fixed; width: 100vw; margin: 0px; z-index: 99;">
    <div class="col-md-10">
    <h1 class="text-start ps-5 text-white">&#9736; PeerAir</h1>
    </div>
    <div class="col-md-2">
    <div class="d-flex justify-content-evenly align-items-center" style="height: 100%;">
    <?php if(isset($_SESSION['loggedIn'])) : ?>
        <a id='logout-control' href="#">logout</a>
    <?php else : ?>
        <a href="./login.php">login</a>
        <a href="./Signup.php">signup</a>
    <?php endif; ?>
    </div>
    </div>
    </div>
    
    <div class="" style="padding-bottom: 85px;"></div>
    
    <div class="container-fluid pad-issue" style=" background-color: rgba(0, 0, 0, 0.384); color: rgba(255, 255, 255,1); width: 100%;">
    <div class="row pb-2" style="margin: 0px; padding-top: 30px;">
        <div class="col-md-12 pb-3 text-center" style="text-align: justify;">
    
        <div class="" style="">
            <div class=" p-3 display-1 fw-bold" style="background: -webkit-linear-gradient(rgb(162, 152, 252), rgb(86, 47, 226));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;">&#9736;</div>
    
        <h2 class="display-6 fw-bold">An easier way to share files and links between devices!</h2>
    
        <h5 class="pt-5 pb-4">Transfer files between devices on your local network at high-speeds with a simple home server.
        </h5>
        <a type="button" class="btn btn-primary p-3" href="https://www.dropbox.com/scl/fi/3e2jb0s1niz03wc429k1v/peerair-win32-x64.zip?rlkey=tr0hxlsz2a6rec37iduhoi9s0&dl=1" download>
            <svg class="me-2" width="32px" height="32px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>windows [#174]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7439.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M13.1458647,7289.43426 C13.1508772,7291.43316 13.1568922,7294.82929 13.1619048,7297.46884 C16.7759398,7297.95757 20.3899749,7298.4613 23.997995,7299 C23.997995,7295.84873 24.002005,7292.71146 23.997995,7289.71311 C20.3809524,7289.71311 16.7649123,7289.43426 13.1458647,7289.43426 M4,7289.43526 L4,7296.22153 C6.72581454,7296.58933 9.45162907,7296.94113 12.1724311,7297.34291 C12.1774436,7294.71736 12.1704261,7292.0908 12.1704261,7289.46524 C9.44661654,7289.47024 6.72380952,7289.42627 4,7289.43526 M4,7281.84344 L4,7288.61071 C6.72581454,7288.61771 9.45162907,7288.57673 12.1774436,7288.57973 C12.1754386,7285.96017 12.1754386,7283.34361 12.1724311,7280.72405 C9.44461153,7281.06486 6.71679198,7281.42567 4,7281.84344 M24,7288.47179 C20.3879699,7288.48578 16.7759398,7288.54075 13.1619048,7288.55175 C13.1598997,7285.88921 13.1598997,7283.22967 13.1619048,7280.56914 C16.7689223,7280.01844 20.3839599,7279.50072 23.997995,7279 C24,7282.15826 23.997995,7285.31353 24,7288.47179" id="windows-[#174]"> </path> </g> </g> </g> </g></svg>
            Download for Windows</a>
            </div>

        </div>

        <div class="col-md-12">
            <div class="d-flex align-items-center h-100 w-100 p-5" style="">
                
                <img class="rounded" src="./peerFile.png" style="height: 100%; width: 100%;  -moz-box-shadow: 15px 15px 0px 0px #FFFFFF;-webkit-box-shadow: 15px 15px 0px 0px #FFFFFF;box-shadow: 15px 15px 0px 0px  #FFFFFF;">
            </div>



        </div>

    
        </div>
    
    
    </div>
    
    
    
    <div class="container ">
    <div class="row" style="margin: 0px;">
        

    
    </div>
    
    </div>
    
        
    
    
    <div class="container-fluid pad-issue" style=" background-color: rgba(0, 0, 0, 0.384); color: rgba(255, 255, 255,1);">
    <div class="row" style=" margin: 0px; ">
        <h3 class="text-center fw-bold">Stable Releases</h3>
    
    <div class="row px-2 pt-3 rounded-5" style="margin: 0px;">
      <div class='col-md-2'></div>
        <div class="col-md-4 p-3 text-center" style="">
            <div class="p-4" style="">
            <h5 class="display-5 text-center fw-bold pb-3" style="">Windows</h5>
            
            <a type="button" class="btn btn-primary p-3" href="https://www.dropbox.com/scl/fi/3e2jb0s1niz03wc429k1v/peerair-win32-x64.zip?rlkey=tr0hxlsz2a6rec37iduhoi9s0&dl=1" download>
                <svg class="me-2" width="32px" height="32px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>windows [#174]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7439.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M13.1458647,7289.43426 C13.1508772,7291.43316 13.1568922,7294.82929 13.1619048,7297.46884 C16.7759398,7297.95757 20.3899749,7298.4613 23.997995,7299 C23.997995,7295.84873 24.002005,7292.71146 23.997995,7289.71311 C20.3809524,7289.71311 16.7649123,7289.43426 13.1458647,7289.43426 M4,7289.43526 L4,7296.22153 C6.72581454,7296.58933 9.45162907,7296.94113 12.1724311,7297.34291 C12.1774436,7294.71736 12.1704261,7292.0908 12.1704261,7289.46524 C9.44661654,7289.47024 6.72380952,7289.42627 4,7289.43526 M4,7281.84344 L4,7288.61071 C6.72581454,7288.61771 9.45162907,7288.57673 12.1774436,7288.57973 C12.1754386,7285.96017 12.1754386,7283.34361 12.1724311,7280.72405 C9.44461153,7281.06486 6.71679198,7281.42567 4,7281.84344 M24,7288.47179 C20.3879699,7288.48578 16.7759398,7288.54075 13.1619048,7288.55175 C13.1598997,7285.88921 13.1598997,7283.22967 13.1619048,7280.56914 C16.7689223,7280.01844 20.3839599,7279.50072 23.997995,7279 C24,7282.15826 23.997995,7285.31353 24,7288.47179" id="windows-[#174]"> </path> </g> </g> </g> </g></svg>
                Download for Windows</a>
            </div>
        </div>
        <div class="col-md-4 p-3 text-center" style="">
            <div class="p-4" style="">
            <h5 class="display-5 text-center fw-bold pb-3">Linux</h5>
            <a type="button" class="btn btn-primary p-3" href="https://github.com/hodge-py/peerair/releases/download/v1.0.1/peerair_1.0.1_amd64.deb" download>
                <svg class="me-2" width="32px" height="32px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>linux_ubuntu [#148]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-300.000000, -7519.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M259.612287,7362.44764 C260.52968,7362.95764 261.702366,7362.65564 262.231631,7361.77164 C262.760897,7360.88764 262.447489,7359.75763 261.530095,7359.24763 C260.612702,7358.73763 259.440017,7359.04063 258.909714,7359.92463 C258.381486,7360.80764 258.695932,7361.93764 259.612287,7362.44764 M255.687422,7374.39866 C254.843711,7374.39866 254.043587,7374.21766 253.327522,7373.89666 L251.993981,7376.19766 C253.107513,7376.72867 254.361146,7377.02867 255.687422,7377.02867 C256.458489,7377.02867 257.204649,7376.92567 257.91345,7376.73667 C258.037983,7375.99366 258.495641,7375.31066 259.224159,7374.90466 C259.953715,7374.49866 260.795351,7374.45966 261.524907,7374.72466 C262.942507,7373.38066 263.865089,7371.55266 264,7369.51765 L261.266501,7369.47865 C261.015359,7372.23666 258.613948,7374.39866 255.687422,7374.39866 M255.687422,7363.60164 C258.613948,7363.60164 261.015359,7365.76364 261.266501,7368.52165 L264,7368.48265 C263.865089,7366.44665 262.942507,7364.61864 261.523869,7363.27464 C260.795351,7363.54064 259.952677,7363.49964 259.224159,7363.09564 C258.495641,7362.68964 258.037983,7362.00564 257.912412,7361.26264 C257.203611,7361.07464 256.458489,7360.97164 255.686384,7360.97164 C254.361146,7360.97164 253.107513,7361.27164 251.993981,7361.80264 L253.327522,7364.10364 C254.043587,7363.78164 254.843711,7363.60164 255.687422,7363.60164 M250.084475,7368.99965 C250.084475,7367.17365 251.026775,7365.55964 252.467206,7364.58264 L251.064134,7362.31964 C249.386052,7363.40064 248.137609,7365.05264 247.618721,7366.98665 C248.224782,7367.46265 248.611872,7368.18765 248.611872,7368.99965 C248.611872,7369.81165 248.224782,7370.53665 247.618721,7371.01265 C248.137609,7372.94766 249.386052,7374.59966 251.064134,7375.68066 L252.467206,7373.41666 C251.026775,7372.43966 250.084475,7370.82665 250.084475,7368.99965 M259.613325,7375.55166 C258.695932,7376.06166 258.381486,7377.19167 258.910751,7378.07567 C259.440017,7378.95967 260.612702,7379.26267 261.530095,7378.75167 C262.447489,7378.24167 262.761934,7377.11167 262.231631,7376.22766 C261.702366,7375.34466 260.52968,7375.04166 259.613325,7375.55166 M245.918846,7367.15165 C244.859278,7367.15165 244,7367.97865 244,7368.99965 C244,7370.02065 244.859278,7370.84765 245.918846,7370.84765 C246.978414,7370.84765 247.836654,7370.02065 247.836654,7368.99965 C247.836654,7367.97865 246.978414,7367.15165 245.918846,7367.15165" id="linux_ubuntu-[#148]"> </path> </g> </g> </g> </g></svg>
                Download for Linux</a>
        </div>
        </div>
        <div class='col-md-2'></div>
        <div class="text-center pb-4">Click the link and download, unzip, and run the exe/deb</div>
    </div>
    
    </div>
    <div class="" style="">
        <zero-md src="https://raw.githubusercontent.com/hodge-py/peerair/v1.0.1/public/notes/PeerAir%20Release%20Notes.md">
            <template>
                <style>
                    .markdown-body {
                        
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                        width: 50%;
                        height: 30vh;
                        overflow-y: auto;
                        background-color: rgba(90, 90, 90, 0.384);
                        border-radius: 10px;
                        padding: 15px;

                    }
                    h1{
                        text-align: center;
                    }
                    


                </style>

            </template>

        </zero-md>

    </div>
    
    </div>
    
    
    
    <div class="container">
        <div class="row border-3" style="margin: 0px;">
            
        
        </div>
        
        </div>

  
    
    <div class="container-fluid pad-issue" style=" background-color: rgba(0, 0, 0, 0.384); color: rgba(255, 255, 255,1); ">
        <div class="" style=" margin: 0px;">
            
            <div class="fw-bold display-6 pb-3">Features</div>
            <div class="pb-4">PeerAir is a local file server that can be accessed from the hosting computers IP address. This IP address is automatically generated for the user and only users on the same router connection can access the site.</div>


          <div class='d-flex'>
            <table class="table table-dark table-hover text-center table-striped-columns ">
              <thead>
                <tr>
                  <th scope="col" class='align-middle'><h3></h3></th>
                  
                  <th scope="col" class='align-middle'>
                    <div class='d-flex flex-column justify-content-center'>
                    <div class='pb-3'>Free</div>
                    <a type="button" class="btn btn-primary p-3" href="https://www.dropbox.com/scl/fi/3e2jb0s1niz03wc429k1v/peerair-win32-x64.zip?rlkey=tr0hxlsz2a6rec37iduhoi9s0&dl=1" download>
                    <svg class="me-2" width="16px" height="16px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>windows [#174]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7439.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M13.1458647,7289.43426 C13.1508772,7291.43316 13.1568922,7294.82929 13.1619048,7297.46884 C16.7759398,7297.95757 20.3899749,7298.4613 23.997995,7299 C23.997995,7295.84873 24.002005,7292.71146 23.997995,7289.71311 C20.3809524,7289.71311 16.7649123,7289.43426 13.1458647,7289.43426 M4,7289.43526 L4,7296.22153 C6.72581454,7296.58933 9.45162907,7296.94113 12.1724311,7297.34291 C12.1774436,7294.71736 12.1704261,7292.0908 12.1704261,7289.46524 C9.44661654,7289.47024 6.72380952,7289.42627 4,7289.43526 M4,7281.84344 L4,7288.61071 C6.72581454,7288.61771 9.45162907,7288.57673 12.1774436,7288.57973 C12.1754386,7285.96017 12.1754386,7283.34361 12.1724311,7280.72405 C9.44461153,7281.06486 6.71679198,7281.42567 4,7281.84344 M24,7288.47179 C20.3879699,7288.48578 16.7759398,7288.54075 13.1619048,7288.55175 C13.1598997,7285.88921 13.1598997,7283.22967 13.1619048,7280.56914 C16.7689223,7280.01844 20.3839599,7279.50072 23.997995,7279 C24,7282.15826 23.997995,7285.31353 24,7288.47179" id="windows-[#174]"> </path> </g> </g> </g> </g></svg>
                    Download for Windows</a> 
                      </div>
                  </th>
                  
                  <th scope="col" class='align-middle'><div>Premium</div>
                    <div class='d-flex justify-content-center pb-3'>
                      <input style="" type="radio" class="btn-check rounded-0" name="options" id="option1" autocomplete="off" checked>
                      <label class="btn btn-outline-secondary flex-grow-1" for="option1">Monthly</label>

                      <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                      <label class="btn btn-outline-secondary flex-grow-1" for="option2">Yearly</label>
                    </div>
                    <div id='month-pay' class='fw-bold pb-3'>$2.99/Mo</div>
                    <div id='year-pay' class='fw-bold pb-3' style='display:none;'>$29.99/Yr</div>

                    <a href='https://buy.stripe.com/eVafZ0feh3E5ciQ3cc' class='btn btn-primary' id='month-btn' style='display:block;' >Subscribe Mo.</a>
                    <a href='https://buy.stripe.com/3cs0025DH5Md96E145' class='btn btn-primary' id='year-btn' style='display:none;'>Subscribe Yr.</a>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">Share files up to 200GB</td>
                  <td>
                    <svg width="16px" height="16px" viewBox="0 -3 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>checkmark</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-518.000000, -1039.000000)" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #ffffff;"> <path d="M548.783,1040.2 C547.188,1038.57 544.603,1038.57 543.008,1040.2 L528.569,1054.92 L524.96,1051.24 C523.365,1049.62 520.779,1049.62 519.185,1051.24 C517.59,1052.87 517.59,1055.51 519.185,1057.13 L525.682,1063.76 C527.277,1065.39 529.862,1065.39 531.457,1063.76 L548.783,1046.09 C550.378,1044.46 550.378,1041.82 548.783,1040.2" id="checkmark" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                  </td>
                  <td>
                    <svg width="16px" height="16px" viewBox="0 -3 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>checkmark</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-518.000000, -1039.000000)" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #ffffff;"> <path d="M548.783,1040.2 C547.188,1038.57 544.603,1038.57 543.008,1040.2 L528.569,1054.92 L524.96,1051.24 C523.365,1049.62 520.779,1049.62 519.185,1051.24 C517.59,1052.87 517.59,1055.51 519.185,1057.13 L525.682,1063.76 C527.277,1065.39 529.862,1065.39 531.457,1063.76 L548.783,1046.09 C550.378,1044.46 550.378,1041.82 548.783,1040.2" id="checkmark" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                  </td>
                </tr>
                <tr>
                  <td scope="row">Fast Local Transfers</td>
                  <td>
                  <svg width="16px" height="16px" viewBox="0 -3 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>checkmark</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-518.000000, -1039.000000)" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #ffffff;"> <path d="M548.783,1040.2 C547.188,1038.57 544.603,1038.57 543.008,1040.2 L528.569,1054.92 L524.96,1051.24 C523.365,1049.62 520.779,1049.62 519.185,1051.24 C517.59,1052.87 517.59,1055.51 519.185,1057.13 L525.682,1063.76 C527.277,1065.39 529.862,1065.39 531.457,1063.76 L548.783,1046.09 C550.378,1044.46 550.378,1041.82 548.783,1040.2" id="checkmark" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
</td>
                  <td>
                  <svg width="16px" height="16px" viewBox="0 -3 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>checkmark</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-518.000000, -1039.000000)" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #ffffff;"> <path d="M548.783,1040.2 C547.188,1038.57 544.603,1038.57 543.008,1040.2 L528.569,1054.92 L524.96,1051.24 C523.365,1049.62 520.779,1049.62 519.185,1051.24 C517.59,1052.87 517.59,1055.51 519.185,1057.13 L525.682,1063.76 C527.277,1065.39 529.862,1065.39 531.457,1063.76 L548.783,1046.09 C550.378,1044.46 550.378,1041.82 548.783,1040.2" id="checkmark" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
</td>
                </tr>
                <tr>
                <td scope="row">Only devices on the network can access</td>
                <td>
                <svg width="16px" height="16px" viewBox="0 -3 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>checkmark</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-518.000000, -1039.000000)" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #ffffff;"> <path d="M548.783,1040.2 C547.188,1038.57 544.603,1038.57 543.008,1040.2 L528.569,1054.92 L524.96,1051.24 C523.365,1049.62 520.779,1049.62 519.185,1051.24 C517.59,1052.87 517.59,1055.51 519.185,1057.13 L525.682,1063.76 C527.277,1065.39 529.862,1065.39 531.457,1063.76 L548.783,1046.09 C550.378,1044.46 550.378,1041.82 548.783,1040.2" id="checkmark" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
</td>
                <td>
                <svg width="16px" height="16px" viewBox="0 -3 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>checkmark</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-518.000000, -1039.000000)" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #ffffff;"> <path d="M548.783,1040.2 C547.188,1038.57 544.603,1038.57 543.008,1040.2 L528.569,1054.92 L524.96,1051.24 C523.365,1049.62 520.779,1049.62 519.185,1051.24 C517.59,1052.87 517.59,1055.51 519.185,1057.13 L525.682,1063.76 C527.277,1065.39 529.862,1065.39 531.457,1063.76 L548.783,1046.09 C550.378,1044.46 550.378,1041.82 548.783,1040.2" id="checkmark" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
</td>
              </tr>

                <tr>
              <td scope="row">File and/or link sharing</td>
              <td>
              <svg width="16px" height="16px" viewBox="0 -3 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>checkmark</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-518.000000, -1039.000000)" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #ffffff;"> <path d="M548.783,1040.2 C547.188,1038.57 544.603,1038.57 543.008,1040.2 L528.569,1054.92 L524.96,1051.24 C523.365,1049.62 520.779,1049.62 519.185,1051.24 C517.59,1052.87 517.59,1055.51 519.185,1057.13 L525.682,1063.76 C527.277,1065.39 529.862,1065.39 531.457,1063.76 L548.783,1046.09 C550.378,1044.46 550.378,1041.82 548.783,1040.2" id="checkmark" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
</td>
              <td>
              <svg width="16px" height="16px" viewBox="0 -3 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>checkmark</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-518.000000, -1039.000000)" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #ffffff;"> <path d="M548.783,1040.2 C547.188,1038.57 544.603,1038.57 543.008,1040.2 L528.569,1054.92 L524.96,1051.24 C523.365,1049.62 520.779,1049.62 519.185,1051.24 C517.59,1052.87 517.59,1055.51 519.185,1057.13 L525.682,1063.76 C527.277,1065.39 529.862,1065.39 531.457,1063.76 L548.783,1046.09 C550.378,1044.46 550.378,1041.82 548.783,1040.2" id="checkmark" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
</td>
            </tr>

                <tr>
      <td scope="row">File Expiry</td>
                      <td>5 Days</td>
                      <td>Never</td>
                    </tr>

                <tr>
                <td scope="row">File sharing outside of local network</td>
                  <td>
                  <svg fill="#ffffff" width="16px" height="16px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M114,100l49-49a9.9,9.9,0,0,0-14-14L100,86,51,37A9.9,9.9,0,0,0,37,51l49,49L37,149a9.9,9.9,0,0,0,14,14l49-49,49,49a9.9,9.9,0,0,0,14-14Z"></path></g></svg>
</td>
                  <td>
                  <svg width="16px" height="16px" viewBox="0 -3 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>checkmark</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-518.000000, -1039.000000)" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #ffffff;"> <path d="M548.783,1040.2 C547.188,1038.57 544.603,1038.57 543.008,1040.2 L528.569,1054.92 L524.96,1051.24 C523.365,1049.62 520.779,1049.62 519.185,1051.24 C517.59,1052.87 517.59,1055.51 519.185,1057.13 L525.682,1063.76 C527.277,1065.39 529.862,1065.39 531.457,1063.76 L548.783,1046.09 C550.378,1044.46 550.378,1041.82 548.783,1040.2" id="checkmark" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
</td>
                </tr>
                
                <tr>
                <td scope="row">Chat Saving</td>
                                <td>
                                  <svg fill="#ffffff" width="16px" height="16px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M114,100l49-49a9.9,9.9,0,0,0-14-14L100,86,51,37A9.9,9.9,0,0,0,37,51l49,49L37,149a9.9,9.9,0,0,0,14,14l49-49,49,49a9.9,9.9,0,0,0,14-14Z"></path></g></svg>
                                </td>
                                <td>
                                <svg width="16px" height="16px" viewBox="0 -3 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>checkmark</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-518.000000, -1039.000000)" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #ffffff;"> <path d="M548.783,1040.2 C547.188,1038.57 544.603,1038.57 543.008,1040.2 L528.569,1054.92 L524.96,1051.24 C523.365,1049.62 520.779,1049.62 519.185,1051.24 C517.59,1052.87 517.59,1055.51 519.185,1057.13 L525.682,1063.76 C527.277,1065.39 529.862,1065.39 531.457,1063.76 L548.783,1046.09 C550.378,1044.46 550.378,1041.82 548.783,1040.2" id="checkmark" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
</td>
                              </tr>
                
                <tr>
                <td scope="row">Early access to new features</td>
                  <td>
                  <svg fill="#ffffff" width="16px" height="16px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M114,100l49-49a9.9,9.9,0,0,0-14-14L100,86,51,37A9.9,9.9,0,0,0,37,51l49,49L37,149a9.9,9.9,0,0,0,14,14l49-49,49,49a9.9,9.9,0,0,0,14-14Z"></path></g></svg>
</td>
                  <td>
                  <svg width="16px" height="16px" viewBox="0 -3 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>checkmark</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: none;"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-518.000000, -1039.000000)" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #ffffff;"> <path d="M548.783,1040.2 C547.188,1038.57 544.603,1038.57 543.008,1040.2 L528.569,1054.92 L524.96,1051.24 C523.365,1049.62 520.779,1049.62 519.185,1051.24 C517.59,1052.87 517.59,1055.51 519.185,1057.13 L525.682,1063.76 C527.277,1065.39 529.862,1065.39 531.457,1063.76 L548.783,1046.09 C550.378,1044.46 550.378,1041.82 548.783,1040.2" id="checkmark" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
</td>
                </tr>

              </tbody>
            </table>
          </div>


            
        
        </div>
        
        </div>






        <div class="text-end" style="background-color: rgba(20, 20, 20, 0.473); color:white;">

            <a class="pe-3" href="./README_copy.md">License</a>

        </div>

    
    </body>
    
    <style>
    
html, body {
    margin: 0;
    padding: 0;
    

}

a {
color: white;
}
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
  color: lightblue;
}

a:active {
  text-decoration: none;
}
    
    body {
        /* background-color: rgb(231, 231, 231); */
       background-color: rgb(56, 56, 56);
        background-size: cover;
        font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        
    }
    
    #border-remove{
        border-left: 2px solid;
        padding: 100px;
    }

    .pad-issue {
      padding: 2.5em 9.375em 0 9.375em;
    }
    
    @media screen and (max-width: 600px) {
      .pad-issue {
        padding: 0em;
      }
    
    }
    :root {
  color-scheme: dark;
}

      .btn {border-radius: 0;}
      .card {border-radius: 0;}
    
    </style>
    
    <script>
    $(document).ready(function () {

    $(document).on('click','#logout-control', function () {
        
        window.location.href = './logout.php';

    });


    $(document).on('click','#option1', function () {
        $('#month-pay').css('display','block');
        $('#year-pay').css('display','none');

      $('#month-btn').css('display','block');
      $('#year-btn').css('display','none');

    });

      $(document).on('click','#option2', function () {
          $('#month-pay').css('display','none');
          $('#year-pay').css('display','block');

        $('#month-btn').css('display','none');
        $('#year-btn').css('display','block');

      });

      });
    
    </script>
    
    
    </html>
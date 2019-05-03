<!DOCTYPE html>
<html>
<head>
    <title>JG Summit Style Guide</title>

    <?php include("atomic-head.php"); ?>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700');
      @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900');
        html, body {
            height: 100%;
            background: #fff;
        }
        .indexBlock {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            text-align: left;
            max-width: 600px;;
            margin-left:100px;
            z-index: 99;
        }

        .inline-block{display: inline-block}

        .bg-img{
            position: fixed;
            bottom: 0;
            right: -150px;
            z-index: 0;
        }

        .logo-img{
            position: fixed;
            top:25px;
            right:25px;

        }

        img {max-width: 100%;}

        .shadow{
            box-shadow: 0px 0px 32px 4px rgba(0, 0, 0, 0.25);
        }

        p {
            font-family: 'Source Serif Pro', serif;
            font-weight: 300;
          }

        a {
            color: #0072BC;
            font-weight:bold;
        }
        .logo{
            display: inline-block;
            margin-bottom: 61px;
        }

        .font-weight300{font-weight: 300}

        .font-weight400{font-weight: 400}

        .font-weight600{font-weight: 600}

        .font-weight700{font-weight: 700}

        .font-weight900{font-weight: 900}

        .font-size32{font-size:32px}

        .font-size60,h1{font-size:60px}

        .font-size72{font-size:72px}

        .font-size90{font-size:90px}

        .font-size120{font-size:120px}

        .line-height60{line-height: 60px}

        .margin-top40{margin-top: 40px}
    </style>

</head>
<body>
<div class="indexBlock">
    <div class="font-weight300 font-size32">USER INTERFACE </div>
    <div class="font-size72 line-height60">
        <div class="inline-block font-weight400">STYLE</div>
        <div class="inline-block font-weight700">GUIDE</div>
    </div>
    <p class="margin-top40">This document serves as a style guide that outlines the principles and standards in developing user interface for JG Summit.
<br> <br>
The purpose of this document is to drive consistency within JG Summit's many user interface. It shouldn't limit the developers/designers
in developing creative user interfaces for as long as they are within the boundaries of the JG Summit identity
    <br><br><a href="atomic-core/?cat=Readme">Start Here</a>.</p>
</div>
<img src="img\Bg.jpg" class="bg-img">
<img class="logo-img" src="img\JG.jpg" width="100">
</body>
<?php include("atomic-foot.php"); ?>
</html>

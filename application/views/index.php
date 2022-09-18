<!DOCTYPE html>
<html>
<title>Pubication des mariages</title>

<!-- Mirrored from www.w3schools.com/w3css/tryw3css_templates_bw_portfolio.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:43:16 GMT -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Montserrat", sans-serif
    }

    .w3-row-padding img {
        margin-bottom: 12px
    }

    .bgimg {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url('<?php echo base_url() ?>assets/images/wedding_couple.jpg');
        min-height: 100%;
    }
</style>
<body>

<!-- Sidebar with image -->
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
    <div class="bgimg"></div>
</nav>

<!-- Hidden Sidebar (reveals when clicked on menu icon)-->
<nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2"
     id="mySidebar">
    <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright"
       style="padding:0 12px;">
        <i class="fa fa-remove"></i>
    </a>
    <div class="w3-bar-block w3-center">
        <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Home</a>
        <a href="#portfolio" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
           onclick="closeNav()">Portfolio</a>
        <a href="#about" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">About</a>
        <a href="#contact" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Contact</a>
    </div>
</nav>

<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:40%">

    <!-- Menu icon to open sidebar -->
    <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;"
          onclick="openNav()"><i class="fa fa-bars"></i></span>

    <!-- Header -->
    <header class="w3-container w3-center" style="padding:128px 16px" id="home">
        <h1 class="w3-jumbo"><b>Publication des mariages</b></h1>
        <p>Photographer and Web Designer.</p>
        <img src="<?php echo base_url() ?>assets/images/profile_girl.jpg" class="w3-image w3-hide-large w3-hide-small w3-round"
             style="display:block;width:60%;margin:auto;">
        <img src="<?php echo base_url() ?>assets/images/profile_girl.jpg" class="w3-image w3-hide-large w3-hide-medium w3-round" width="1000"
             height="1333">
    </header>


    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">

        <!-- Testimonials -->
        <h3 class="w3-padding-24"></h3>
        <?php foreach ($mariages as $m): ?>
            <img src="<?php echo base_url() ?>assets/images/avatar_g2.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right"
                 style="width:80px">
            <p>
                <span class="w3-large w3-text-black w3-margin-right"><?php echo $m->epoux." et ".$m->epouse ?></span> <?php echo $m->date ?>
            </p>
            <p>Jane Doe is just awesome. I am so happy to have met her!</p><br>
        <?php endforeach; ?>

    </div>


    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin:-24px">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-medium"><a href="<?php echo base_url() ?>candidat" class="w3-hover-text-green">Candidat</a> | <a href="<?php echo base_url() ?>nouveau" class="w3-hover-text-green">Nouveau</a>
        </p>
        <!-- End footer -->
    </footer>

    <!-- END PAGE CONTENT -->
</div>

<script>
    // Open and close sidebar
    function openNav() {
        document.getElementById("mySidebar").style.width = "60%";
        document.getElementById("mySidebar").style.display = "block";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>

</body>

<!-- Mirrored from www.w3schools.com/w3css/tryw3css_templates_bw_portfolio.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:43:17 GMT -->
</html>
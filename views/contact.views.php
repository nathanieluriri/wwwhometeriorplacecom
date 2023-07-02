<!DOCTYPE html>
<html lang="en">
<?php require("views/partials/head.php") ?>
<body>
     
<?php require("views/partials/nav.php") ?>

<?php require("views/partials/hero.php") ?>
    <section class="content-wrapper ContactUs">
        <div class="info-section">
        <h2>Ask for our help <a target="_blank" href="https://wa.link/tg5cfj">
        <button class="btn">Request a Consultation via WhatsApp</button></a></h2> 
        <p>Request a personalized interior design for your apartment</p>
         <p>In order to craft your dream interior design, we kindly request that you provide us with some essential information. By sharing these details, we can tailor our services to meet your specific needs and preferences, ensuring a truly personalized experience.</p>
        </div> 


        <div class="contact-section">
            <form action="mailto:ContactUs@hometerior.com" method="post" enctype="text/plain">
                <label for="name" >Name:</label>
                <input type="text" name="name" id="Name"><br> <br>
                <label>E-mail:</label>
                <input type="email" name="mail"><br> <br>
                <label >Message:</label>
                <textarea>  </textarea><br><br>
                <i class="fas fa-check-circle "></i>
                <i class="fas fa-exclamation-circle "></i>
                <input class="btn" type="submit" value="Send">
                <input class="btn" type="reset" value="Reset">
            </form>
        </div></section>

</body>

<?php require("views/partials/foot.php");?>
</html>
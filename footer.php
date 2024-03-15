</main>
<?php
$footer_pic = get_field('profile_pic');
$display_footer_pic = $footer_pic['sizes']['cstm_size'];
$contactnumber = get_field('contact_number');
$email = get_field('email_address');
?>
<div class="footer2">

</div>
<div class="footer">

    <div class="footer-container container">
        <img src="<?php echo $display_footer_pic; ?>" alt="" class="footer_image">
        <h1 class="footer-text">Let's Work Together</h1>
        <hr style="color:white;">
    </div>

    <div class="footer-social">
        <h5 class="side-bar-header">SOCIALS</h5>
        <div class="sidebar-socials">
            <ul>
                <li><a href="https://www.instagram.com/lei_ooooo/" target="_blank">Instagram</a></li>
                <li><a href="https://www.facebook.com/Leio.elvambuena" target="_blank">Facebook</a></li>
                <li><a href="https://www.linkedin.com/in/leonard-jay-elvambuena-4671912a2/" target="_blank">LinkedIn</a></li>
            </ul>
        </div>
    </div>
    <div class="footerbtn-container">
        <div class="footer-buttons">
            <div class="footer-btn">
                <button class="contact-btn">
                    <span>
                        <?php echo $contactnumber; ?>
                    </span>
                </button>
            </div>
            <div class="footer-btn2">
                <button class="contact-btn2">
                    <span>
                        <?php echo $email; ?>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
    </body>

    </html>
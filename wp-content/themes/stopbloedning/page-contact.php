<?php
/*
Template Name: Contact Page
*/

get_header(); ?>
 <div class="contact-section">
        <div class="contact-info">
            <h2>Vi er her for at hjælpe!</h2>
            <p>Fortæl os, hvordan vi bedst kan betjene dig. Brug kontaktformularen til at sende os en e-mail med dine spørgsmål. Vi er beærede over at støtte dig på din rejse til øget viden. Vores specialister vil kontakte dig hurtigst muligt.</p>
        </div>
        <div class="contact-form">
        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
    <input type="hidden" name="action" value="submit_contact_form">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone number">
    <textarea name="message" placeholder="Comment" required></textarea>
    <button type="submit">Send Message</button>
</form>


        </div>
    </div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="partner">
    <h1>"This is our team's mission"</h1>
    <h3>Further description of mission and goal, Ut et massa mi. Aliquam in <br /> hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula<br /> consectetur, ultrices mauris.</h3>
    <div class="button">
        <button class="button-primary" id="scrollButton">Contact Us</button>
    </div>
</div>

<div class="ourpartnerships">
    <h1>Our <br /> Partnerships</h1>
    <div class="partnerships">
        <div class="partnership">
            <div class="logo"></div>
            <h3>Company 1</h3>
            <p>What they did and said about us</p>
        </div>
        <div class="partnership">
            <div class="logo"></div>
            <h3>Company 2</h3>
            <p>They did this</p>
        </div>
    </div>
</div>

<div class="testimonials">
    <h1>Testimonials</h1>
    <div class="testimonial">
        <div class="person-image"></div>
        <h3>Person 1</h3>
        <p>"Insert quote here"</p>
    </div>
</div>

<div id="contact-section" class="contact-us">
    <h1>Contact Us</h1>
    <h3>We invite you to join our mission</h3>
    <form>
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="tel" name="phone" placeholder="Enter your phone number" required>
        <input type="text" name="organization" placeholder="Enter your organization name" required>
        <textarea name="message" placeholder="Enter your message" required></textarea>
        <button type="submit">Submit</button>
    </form>
</div>

<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const scrollButton = document.getElementById('scrollButton');
    const contactSection = document.getElementById('contact-section');

    console.log('DOM fully loaded and parsed');
    console.log('Scroll Button:', scrollButton);
    console.log('Contact Section:', contactSection);

    scrollButton.addEventListener('click', function() {
        console.log('Scroll Button Clicked');
        contactSection.scrollIntoView({ behavior: 'smooth' });
    });
});
</script>

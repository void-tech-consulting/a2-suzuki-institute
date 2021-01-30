<?php /* Template Name: contact */ ?>
<?php 
  get_header(); 
?>

<div class="page-container">
    <div class="page-content-container">
        <h2>Contact</h2>
        <hr></hr>

        <div class="contact-boxes">
            <div class="contact-fields">
                <label for="name" class="contact-text">Name</label>
                <br>
                <input class="contact-input-box" type="text" id="name" name="name" placeholder="Enter your name">
                <br>
                <label for="emailPhone" class="contact-text">Email / Phone</label>
                <br>
                <input class="contact-input-box" type="text" id="emailPhone" name="emailPhone" placeholder="Enter your email address or phone">
                <br>
                <label for="message" class="contact-text">Message</label>
                <br>
                <input class="contact-input-box" style="height: 200px; padding-top: 10px; padding-right: 143px; padding-bottom: 154px" type="text" id="message" name="message" placeholder="Enter a message">
                <br>
                <button>Send</button>
            </div>

            <div class="contact-message-container">
                <h2 style="text-align: center">We'd love to hear from you!</h2>
                <p style="text-align: center; width: 72%">Call and leave a message or send an email to schedule lessons and get more information.</p>
                <br>
                <p style="text-align: center">(734) 726-0171</p>
                <p style="text-align: center">annarborsuzuki@gmail.com</p>
            </div>
        </div>
    </div>
</div>

<?php 
  get_footer(); 
?>
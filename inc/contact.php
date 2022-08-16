<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
};
?>

<section id="contact">
  <div class="contact__container">

    <div class="contact__content">

      <div class="contact__info-container">
        <h2 class="contact__heading">Get in touch...</h2>
        <p class="contact__text">...if you would like to know more about me, have a question or comment
          about my work, or would like to discuss working together. </p>
        <a href="tel:07808550651" class="contact__details contact--tel"><span class="icon icon--tel"></span> 07808
          550651</a>
        <a href="mailto:will@camel-case.co.uk" class="contact__details contact--email"><span
            class="icon icon--mail"></span> william.mccloy@gmail.com</a>
        <p class="contact__text">Alternatively, complete and submit the form, and I'll get back to you as
          soon as I can.</p>
      </div>

      <form id="contactForm" class="contact__form-container" method="post" action="inc/submitContact.php">
          <?php
            if (isset($_GET['message'])) {
                switch ($_GET['message']) {
                    case 1:
                        echo '<div class="form__message success">'
                          . 'Your message has been sent - I will be in touch!'
                          . '</div>';
                        break;
                    case 2:
                        echo '<div class="form__message failure">'
                          . 'Please correct the following errors.'
                          . '</div>';
                        foreach ($_SESSION['errors'] as $error) {
                            echo '<div class="form__message failure">'
                                . 'The ' . $error['field'] . ' is ' . $error['error'] . '.'
                                . '</div>';
                        }
                        break;
                    case 3:
                        echo '<div class="form__message failure">'
                          . 'Database connection error'
                          . '</div>';
                        break;
                }
            } else {
                echo '<div class="form__message success">'
                  . '</div>';
            }
            ?>
        <div class="contact__input">
          <label for="name"></label>
          <input id="name" name="name" type="text" class="input--fname" placeholder="Your Name*"
              <?php
                if (isset($_SESSION['name'])) {
                    echo ' value="' . $_SESSION['name'] . '"';
                }
                ?>
          >
        </div>
        <div class="contact__input">
          <label for="email"></label>
          <input id="email" name="email" type="email" class="input--email" placeholder="Email Address*"
              <?php
                if (isset($_SESSION['email'])) {
                    echo ' value="' . $_SESSION['email'] . '"';
                }
                ?>
          >
        </div>
        <div class="contact__input">
          <label for="subject"></label>
          <input id="subject" name="subject" type="text" class="input--subject" placeholder="Subject*"
              <?php
                if (isset($_SESSION['subject'])) {
                    echo ' value="' . $_SESSION['subject'] . '"';
                }
                ?>
          >
        </div>
        <div class="contact__input">
          <label for="message"></label>
          <textarea id="message" name="message" rows=50 class="input--message" placeholder="Message*"
          <?php
            if (isset($_SESSION['message'])) {
                echo '>' . $_SESSION['message'];
            } else {
                echo '>';
            }
            ?>
          </textarea>
        </div>
        <input type="submit" class="button" id="contact__submit">
        <div class="contact__required">Please complete all fields marked * before submitting.</div>
      </form>

    </div>

  </div>
</section>

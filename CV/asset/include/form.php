
 <hr>
        <form method="post" action="cv-bootstrap.php">
          <div class="row">
          <div class="form-group col-sm-6">
              <label for="name" class="h4">Name</label>
              <input name="name" class="form-control" placeholder="Entrer votre nom" required="Your name is required" >
              <div class="help-block with-errors"></div>
          </div>
          <div class="form-group col-sm-6">
              <label for="email" class="h4">Email</label>
              <input name="email" class="form-control" placeholder="Your email" required="Your email is required" type="email">
              <div class="help-block with-errors"></div>
          </div>
      </div>
      <div class="form-group">
          <label for="message" class="h4 ">Message</label>
          <textarea name="message" class="form-control" rows="5" placeholder="Your message" required></textarea>
          <div class="help-block with-errors"></div>
      </div>
          <button type="submit" class="btn btn-info pull-right ">Valid this form</button>
          <br>

      </form>




<?php /* 
<form role="form" action="" method="post">
	<br>
	 <div class="form-group">
        <label class="sr-only" for="name">Name</label>
        <input type="text" name="email" placeholder="Your name" class="contact-email form-control" id="name" required>
    </div>
    <div class="form-group">
        <label class="sr-only" for="contact-email">Email</label>
        <input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="-email" required>
    </div>
    <div class="form-group">
        <label class="sr-only" for="contact-subject">Subject</label>
        <input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="subject" required>
    </div>
    <div class="form-group">
        <label class="sr-only" for="contact-message">Message</label>
        <textarea name="message" placeholder="Message..." class="contact-message form-control" id="message" required></textarea>
    </div>
    <button type="submit" class="btn">Send message</button>
</form>*/?>
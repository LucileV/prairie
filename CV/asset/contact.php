<?php include 'include/header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
          <h3>Contact</h3>
        </div>
    </div>
          <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
                  <form id="contact-form" class="form" action="reponse.php" method="post" role="form">
                      <div class="form-group">
                          <label class="form-label" for="name">Your Name</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1" required>
                      </div>                            
                      <div class="form-group">
                          <label class="form-label" for="email">Your Email</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" required>
                      </div>                            
                      <div class="form-group">
                          <label class="form-label" for="subject">Subject</label>
                          <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
                      </div>                            
                      <div class="form-group">
                          <label class="form-label" for="message">Message</label>
                          <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message..." tabindex="4" required></textarea>                                 
                      </div>
                      <div class="text-center">
                          <button type="submit" class="btn btn-start-order">Send Message</button>
                      </div>
                  </form>
              </div>
          </div>

</div>
<?php include 'include/footer.php' ?>
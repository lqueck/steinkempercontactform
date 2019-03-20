<div class="form-container">
<div class="form-heading">
  <div class="line">begin</div><br />your case <span>evaluation</span>
</div><!--/.form-heading-->

<form role="form" id="OTMForm">
  <input type="hidden" name="suburl" id="sub-url" value="">
  <input type="hidden" name="submitted-from" id="submitted-from" value="">
  <div class="form-group">
    <input type="text" class="form-control" id="name" name="from" placeholder="Name" required>
    <span class="help-block" style="display: none;">Please enter your name.</span>
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" id="phoneNumber" name="phone" placeholder="Phone Number" required>
    <span class="help-block" style="display: none;">Please enter a valid phone number.</span>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="email" name="sender" placeholder="Email Address" required>
    <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span>
  </div>
  <div class="form-group">
    <textarea rows="3" cols="100" class="form-control" id="message" name="msg" placeholder="Message" required></textarea>
    <span class="help-block" style="display: none;">Please enter a message.</span>
  </div>
  <?php /*
  <div class="form-group" style="margin-top: 10px;">
    <input type="text" class="form-control" name="captcha_code" id="captcha_code" placeholder="Captcha">
    <span class="help-block" style="display: none;">Please enter captcha code.</span>
    <img id="captcha" src="library/vender/securimage/securimage_show.php" title="CAPTCHA Image" alt="CAPTCHA Image">
    <a href="#" onclick="document.getElementById('captcha').src = 'library/vender/securimage/securimage_show.php?' + Math.random(); return false"
      class="btn btn-info btn-sm refresh-link"
      title="Refresh">
      <i class="fa fa-refresh"></i>
    </a>
  </div>
  */ ?>
  <button type="submit" id="contactSubmit" class="btn-submit">Submit Message</button>
</form>
<!-- Display a success notification -->
</div>

<div class="user-container container">
  <?php if ( ! empty($error_string)):?>
    <div class="alert alert-error">
      <?php echo $error_string;?>
    </div>
  <?php endif;?>

  <?php $notice_string = $this->session->flashdata('notice'); ?>
  <?php if ( ! empty($notice_string)): ?>
    <h2><span>Thanks!</span></h2>
    <div class="row-fluid">
      <div class="span12">
        <div class="alert alert-success">
          <?php echo $notice_string;?>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span6 offset3">
        <div class="well well-small">
          <div class="row-fluid">
            <div class="span6">
              {{ theme:image file="registration/breakdancing.png" alt="Welcome" }}
            </div>
            <div class="span6">
              <p>
                Great. We'll let you know when we're ready for you. In the mean time, help share the joy and
                <a href="https://twitter.com/intent/tweet?text=Trading #bitcoin on http://www.crypto.st" target="_blank">spread the word</a>!
              </p>
              <p>
                Keep an eye out for our email (check spam folder if you haven't receive anything yet).
                If you have an questions, please don't hestitate to <a href="/contact">contact us</a>.
              </p>
              <p>
                We'll be inviting you in on a rolling basis, so please be patient.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php else: ?>
    <h2><span>Request an invitation</span></h2>
    <div class="row-fluid">
      <div class="span6 offset3">
        <div class="well well-small">
          <h3>Join our private beta</h3>
          <?php echo form_open('register'); ?>
            <div class="control-group">
              <label for="email">e-mail address</label>
              <input type="email" placeholder="satoshin@gmx.com" name="email" value="<?php echo $_user->email ?>" class="span12">
              <?php echo form_input('d0ntf1llth1s1n', ' ', 'class="default-form" style="display:none"') ?>
            </div>
            <div class="control-group">
              <label for="first_name">first name</label>
              <input type="text" placeholder="Satoshi" name="first_name" class="span12">
            </div>
            <div class="control-group">
              <label for="last_name">last name</label>
              <input type="text" placeholder="Nakamoto" name="last_name" class="span12">
            </div>
            <div class="control-group">
              <?php foreach($profile_fields as $field): ?>
                <?php if($field['field_slug'] == 'country'): ?>
                  <label for="<?php echo $field['field_slug'] ?>"><?php echo (lang($field['field_name'])) ? lang($field['field_name']) : $field['field_name'];  ?></label>
                  <div class="input"><?php echo $field['input'] ?></div>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
            <div class="control-group">
              <label for="password">password</label>
              <div class="inline-inputs">
                <input type="password" placeholder="password" name="password" class="span12">
              </div>
            </div>
            <div class="control-group">
              <input type="submit" class="btn btn-success span12" value="sign up for beta" name="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <h2><span>Got questions?</span></h2>
  <div class="row-fluid">
    <div class="span4">
      <h4>How can I fund my account?</h4>
      <p>
        Upon launch, you will be able to fund your account quickly
        and easily through BitInstant, Dwolla, LocalTill, direct wire
        transfers, and even cash deposits. We will also seriously consider
        Chipotle gift cards.
      </p>
    </div>
    <div class="span4">
      <h4>How long will I have to wait?</h4>
      <p>
        We expect to be up and running by the beginning of
        May with a rolling invitation based on first-come first-serve.
        And when we’re ready to accept deposits, you can also jump to
        the head of the queue by prefunding with cash or bitcoin initial
        deposits or by emailing us a provocative photo.
      </p>
    </div>
    <div class="span4">
      <h4>How will I know when you launch?</h4>
      <p>
        We’ll email you every step of the way.
        For an added $5 fee, provide your phone number and a
        <a href="http://fiverr.com/jerseyferretti/call-anyone-you-want-and-wish-them-a-happy-birthday-or-tell-them-whatever-you-want-as-christopher-walken" target="_blank">Christopher Walken</a>
        impersonator can call you when we launch.
      </p>
    </div>
  </div>
</div>
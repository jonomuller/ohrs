<!DOCTYPE html>
<html>
  <head>
    <title>Join us</title>
    <link rel="icon" type="image/png" href="images/favicon.ico"/>
  </head>
  <body>
    <?php require_once('header.php'); ?>
    <div class="container">

      <div class="row">
        <div class="col-md-9 col-xs-12">
          <h2>Join the society</h2>
          <p>If you would like to join the society, please fill out the form below.</p>
          <form id="join-us-form">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="first name">
            </div>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="last name">
            </div>
            <div class="input-group">
              <input type="email" class="form-control" placeholder="email">
            </div>
            <div class="input-group">
              <input type="number" class="form-control" placeholder="bod card number">
            </div>
            <button type="join" class="btn btn-default">Join us</button>
          </form>
        </div>
        <div class="col-md-3 col-xs-12">
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <h3>Contact us</h3>
              <p><a href="mailto:flora.scorer@lmh.ox.ac.uk">flora.scorer@lmh.ox.ac.uk</a></p>
              <p><a href="mailto:name@example.com">name@example.com</a></p>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-md-12">
              <h3>Subscribe to our newsletter</h3>
              <form id="subscribe-form">
                <div class="input-group">
                  <input id="subscribe-email" type="email" class="form-control" placeholder="Email address">
                </div>
                <div class="alert alert-danger alert-dissmissable">
                  <button id="alert-button" type="button" class="close" data-hide="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <label for="subscribe-email"></label>
                </div>
                <div id="button-area">
                  <button id="submit-button" type="submit" data-hide="alert" class="btn btn-default">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    <?php require_once('footer.php'); ?>
  </body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/payment.css">
</head>

  <body class="bg-light">

    <div class="container">
    
    <form action="" 
		      method="post">
        
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/payment-icon.png" alt="" width="72" height="72">
        <h2>Payment Details</h2>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product 1</h6>
              </div>
              <span class="text-muted">12Tk</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product 2</h6>
              </div>
              <span class="text-muted">8Tk</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product 3</h6>
              </div>
              <span class="text-muted">5Tk</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
              </div>
              <span class="text-success">-5Tk</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (BDT)</span>
              <strong>20Tk</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter Voucher Code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Apply</button>
              </div>
            </div>
          </form>
        </div>
          
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Gulshan" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
              
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment Method</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="">Bkash</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="">Rocket</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="">Nagad</label>
              </div>
            </div>
              
            <hr class="mb-4">
            <div>
                <button class="btn btn-primary btn-lg" type="submit">Cancel</button>
                <button class="btn btn-success btn-lg" type="submit">Checkout</button>
            </div>
          </form>
        </div> 
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 Goodies Bazar</p>
      </footer>
    </form>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>

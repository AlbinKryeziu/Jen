<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login | SelfPayNet</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

        <link rel="stylesheet" href="{{ asset('loginPages/css/style.css') }}" />
    </head>
    <style>
   .hide{
    display: none;
   }
    </style>
    <body>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 70px;">
                    <div class="col-md-6 text-center mb-5"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="wrap d-md-flex">
                            <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                                <div class="text w-100">
                                    <img src="{{ asset('jen/assets/img/logo-trnasparent.png') }}" width="200px;" />
                                    <br />
                                    <br />
                                    <h3 style="color: white">Welcome to SelfPayNet</h3>
                                    <p>To use our web application you must first make a payment which costs only 50$ a month.</p>

                                    
                                </div>
                            </div>
                            <div class="login-wrap p-4 p-lg-5">
                                
                     
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4">Payment Method</h3>
                                    </div>
                                   
                                </div>
                                @if (Session::has('success'))
                     <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p style="color: red">{{ Session::get('success') }}</p>
                     </div>
                     @endif
                                <div class='error form-group hide mb-3' >
                                    <div class='alert-danger alert form-control' style="color: red" >Please correct the errors and try
                                       again.
                                    </div>
                                 </div>
                                @if (session('status'))
                                <span>{{ session('status') }}</span>

                                @endif
                                <form
                        role="form"
                        action="{{ route('stripe.post') }}"
                        method="post"
                        class="require-validation"
                        data-cc-on-file="false"
                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                        id="payment-form">
                        @csrf

                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Name on Card</label>
                                        <input
                                        autocomplete='off' class='form-control card-number' placeholder="Name on Card" size='20'
                                        type='text'>
                                       
                                        @error('email')
                                        <span style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Card Number</label>
                                        <input
                                 autocomplete='off' class='form-control card-number' size='20'
                                 type='text'>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">CVC</label>
                                        <input autocomplete='off'
                                        class='form-control card-cvc' placeholder='ex. 311' size='4'
                                        type='text'>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Expiration Month</label>
                                        <input
                                 class='form-control card-expiry-month' placeholder='MM' size='2'
                                 type='text'>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Expiration Year</label>
                                        <input
                                 class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                 type='text'>

                                    </div>
                                    
                                    <div class="form-group">
                                       
                                    </div>
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (50$)</button>
                                </form>
                                <div class='form-row row'>
                                    
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
   <script type="text/javascript">
      $(function() {
    var $form = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                'input[type=text]', 'input[type=file]',
                'textarea'
            ].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
        $errorMessage.addClass('hide');
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });
        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
    });
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
});
   </script>
    </body>
</html>

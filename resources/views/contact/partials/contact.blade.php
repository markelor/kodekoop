<div role="main" class="main">
  <section class="page-header">
    <div class="container">
      <div class="row">
        <div class="col">
          <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Contact Us</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h1>Contact Us</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
  <div id="googlemaps" class="google-map"></div>

  <div class="container">

    <div class="row">
      <div class="col-lg-6">

        <div class="alert alert-success d-none mt-4" id="contactSuccess">
          <strong>Success!</strong> Your message has been sent to us.
        </div>

        <div class="alert alert-danger d-none mt-4" id="contactError">
          <strong>Error!</strong> There was an error sending your message.
          <span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
        </div>

        <h2 class="mb-3 mt-2"><strong>@lang('contact.contact')</strong></h2>
                
        {!!Form::open(['id'=>'contactForm','name'=>'contactForm'])!!}
          <div class="form-row">
            <div class="form-group col-lg-6">
              <label>@lang('contact.name-username') *</label>
              {!!Form::text('name',null,['id'=>'name','class'=>'form-control','data-msg-required'=>'Please enter your name.','maxlength'=>'100','required' => ''])!!}
            </div>
            <div class="form-group col-lg-6">
             <label>@lang('contact.subject')</label>
              {!!Form::text('subject',null,['id'=>'subject','class'=>'form-control','data-msg-required'=>'Please enter the subject.','maxlength'=>'100','required' => ''])!!}      
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-6">
             <label>@lang('contact.email') *</label>
              {!!Form::email('email',null,['id'=>'email','class'=>'form-control','data-msg-required'=>'Please enter your email address.','maxlength'=>'100','required' => ''])!!}
            </div>
            <div class="form-group col-lg-6">
             <label>@lang('contact.phone') *</label>
              {!!Form::text('phone',null,['id'=>'phone','class'=>'form-control','data-msg-required'=>'Please enter your phone.','maxlength'=>'9','required' => ''])!!}
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <label>@lang('contact.message') *</label>
              {!!Form::textarea('message',null,['id'=>'message','class'=>'form-control','data-msg-required'=>'Please enter your message.','maxlength'=>'5000','rows' => '10','required' => ''])!!}
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              {!!Form::button(trans('contact.send'), ['name'=>'send','id'=>'send','class'=>'btn btn-primary btn-lg','data-loading-text'=>'Loading...'])!!}
            </div>
          </div>
        {!!Form::close()!!}
      </div>
      <div class="col-lg-6">
        <h4 class="heading-primary mt-4">Get in <strong>Touch</strong></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        {!!Form::open(['id'=>'passGeneratorForm','name'=>'passGeneratorForm'])!!}
        {!!Form::button('Sakatu hemen Markel!', ['class' => 'btn','id'=>'passGenerator'])!!}
        {!!Form::close()!!}
        <hr>

        <h4 class="heading-primary">The <strong>Office</strong></h4>
        <ul class="list list-icons list-icons-style-3 mt-4">
          <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
          <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
          <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
        </ul>

        <hr>

        <h4 class="heading-primary">Business <strong>Hours</strong></h4>
        <ul class="list list-icons list-dark mt-4">
          <li><i class="fa fa-clock-o"></i> Monday - Friday - 9am to 5pm</li>
          <li><i class="fa fa-clock-o"></i> Saturday - 9am to 2pm</li>
          <li><i class="fa fa-clock-o"></i> Sunday - Closed</li>
        </ul>

      </div>

    </div>

  </div>

</div>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

<script>
// SESERVATION TABLE
$("#send").click(function(event) {
     $("#contactForm").valid();
    var token = $("input[name=_token]").val();
    var name = $("#name").val();
    var subject = $("#subject").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var msg = $("#message").val();
    var route = "{{route('routes.contact')}}";
    var form_btn = $("#send");
    var form_result_div = '#form-result';

    $(form_result_div).remove();
 
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type:'post',
        datatype: 'json',
        data: {name: name, subject: subject, email: email, phone: phone , msg:msg },
        success: function(data) {
            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));

            if (data.success == 'true') {
                $(".form-control").val('');
                $("#contactForm").trigger("reset");
            }
            form_btn.prop('disabled', false).html(form_btn_old_msg);
            $(form_result_div).html("<div class='formSent'><strong>Zure mezua bidali da!</strong> Eskerrik asko gurekin harremanetan jartzeagatik.</div>").fadeIn('slow');
            setTimeout(function() { $(form_result_div).fadeOut('slow'); }, 6000);
        },
        error: function(data) {
          console.log(data);
            form_btn.before('<div id="form-result" class="alert alert-danger" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            form_btn.prop('disabled', false).html(form_btn_old_msg);
            $(form_result_div).html("<div class='formSent'><strong>Akatsa mezua bidaltzerakoan!</strong> Mesedez, saiatu zaitez berriz.</div>").fadeIn('slow');
            setTimeout(function() { $(form_result_div).fadeOut('slow'); }, 6000);
        }
    });

});

$("#passGenerator").click(function(event) {
  console.log('pass');
  var token = $("input[name=_token]").val();
  var route = "./passGenerator";
  var length = 4;
  $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type:'post',
        datatype: 'json',
        data:{length: length},
        success: function(data) {
          console.log(data);
        },
        error: function(data){
          console.log("error");
        }
      });
  });
</script>
         
  
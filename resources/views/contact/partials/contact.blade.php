<div role="main" class="main">
  <section class="page-header">
    <div class="container">
      <div class="row">
        <div class="col">
          <ul class="breadcrumb">
            <li><a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.home') )}}">@lang('menu.home')</a></li>
            <li class="active">@lang('menu.contact')</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

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
              {!!Form::text('name',null,['id'=>'name','class'=>'form-control','data-msg-required'=>trans('validation.name.data-msg-required'),'data-msg-minlength'=>trans('validation.name.data-msg-minlength'),'minlength'=>'3','maxlength'=>'50','required' => ''])!!}
            </div>
            <div class="form-group col-lg-6">
             <label>@lang('contact.subject') *</label>
              {!!Form::text('subject',null,['id'=>'subject','class'=>'form-control','data-msg-required'=>trans('validation.subject.data-msg-required'),'maxlength'=>'100','required' => ''])!!}      
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-6">
             <label>@lang('contact.email') *</label>
              {!!Form::email('email',null,['id'=>'email','class'=>'form-control','data-msg-required'=>trans('validation.email.data-msg-required'),'data-msg-email'=>trans('validation.email.data-msg-email'),'maxlength'=>'100','required' => ''])!!}
            </div>
            <div class="form-group col-lg-6">
             <label>@lang('contact.phone') *</label>
              {!!Form::text('phone',null,['id'=>'phone','class'=>'form-control','data-msg-required'=>trans('validation.phone.data-msg-required'),'data-msg-digits'=>trans('validation.phone.data-msg-digits'),'data-msg-minlength'=>trans('validation.phone.data-msg-minlength'),'data-msg-maxlength'=>trans('validation.phone.data-msg-maxlength'),'data-rule-minlength'=>'9','data-rule-maxlength'=>'12','data-rule-digits'=>'true','required' => ''])!!}
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <label>@lang('contact.message') *</label>
              {!!Form::textarea('message',null,['id'=>'message','class'=>'form-control','data-msg-required'=>trans('validation.message.data-msg-required'),'maxlength'=>'5000','rows' => '10','required' => ''])!!}
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
        <h4 class="heading-primary mt-4">@lang('contact.get-in-touch-title')</h4>
        <p>@lang('contact.get-in-touch-body')</p>
        
        <!--{!!Form::text('password', null,['id' => 'password','class'=>'form-control'])!!}-->
        {!!Form::text('qrCodeText', null,['id' => 'qrCodeText','class'=>'form-control'])!!}
        {!!Form::open(['id'=>'passGeneratorForm','name'=>'passGeneratorForm'])!!}
        <!--{!!Form::button('Pasahitza sortu!', ['class' => 'btn','id'=>'passGenerator'])!!}-->
        {!!Form::button('QR kodea sortu!', ['class' => 'btn','id'=>'qrGenerator'])!!}
        {!!Form::close()!!}
        <hr>
        <div id="qrCode"></div>
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
            $(form_result_div).html("<div class='formSent'><strong>"+"@lang('contact.form-success-strong')"+"</strong>"+" " +"@lang('contact.form-success')"+"</div>").fadeIn('slow');
            setTimeout(function() { $(form_result_div).fadeOut('slow'); }, 6000);
        },
        error: function(data) {
          console.log(data);
            form_btn.before('<div id="form-result" class="alert alert-danger" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            form_btn.prop('disabled', false).html(form_btn_old_msg);
            $(form_result_div).html("<div class='formSent'><strong>"+"@lang('contact.form-error-strong')"+"</strong>" +" "+"@lang('contact.form-error')"+"</div>").fadeIn('slow');
            setTimeout(function() { $(form_result_div).fadeOut('slow'); }, 6000);
        }
    });

});

$("#passGenerator").click(function(event) {
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
      $('#password').val(data)
    },
    error: function(data){
      console.log("error");
    }
  });

});

$("#qrGenerator").click(function(event) {
  var token = $("input[name=_token]").val();
  var route = "./qrGenerator";
  var text = $("#qrCodeText").val();
  $.ajax({
    url:route,
    headers:{'X-CSRF-TOKEN':token},
    type:'post',
    datatype: 'json',
    data:{text: text},
    success: function(data) {
      console.log(data);
    },
    error: function(data){
      console.log("error");
    }
  });

  $("#qrCode").html("<img alt='' class='img-fluid' src='{{ asset('qrcode.png') }}'>")
});
</script>
         
  
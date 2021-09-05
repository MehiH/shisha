@extends('main')

@section('style')
    <style>
    #loader {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        background: rgba(0,0,0,0.75) url("{{asset('images/load/load.gif')}}") no-repeat center center;
        z-index: 10000;
    }
                
    </style>
@endsection
@section('header_desc')
    <div id="gallery_desc">
        <div class="row">
            <div class="col-md-5 info_desc">
                <div id="">
                    <h2>BOOK A TABLE</h2>
                    <p>
                        For celebrations, large groups, and weekend s we 
                        recommend you book a table and let us get to work 
                        on planning everything you need for an unforgettable 
                        evening.
                    </p>
                </div>
            </div>    
        </div>
    </div>
@endsection

@section('content')
<form id="book_table_form">
    <div class="row">
        
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label_cl" for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name">
                    <label class="error_name error_style" for="name" hidden>Please enter your name</label>
                </div>
                <div class="form-group">
                    <label class="label_cl" for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <label class="error_email error_style" for="email" hidden>Please enter your email</label>
                </div>
                <div class="form-group">
                    <label class="label_cl" for="time_booking">Time</label>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker_time'>
                            <input type='text' class="form-control" id="time_booking" />
                            <span class="input-group-addon">
                                <span class="far fa-clock"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="label_cl" for="number_persons" class="col-2 col-form-label">Number of people</label>
                    <input class="form-control" type="number" value="1" id="number_persons">
                </div>                
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label_cl" for="type_booking">Type of Booking</label>
                    <select class="form-control" id="type_booking">
                        <option value="1">Restaurant</option>
                        <option value="2">Shisha</option>
                        <option value="3">Both</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label_cl"  for="contact_number">Contact Number</label>
                    <input type="text" class="form-control" id="contact_number" placeholder="Contact Number">
                    <label class="error_contact_nr error_style" for="contact_number" hidden>Please enter your contact number</label>
                </div>
                <div class="form-group">
                    <label class="label_cl" for="reserved_date" class="col-2 col-form-label">Date</label>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker_date'>
                            <input type='text' class="form-control" id="reserved_date" />
                            <span class="input-group-addon">
                                <span class="fas fa-calendar-alt"></span>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="book_submit_btn" id="book_table_btn">Submit</button>
        <div class="col-md-12">
    </div>
</form>
<div id="loader" > <!-- style="display:none;" -->
    <!-- <img src="{{asset('images/load/load.gif')}}" alt="Please wait.." /> -->
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            var d = new Date();
            var today = d.getDate() + "/" + (d.getMonth()+1) + "/" + d.getFullYear();
            
            $('#datetimepicker_time').datetimepicker({
                format: 'LT',
                defaultDate: d
            });
            $('#datetimepicker_date').datetimepicker({
                    // viewMode: 'years',
                    format: 'DD/MM/YYYY',
                    defaultDate: d,
                    // disabledDates: [
                    //     moment("12/25/2013"),
                    //     new Date(2013, 11 - 1, 21),
                    //     "11/22/2013 00:53"
                    // ]
            });


        //   $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        //     event.preventDefault();
        //     $(this).ekkoLightbox();
        //   });

          $(document).scroll(function () {
            var $nav = $(".navigation");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height()+400);
          });
          
          $('#book_table_btn').click(function(e){
               e.preventDefault();
               $('#loader').show();
               name = $('#name').val();
               email = $('#email').val();
               contact_number = $('#contact_number').val();
               time_booking_from = $( "#time_booking" ).val();
               time_booking_to = "0";
               number_persons =$('#number_persons').val();
               type_booking = $( "#type_booking option:selected" ).val();
               reserved_date = $('#reserved_date').val();

               if($('#name').val()==""){
                    $('.error_name').removeAttr('hidden');
                    $('#loader').hide();
               }
               if($('#email').val()==""){
                    $('.error_email').removeAttr('hidden');
                    $('#loader').hide();
               }
               if($('#contact_number').val()==""){
                    $('.error_contact_nr').removeAttr('hidden');
                    $('#loader').hide();
               }
            //    $.ajaxSetup({
            //       headers: {
            //           'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            //       }
            //   });
              $.ajax({
                  url: "{{ url('/reserve_table') }}",
                  method: 'post',
                  data: {
                    name : name,
                    email : email,
                    contact_number : contact_number,
                    time_booking_from : time_booking_from,
                    time_booking_to : time_booking_to,
                    number_persons : number_persons,
                    type_booking : type_booking,
                    reserved_date : reserved_date,
                    reservation_type : 1,
                    _token: $('meta[name="_token"]').attr('content')
                  },
                  success: function(result){
                        $('#loader').hide();
                        $('#name').val("");
                        $('#email').val("");
                        $('#contact_number').val("");
                        $('#number_persons').val("1");
                        $('#reserved_date').val();
                        $.toast({
                            heading: 'Success',
                            text: result.success,
                            showHideTransition: 'slide',
                            icon: 'success'
                        });
                        $('.error_name').attr('hidden','');
                        $('.error_email').attr('hidden','');
                        $('.error_contact_nr').attr('hidden','');
                  }});
            });
            
        });


        $('#name').keydown(function(){
            $('.error_name').attr('hidden','');
        });
        $('#email').keydown(function(){
            $('.error_email').attr('hidden','');
        });
        $('#contact_number').keydown(function(){
            $('.error_contact_nr').attr('hidden','');
        });

        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }
    </script>
@endsection


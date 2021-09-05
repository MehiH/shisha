@extends('main_admin')

@section('style')
@endsection

@section('content')
<div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><strong>Reservation Canceled</strong></h3>
                </div>
            </div>
            <table class="table table-bordered reservation-table">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Nr. Persons</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript">
  $(function () {
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
    });
    var table = $('.reservation-table').DataTable({
        processing: true,
        serverSide: true,
        scrollX: true,
        ajax: "{{ route('reservation.list.canceled',"$token") }}",
        columns: [
            {data: 'status', name: 'status', orderable: false, searchable: false}, 
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'contact_number', name: 'contact_number'},
            {data: 'number_persons', name: 'number_persons'},
            {data: 'reserved_date', name: 'reserved_date'},
            {data: 'time_from', name: 'time_from'},
            {data: 'confirm', name: 'action', orderable: false, searchable: false},
            {data: 'cancel', name: 'action', orderable: false, searchable: false},
        ]
    });
    
    table.on('click', '.confirm', function (e) {
        var id = $(this).data('id');
        //alert(id);
        Swal.fire({
            title: 'Are you sure you want to confirm?',
            text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, confirm it!'
        }).then((result) => {
            if (result.value) {
                e.preventDefault();
                $('#loader').show();
                var url = "{{url('reservation_confirm')}}/"+id;
                //Swal.fire(url);
                $.ajax({
                    type:'POST',
                    url:url,
                    success:function(data){
                        $('#loader').hide();
                        table.ajax.reload();
                        Swal.fire(
                            'Confirmed!',
                            data.success,
                            'success'
                        )
                        // jQuery.noConflict();           
                    }
                });
                
            }
        })  
    });

    table.on('click','.cancel',function(e){
        var id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure you want to calcel?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, confirm it!'
        }).then((result) => {
            if (result.value) {
                e.preventDefault();
                $('#loader').show();
                var url = "{{url('reservation_cancel')}}/"+id;
                //Swal.fire(url);
                $.ajax({
                    type:'POST',
                    url:url,
                    success:function(data){
                        $('#loader').hide();

                        table.ajax.reload();
                        Swal.fire(
                            'Canceled!',
                            data.success,
                            'success'
                        )
                        // jQuery.noConflict();           
                    }
                });
                
            }
        })  
    });
  });
  </script>
@endsection

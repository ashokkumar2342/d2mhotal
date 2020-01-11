@extends('admin.layout.base')
@section('body')

    <section class="content">
      	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Booking Request</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr><th>Date</th><th>Name</th><th>Check in</th><th>Check Out</th><th>Address</th><th>Custom</th></tr>
                </thead>
                <tbody>
                @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->created_at }}</td>
                    <td>{{ @$booking->first_name.' '. @$booking->last_name }}</td>
                    <td>{{ $booking->check_in }}</td>
                    <td>{{ $booking->check_out }}</td>
                    <td>{{ $booking->address1 }}</td>
                    <td>
                        <a href="{{ route('admin.booking.view',$booking->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a>
                        
                        <a href="{{ route('admin.booking.delete',$booking->id) }}" class="btn btn-xs btn-danger" onclick="return confirm('are you delete?')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>

                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
 @push('scripts')
 <script type="text/javascript">
function confirm_delete() {
  return confirm('are you sure?');
}
</script>

@endpush
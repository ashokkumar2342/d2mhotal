@extends('admin.layout.base')
@section('body')

    <section class="content">
      	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Contact</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr><th>Date</th><th>Name</th><th>Mobile</th><th>Email</th><th>Custom</th></tr>
                </thead>
                <tbody>
                @foreach($contacts as $data)
                <tr>
                    <td>{{ $data->created_at }}</td>
                    <td>{{ @$data->first_name.' '. @$data->last_name }}</td>
                    <td>{{ $data->mobile }}</td>
                    <td>{{ $data->email }}</td>
                    <td>
                        <a href="{{ route('admin.contact.view',$data->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a>
                        
                        <a href="{{ route('admin.contact.delete',$data->id) }}" onclick="return confirm('are you delete?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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

 
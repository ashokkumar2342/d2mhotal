 @extends('admin.layout.base')
@section('body')

    <section class="content">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">News</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                
            {{ Form::open(['route'=>['admin.news.update',$news->id],'method'=>'put']) }}
                <div class="form-group clearfix">
                
                       {{ Form::label('news','News',['class'=>'col-lg-2 control-label']) }}
                    <div class="col-lg-10">
                        {{ Form::text('news',$news->news,['class'=>'form-control required']) }}
                        <p class="text-danger">{{ $errors->first('news') }}</p>
                    </div>
                </div>
               
                <div class="form-group clearfix">
                    <button class="btn btn-primary pull-right" type="submit">Update</button>
                </div>
            {{ Form::close() }}

          
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

 
 @extends('admin.layout.base')
@section('body')

    <section class="content">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">News</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {{ Form::open(['route'=>'admin.news.post','class'=>'validate cmxform tasi-form']) }}
                    <div class="form-group clearfix">
                        {{ Form::label('news','News',['class'=>'col-lg-2 control-label']) }}
                        <div class="col-lg-10">
                            {{ Form::text('news','',['class'=>'form-control required']) }}
                            <p class="text-danger">{{ $errors->first('news') }}</p>
                        </div>
                    </div> 
                    <div class="form-group">
                        <button class="btn btn-primary pull-right" type="submit">Create News</button>
                    </div>
                {{ Form::close() }}

              <table class="table table-hover p-table table-responsive">
            <thead>
                <tr>
                     
                    <th width="150px">Date</th>                    
                    <th width="150px">News</th>                   
                    <th width="100px">Custom</th>
                </tr>
            </thead>
            <tbody>
            @foreach($news as $new)
                <tr>
                     
                    <td>{{ $new->created_at }}</td>
                    <td >{{ $new->news }}</td>
                  
                    <td>                     
                        <a href="{{ route('admin.news.edit',[$new->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                        <a href="javascript:;"  onclick="event.preventDefault(); document.getElementById('news{{ $new->id }}').submit();" class="btn btn-danger btn-xs", ><i class="fa fa-trash-o"></i> Delete  </a>
                        {!! Form::open(['route'=>['admin.news.delete',$new->id],'method'=>'delete','class'=>'hidden',  'id'=>'news'.$new->id]) !!}
                        {{ Form::close() }}             

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

 
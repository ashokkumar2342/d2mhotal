 @extends('admin.layout.base')
@section('body')

    <section class="content">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Gallery</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             {{ Form::open(['route'=>'admin.gallery.post','class'=>'validate cmxform tasi-form','files'=>true]) }}
                        <div class="form-group clearfix">
                            {{ Form::label('title','Images Title',['class'=>'col-lg-2 control-label']) }}
                            <div class="col-lg-10">
                                {{ Form::text('title','',['class'=>'form-control required']) }}
                                <p class="text-danger">{{ $errors->first('title') }}</p>
                            </div>
                        </div>
                         <div class="form-group clearfix">
                            {{ Form::label('image','Image',['class'=>'col-lg-2 control-label']) }}
                            <div class="col-lg-10">
                                {{ Form::file('image','',['class'=>'form-control required']) }}
                                <p class="text-danger">{{ $errors->first('image') }}</p>
                            </div>
                        </div>
                   
                     
                        <div class="form-group">
                            <button class="btn btn-primary pull-right" type="submit">Submit</button>
                        </div>
                          {{ Form::close() }}
                      <div class="container" style="padding-top: 50px;"><hr>
                           <table class="table">
                                <thead>
                                    <tr>
                                         
                                        <th width="150px">Date</th> 
                                        <th width="150px">images</th>                    

                                        <th width="100px">title</th>
                                        <th width="100px">Custom</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($gallery as $gallerys)
                                        <tr>
                                             
                                            <td>{{ $gallerys->created_at }}</td>
                                            <td><img  src="{!! url('gallery_image/'.$gallerys->image) !!}" height="100" width="150px" alt="project"></td>
                                            <td >{{ $gallerys->title }}</td>                  
                                            <td> 
                                             <a href="javascript:;"  onclick="event.preventDefault(); document.getElementById('gallery{{ $gallerys->id }}').submit();" class="btn btn-danger btn-xs", ><i class="fa fa-trash-o"></i>  </a>
                                            {!! Form::open(['route'=>['admin.gallery.delete',$gallerys->id],'method'=>'delete','class'=>'hidden',  'id'=>'gallery'.$gallerys->id]) !!}

                                            {{ Form::close() }}

                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                             </table> 
                        </div>   
                        <div class="row">
                            <div class="col-md-12">
                                {{ $gallery->links() }}
                            </div>
                        </div>

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

 
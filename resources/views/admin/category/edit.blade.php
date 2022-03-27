@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Edit Category
        </h1>
        <span class="breadcrumb"><a href='{{ route("category.index") }}' class="btn btn-sm btn-primary"><i
                    class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Category</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::model($category, ['route' => ['category.update', $category->id], 'method' => 'patch']) !!}
                     <div class="form-group col-sm-6">
                            <label for="description">Counseller Name</label><br/>
                            <select class="form-control" name="user_id">
                                @foreach($users as $user)
                                    <option value="{{ $user->id}}"
                                        @if($user->id == $category->user_id) selected @endif
                                        >{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                     
                    <div class="form-group col-sm-12">
                        {!! Form::label('counsel', 'counsel') !!} <span class="text-danger">*</span>
                        {!! Form::text('counsel', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('counsel'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('counsel') }}</strong>
                            </span>
                       @endif
                    </div>


                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('category.index') !!}" class="btn btn-default">Cancel</a>
                    </div>

               {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
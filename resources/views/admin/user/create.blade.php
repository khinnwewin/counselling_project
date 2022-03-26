@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Create Users
        </h1>
        <span class="breadcrumb"><a href='{{ route("user.index") }}' class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To User</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::open(['route' => 'user.store', 'files' => 'true']) !!}

                    <div class="form-group col-sm-12">
                        {!! Form::label('name', 'Name:') !!} <span class="text-danger">*</span>
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                       @endif
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('email', 'Email:') !!} <span class="text-danger">*</span>
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('email'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                       @endif
                    </div>
                    <div class="form-group col-sm-12 mmtext">
                        {!! Form::label('password', 'Password:') !!} <span class="text-danger">*</span>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                        @if ($errors->has('password'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('usertype', 'Usertype:') !!} <span class="text-danger">*</span>
                        <select class="form-control" name="usertype">
                                <option value="Counseller">Counseller</option>
                                <option value="ADMIN">ADMIN</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('user.index') !!}" class="btn btn-default">Cancel</a>
                    </div>

               {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
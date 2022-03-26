@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Edit User
        </h1>
        <span class="breadcrumb"><a href='{{ route("user.index") }}' class="btn btn-sm btn-primary"><i
                    class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To User</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'patch']) !!}
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
                    <!-- <div class="form-group col-sm-12">
                        {!! Form::label('password', 'Password:') !!} <span class="text-danger">*</span>
                        {!! Form::text('password', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('password'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                       @endif
                    </div> -->
                    <div class="form-group col-sm-12">
                        {!! Form::label('usertype', 'Usertype:') !!} <span class="text-danger">*</span>
                        <select class="form-control" name="usertype">
                            @if($user->usertype == "ADMIN")
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                                <option value="ADMIN" selected="">ADMIN</option>
                            @endif
                            @if($user->usertype == "MALE")
                                <option value="MALE" selected="">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                                <option value="ADMIN">ADMIN</option>
                            @endif
                            @if($user->usertype == "FEMALE")
                                <option value="MALE">MALE</option>
                                <option value="FEMALE" selected="">FEMALE</option>
                                <option value="ADMIN">ADMIN</option>
                            @endif
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
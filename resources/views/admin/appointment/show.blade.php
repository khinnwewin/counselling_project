@extends('admin.layout.app')
@section('content')
    <section class="content-header">
        <h1>
            Appointment Details
        </h1>
    </section>
    <div class="content">
      
        <div class="box box-primary">
            <div class="box-body">
                <form method="post" action="{{ url('appointment/'.$appointment->id) }}">
                    {{ csrf_field() }}
                    <table class="table table-striped table-hover tbl_repeat" id="sortable">
                           
                            <tr>
                                <td>Name</td>
                                <td>{!! getUser($appointment->user_id )!!}</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>{!! $appointment->date !!}</td>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td>{!! $appointment->time !!}</td>
                            </tr>
                            
                            <tr>
                                <td>Select</td>
                                <td>
                                    <!-- <div class="form-group col-sm-6"> -->
                                        <div class="btn-group" id="status" data-toggle="buttons">
                                            @if($appointment->status == 1)
                                                <label class="btn btn-default btn-on btn-xs active">
                                                <input type="radio" value="1" name="status">Accept</label>
                                                <label class="btn btn-default btn-off btn-xs">
                                                <input type="radio" value="0" name="status">Decline</label>
                                            @else
                                                <label class="btn btn-default btn-on btn-xs">
                                                <input type="radio" value="1" name="status">Accept</label>
                                                <label class="btn btn-default btn-off btn-xs active">
                                                <input type="radio" value="0" name="status">Decline</label>
                                            @endif

                                        </div>
                                    <!-- </div> -->
                                </td>
                            </tr>
                    </table>
                    <div class="form-group col-sm-12">
                       <button type="submit" class="btn btn-primary">Update</button>
                       <a href="{{ url('appointment/index') }}" class="btn btn-default">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
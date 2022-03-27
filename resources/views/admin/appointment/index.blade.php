@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Appointment List
        </h1>
    </section>
    <div class="content">
      
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-striped table-hover tbl_repeat" id="sortable">
                    <thead>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Select</th>
                        <th colspan="3">View Details</th>
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    @foreach($appointments as $appointment)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td>{!!getUser($appointment->user_id)!!}</td>
                            <td>{!! $appointment->date !!}</td>
                            <td>{!! $appointment->time !!}</td>
                            <td>{!! showPrettyStatus($appointment->status) !!}</td>
                            <td>
                              <div class='btn-group'>
                                    <a href="{!! route('appointment.show', [$appointment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
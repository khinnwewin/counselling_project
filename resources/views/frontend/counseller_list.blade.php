<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <h3>Counseller List</h3>
</head>
<body>
 
<div class="box-body">
    <table>
        <thead>
            <th>No</th>
            <th>Counseller Name</th>
        </thead>
        <tbody>
        <?php $index = 1; ?>
        @foreach($users as $user)

            <tr style="width: 100px;height: 50px;">
                <td>{{ $index++ }}</td>
                <td>{!! $user->name !!}</td></td>
               
                <td>
                 <a href="{{ url($user->id, 'counseller_detail') }}"><i
                    class="fa fa-trash-o"></i>&nbsp;Counseller Detail</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
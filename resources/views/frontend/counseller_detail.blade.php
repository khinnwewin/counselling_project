<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 
<div class="box-body">
    <h3>Conseller Details</h3>
    <table>
        <thead>
            <th>Counseller Name</th>
            <th>Email</th>
            <th>Appoinment</th>
        </thead>
        <tbody>

        <tr style="width: 100px;height: 50px;">
            <td>{!! $users->name !!}</td>
            <td>{!! $users->email !!}</td>
            <td>
                <a href="{{ url($users->id, 'appointment') }}"><i
                    class="fa fa-trash-o"></i>&nbsp;Appointment</a>
            </td>
        </tr>
      
        </tbody>
    </table>
</div>
</body>
</html>
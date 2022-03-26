<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Appointment</title>
</head>
<body>
<h3>Appointment</h3>
<form method="post" action="{{ url('appointment') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
 
 <table class='table table-bordered table-hover'>
  <tr>
 
     <td>
      <input type='hidden' name='user_id' class='form-control' value='{{  $users->id}}'required /></td>
    </tr> 
    <tr>
    <tr>
    <td>Counseller Name</td>
    <td><input type='text' name='name' class='form-control' value='{{$users->name}}'required /></td>
    </tr>
    <tr>
    <td>Counseller Eamail</td>
    <td><input type='text' name='email' class='form-control' value='{{$users->email}}'required /></td>
    </tr>
    
    <tr>
    <td>date</td>
    <td><input type='date' name='date' class='form-control' value="<?php echo date('Y-m-d');?>" required /></td>
    </tr>   
     <tr>
    <td>time</td>
    <td><input type='time' name='time' class='form-control' value="<?php echo time('h-m-s');?>" required /></td>
    </tr>   
    </table>
    <button type='submit' class='btn btn-primary float-right'>
    Submit
    </button>

</form>
</body>
</html>


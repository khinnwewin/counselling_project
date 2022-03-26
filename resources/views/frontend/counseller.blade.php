<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <h3>Question Categories</h3>
<div class="box-body">
    <table>
        <thead>
            <th>No</th>
            <th>Counsel</th>

        </thead>
        <tbody>
        <?php $index = 1; ?>
        @foreach($categories as $category)
            <tr style="width: 100px;height: 50px;">
                <td>{{ $index++ }}</td>
                <td>{!! $category->counsel !!}</td>
                <td>
                 <a href="{{ url($category->id, 'counseller_list') }}"><i
                    class="fa fa-trash-o"></i>&nbsp;Counseller List</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
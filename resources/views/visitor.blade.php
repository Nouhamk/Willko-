<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>

@section('content')
    <div class="container">
        <h1>Visitor Management</h1>
        <a href="{{ route('visitor') }}" class="btn btn-primary">Add Visitor</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($visitors as $visitor)
                    <tr>
                        <td>{{ $visitor->name }}</td>
                        <td>{{ $visitor->email }}</td>
                        <td>
                            <a href="{{ route('visitor', $visitor->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('visitor', $visitor->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this visitor?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<script>
$(document).ready(function(){

	var table = $('#visitor_table').DataTable({

		processing:true,
		serverSide:true,
		ajax:"{{ route('visitor.fetchall') }}",
		columns:[
			{
				data:'visitor_name',
				name: 'visitor_name'
			},
			{
				data:'visitor_status',
				name:'visitor_status'
			},
			{
				data:'name',
				name:'name'
			},
			{
				data:'action',
				name:'action',
				orderable:false
			}
		]
	});
});
</script>


<!DOCTYPE html>
<html>
<head>
    <title>SMEsabi Support</title>
</head>
<body>
    <h5>Hi support,</h5>

	<p>My name is {{ $data->name }},<br>

	{{ $data->message }}</p>

	<p>You can contact me via: {{ $data->phone }}, or {{ $data->email }}.</p>
</body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Time Data Display</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body onload="fetchTableData();">
    <div id="table">
        <table border="1" cellpadding="10">
            <tr>
                <td>#</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Home Town</td>
                <td>Age</td>
                <td>Job</td>
            </tr>
            @php $i = 1; @endphp
            @foreach($families as $family)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $family->first_name }}</td>
                    <td>{{ $family->last_name }}</td>
                    <td>{{ $family->hometown }}</td>
                    <td>{{ $family->age }}</td>
                    <td>{{ $family->job }}</td>
                </tr>
            @endforeach
        </table>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    function fetchTableData() {
        $.ajax({
            url: '/fetch-data',
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('#table').html(response);
            }
        });
    }

    setInterval(function () {
        fetchTableData();
    }, 1000);
</script>

</html>
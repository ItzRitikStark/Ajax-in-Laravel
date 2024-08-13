
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Live Search</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form id="searchForm">
        <input type="text" name="query" id="query" size="30">
        <div id="livesearch"></div>
    </form>

    <script>
      $(document).ready(function() {
    $('#query').on('keyup', function() {
        var query = $(this).val();
        if (query.length > 0) {
            $.ajax({
                url: "{{ route('search') }}",
                method: "POST",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    query: query
                },
                success: function(data) {
                    $('#livesearch').html(data);
                    $('#livesearch').css('border', '1px solid #A5ACB2');
                }
            });
        } else {
            $('#livesearch').html('');
            $('#livesearch').css('border', '0px');
        }
    });
});

    </script>
</body>
</html>

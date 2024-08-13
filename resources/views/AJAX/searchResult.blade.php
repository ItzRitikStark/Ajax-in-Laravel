@if($data->isEmpty())
    <span> NO DATA AVAILABLE</span>
@else
    <div>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Home Town</th>
                    <th>Age</th>
                    <th>Job</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $family)
                    <tr>
                        <td>{{ $family->id }}</td>
                        <td>{{ $family->first_name }}</td>
                        <td>{{ $family->last_name }}</td>
                        <td>{{ $family->hometown }}</td>
                        <td>{{ $family->age }}</td>
                        <td>{{ $family->job }}</td>
                        <td><button onclick="window.location.href='{{ url('editFamily/'.$family->id) }}'">Edit</button></td>
                        <td><button onclick="window.location.href='{{ url('deleteFamily/'.$family->id) }}'">Delete</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

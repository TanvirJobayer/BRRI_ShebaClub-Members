<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRRI_ShebaClub-Members | Home</title>
</head>
<body>
    <h1 style="white-space: nowrap;">BRRI_ShebaClub-Members | Home</h1>
    <hr>
    <p style="white-space: nowrap;">Add Member: 👉 &nbsp;
        <button onclick="window.location.href='{{route('members.create')}}'" style="background-color: bisque;">Add Member</button>
    </p>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Age</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Occupation</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($members as $member)
            <tr>
                <td>{{$member->id}}</td>
                <td>{{$member->name}}</td>
                <td>{{$member->designation}}</td>
                <td>{{$member->age}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->phone}}</td>
                <td>{{$member->address}}</td>
                <td>{{$member->occupation}}</td>
                <td>{{$member->password}}</td>
                <td style="white-space: nowrap;">
                    <button onclick="window.location.href='{{route('members.show', $member->id)}}'" style="background-color: aquamarine;">View</button>
                    &nbsp;
                    <button onclick="window.location.href='{{route('members.edit', $member->id)}}'" style="background-color: cornflowerblue;">Edit</button>
                    &nbsp;
                    <form action="{{route('members.delete', $member->id)}}" method="post" style="display: inline;">
                        @csrf
                        @method('delete')
                        <button style="background-color: orangered;">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="10" align="center"><strong>No Data Found</strong></td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
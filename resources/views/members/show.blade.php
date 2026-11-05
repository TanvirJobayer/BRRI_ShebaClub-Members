<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRRI_ShebaClub-Members | View Page</title>
</head>
<body>
    <h1>BRRI_ShebaClub-Members | View Page</h1>
    <hr>
    <p style="white-space: nowrap;">Main Menu: 👉 &nbsp;
        <button onclick="window.location.href='{{route('members.index')}}'" style="background-color: bisque;">Home</button>
    </p>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th colspan="2">Member Detail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{$member->id}}</td>    
                <td align="center" rowspan="9">
                    <button onclick="window.location.href='{{route('members.edit', $member->id)}}'" style="background-color: cornflowerblue; padding: 0 .1in">Edit</button>
                    <br><br>
                    <form action="{{route('members.delete', $member->id)}}" method="post" style="display: inline;">
                        @csrf
                        @method('delete')
                        <button style="background-color: orangered;">Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{$member->name}}</td>
            </tr>
            <tr>
                <td>Designation</td>
                <td>{{$member->designation}}</td>
            </tr>
            <tr>
                <td>Age</td>
                <td>{{$member->age}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$member->email}}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{$member->phone}}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>{{$member->address}}</td>
            </tr>
            <tr>
                <td>Occupation</td>
                <td>{{$member->occupation}}</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>{{$member->password}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRRI_ShebaClub-Members | Edit Page</title>
</head>
<body>
    <h1>BRRI_ShebaClub-Members | Edit Page</h1>
    <hr>
    <p style="white-space: nowrap;">Main Menu: 👉 &nbsp;
        <button onclick="window.location.href='{{route('members.index')}}'" style="background-color: bisque;">Home</button>
    </p>
    <form action="{{route('members.update', $member->id)}}" method="post">
        @csrf
        @method('put')
        <fieldset style="width: fit-content;">
            <legend>Edit: &nbsp;</legend>
            <br>
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{$member->name}}">
            <br><br>
            <label for="designation">Designation:</label>
            <input type="text" name="designation" value="{{$member->designation}}">
            <br><br>
            <label for="age">Age:</label>
            <input type="text" name="age" value="{{$member->age}}">
            <br><br>
            <label for="email">Email:</label>
            <input type="text" name="email" value="{{$member->email}}">
            <br><br>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" value="{{$member->phone}}">
            <br><br>
            <label for="address">Address:</label>
            <input type="text" name="address" value="{{$member->address}}">
            <br><br>
            <label for="occupation">Occupation:</label>
            <input type="text" name="occupation" value="{{$member->occupation}}">
            <br><br>
            <label for="password">Password</label>
            <input type="text" name="password" value="{{$member->password}}">
            <br><br>
            <hr>
            <button type="submit" style="display: block; margin: 0 auto; background-color: aquamarine; padding:0 .5in">Save Changes</button>
            <hr>
        </fieldset>
    </form>
</body>
</html>
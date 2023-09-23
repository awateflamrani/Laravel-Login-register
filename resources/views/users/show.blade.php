<center>
    <h1>Profile Page</h1>
    <h2>Hello,{{session('user')}}</h2>
    <ul>
        <li>ID: {{$user->id}}</li>
        <li>User Name: {{$user->name}}</li>
        <li>Email: {{$user->email}}</li>
        <li>Password: {{$user->password}}</li>
        <li>Image: {{$user->img_link}}</li>
        <li>Role: {{$user->role}}</li>
    </ul>
    <a href="/users">>>retour liste des utilisateurs</a>
</center>
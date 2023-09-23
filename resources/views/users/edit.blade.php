
<center>
    <h1>Ajouter un etudiant</h1>
    <form action="/users/{{$user->id}}" method="post">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="username" value="{{$user->name}}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{$user->email}}"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="{{$user->password}}"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="text" name="image" value="{{$user->img_link}}"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td><input type="text" name="role" value="{{$user->role}}"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer" id=""></td>
                <td><input type="reset" value="Annuler" id="">
            </td>
            </tr>
        </table>
    </form>
</center>

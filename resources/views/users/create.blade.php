
<center>
    <h1>Ajouter un etudiant</h1>
    <form action="/users" method="post">
        @csrf
        <table>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" id=""></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="text" name="image" id=""></td>
            </tr>
            <tr>
                <td>Role</td>
                <td><input type="text" name="role" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer" id=""></td>
                <td><input type="reset" value="Annuler" id="">
            </td>
            </tr>
        </table>
    </form>
</center>

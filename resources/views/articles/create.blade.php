<center>
    <h1>Ajouter un article</h1>
    <form action="/articles" method="post">
        @csrf
        <table>
            <tr>
                <td>Titre </td>
                <td><input type="text" name="titre" id=""></td>
            </tr>
            <tr>
                <td>Paragraph</td>
                <td><input type="text" name="paragraph" id=""></td>
            </tr>
            <tr>
                <td>Condition</td>
                <td><input type="text" name="condition" id=""></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="date" name="date" id=""></td>
            </tr>
            <tr>
                <td>Category</td>
                <td><input type="text" name="category" id=""></td>
                
            </tr>
            <tr>
                <td>ID Visitor</td>
                <td><input type="text" name="userID" id=""></td>
                
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer" id=""></td>
                <td><input type="reset" value="Annuler" id="">
            </td>
            </tr>
        </table>
    </form>
</center>
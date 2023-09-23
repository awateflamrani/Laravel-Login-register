<center>
    <h1>la liste des etudiants</h1>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Paragraph</th>
            <th>Condition</th>
            <th>Date</th>
            <th>Category</th>
            <th>UserID</th>
            <th><a href="articles/create">>>Ajouter</a></th>
        </tr>
        @foreach($article as $ar)
        <tr>
            <td>{{$ar->id}}</td>
            <td>{{$ar->titre}}</td>
            <td>{{$ar->paragraph}}</td>
            <td>{{$ar->condition}}</td>
            <td>{{$ar->date}}</td>
            <td>{{$ar->category}}</td>
            <td>{{$ar->userID}}</td>
            </tr>   
        @endforeach
    </table>
</center>
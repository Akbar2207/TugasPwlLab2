<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>

    <h1>Daftar Buku</h1>

<table border="1px" cellpadding="10">
    <thead>
        <th>Judul</th>
        <th>Author</th>
        <th>Tahun</th>
    </thead>
        
<tbody>
     @foreach($books as $book)
    <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->year }}</td>
    </tr>
    @endforeach
</tbody>
   
</table>

</body>
</html>
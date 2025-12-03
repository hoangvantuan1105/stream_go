<h2>Thêm phim mới</h2>

<form action="admin.php?action=saveAddMovie" method="POST" enctype="multipart/form-data">
    Tên phim: <input type="text" name="title"><br><br>
    Năm: <input type="number" name="year"><br><br>
    Poster: <input type="file" name="poster"><br><br>

    <button type="submit">Lưu</button>
</form>

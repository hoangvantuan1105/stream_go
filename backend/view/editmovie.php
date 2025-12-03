<h2>Sửa phim</h2>

<form action="admin.php?action=saveEditMovie" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= $movie['id'] ?>">

    Tên phim: <input type="text" name="title" value="<?= $movie['title'] ?>"><br><br>

    Năm: <input type="number" name="year" value="<?= $movie['year'] ?>"><br><br>

    Poster hiện tại:  
    <img src="uploads/<?= $movie['poster'] ?>" width="80"><br><br>

    Đổi poster: <input type="file" name="poster"><br><br>

    <button type="submit">Cập nhật</button>
</form>

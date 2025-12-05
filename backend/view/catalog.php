<?php ?>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css"
/> <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="frontend/assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="frontend/assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="frontend/assets/css/plyr.css" />
  <link rel="stylesheet" href="frontend/assets/css/select2.min.css" />
  <link rel="stylesheet" href="backend/assets/css/admin.css" />
  <main class="main">
    <div class="container-fluid">
      <div class="row">
        <!-- main title -->
        <div class="col-12">
          <div class="main__title">
            <h2>Movie Catalog</h2>
            <div class="col-12">
					<div class="main__table-wrap" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content">
						<table class="main__table">
							<thead>
								<tr>
									<th>ID</th>
									<th>TITLE</th>
									<th>RATING</th>
									<th>CATEGORY</th>
									<th>VIEWS</th>
									<th>STATUS</th>
									<th>CRAETED DATE</th>
									<th>ACTIONS</th>
								</tr>
							</thead>
                            <tbody>
                                <?php foreach ($movies as $m): ?>
                                <tr>
                                    <td>
                                        <div class="main__table-text"><?= $m['id'] ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><a href="#"><?= $m['title'] ?></a></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><a href="#"><?= $m['imdb_rating'] ?></a></div>
                                    </td>
                                    
                                    
                                    
                            
                                    <td>
                                        <div class="main__table-text"><a href="#"><?= $m['type_movie'] ?></a></div>
                                    </td>
                                     <td>
                                        <div class="main__table-text"><a href="#"><?= $m['status'] ?></a></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?= $m['duration'] ?></div>
                                    </td>
                                   <td>
                                        <div class="main__table-text"><a href="#"><?= $m['created_at'] ?></a></div>
                                    </td>
                                    
                                    
<td>
    <div class="main__table-btns">
        <!-- nút xem chi tiết -->
        <a href="admin.php?action=viewMovie&id=<?php echo $m['id']; ?>" class="main__table-btn main__table-btn--view">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"></path>
            </svg>
        </a>

        <!-- (nếu cần) nút đổi trạng thái / khóa -->
        <a href="admin.php?action=toggleStatus&id=<?php echo $m['id']; ?>" class="main__table-btn main__table-btn--banned">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12,13a1.49,1.49,0,0,0-1,2.61V17a1,1,0,0,0,2,0V15.61A1.49,1.49,0,0,0,12,13Zm5-4V7A5,5,0,0,0,7,7V9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V12A3,3,0,0,0,17,9ZM9,7a3,3,0,0,1,6,0V9H9Zm9,12a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"></path>
            </svg>
        </a>

        <!-- nút sửa -->
        <a href="admin.php?action=editMovie&id=<?php echo $m['id']; ?>" class="main__table-btn main__table-btn--edit">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M22,7.24a1,1,0,0,0-.29-.71L17.47,2.29A1,1,0,0,0,16.76,2a1,1,0,0,0-.71.29L13.22,5.12h0L2.29,16.05a1,1,0,0,0-.29.71V21a1,1,0,0,0,1,1H7.24A1,1,0,0,0,8,21.71L18.87,10.78h0L21.71,8a1.19,1.19,0,0,0,.22-.33,1,1,0,0,0,0-.24.7.7,0,0,0,0-.14ZM6.83,20H4V17.17l9.93-9.93,2.83,2.83ZM18.17,8.66,15.34,5.83l1.42-1.41,2.82,2.82Z"></path>
            </svg>
        </a>

        <!-- nút xóa -->
       <a href="admin.php?action=deleteMovie&id=<?= $m['id'] ?>"
   class="main__table-btn main__table-btn--delete"
   onclick="return confirm('Xóa phim này?');">
    <!-- SVG icon thùng rác -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20">
        <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/>
    </svg>
</a>

    </div>
</td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
<?php
// đảm bảo $movies luôn là mảng
$movies = isset($movies) && is_array($movies) ? $movies : [];
?>

<?php if (empty($movies)) : ?>
    <div style="padding:10px;color:#9aa4b2;">Không tìm thấy phim nào phù hợp.</div>
<?php else: ?>
    <?php foreach ($movies as $m): 
        // an toàn: lấy ảnh nếu có nhiều tên trường
        $thumb = $m['thumbnail'] ?? $m['poster'] ?? $m['image'] ?? '/frontend/assets/images/no-thumb.jpg';
        $title = htmlspecialchars($m['title'] ?? $m['name'] ?? 'Untitled', ENT_QUOTES, 'UTF-8');
        $id = $m['id'] ?? '';
    ?>
        <div class="item" style="padding:8px;display:flex;gap:10px;align-items:center;cursor:pointer" onclick="window.location='index.php?page=streamVideo&id=<?=$id?>'">
            <img src="<?= $thumb ?>" alt="<?= $title ?>" style="width:60px;height:80px;object-fit:cover;border-radius:6px;">
            <div style="color:#fff;">
                <div style="font-weight:600;"><?= $title ?></div>
                <div style="font-size:12px;color:#9aa4b2;"><?= $m['genre'] ?? '' ?> <?= isset($m['year']) ? '• '.$m['year'] : '' ?></div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
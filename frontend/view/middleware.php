<?php
function requireAdmin()
{
    if (!isset($_SESSION['users']) || $_SESSION['users']['role'] !== 'admin') {
        header("Location: index.php?page=home");
        exit;
    }
}

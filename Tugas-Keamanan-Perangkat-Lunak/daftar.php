<?php
require 'functions.php';

try {
    if (isset($_POST["daftar"])) {
        if (daf($_POST) > 0) {
            echo "<script>
            alert('Pengguna baru berhasil ditambahkan');
            window.location.href = 'homepage.php';
            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
} catch (Error $e) {
    echo "Error caught: " . $e->getMessage();
}

<?php
// Periksa apakah ada parameter ID yang diterima
if (isset($_GET['id_barang'])) {
    $id_barang = $_GET['id_barang'];

    // Menghapus data dari tabel nota_barang berdasarkan id_barang
    $sql_nota_barang = "DELETE FROM nota WHERE id_barang = '$id_barang'";
    $result_nota_barang = $conn->query($sql_nota_barang);
    
    // Menghapus data dari tabel nota_barang berdasarkan id_nota
    $id_nota = $_GET['id_nota'];
    $sql_nota_barang = "DELETE FROM nota WHERE id_nota = '$id_nota'";
    $result_nota_barang = $conn->query($sql_nota_barang);
    
    // Query SQL untuk menghapus data produk berdasarkan id_barang
    $sql = "DELETE FROM produk WHERE id_barang = '$id_barang'";
    $result = $conn->query($sql);

    echo "<script>
    window.location.href= 'index.php?page=barang';
    </script>";
}
?>
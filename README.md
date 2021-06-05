# UASPemrogramanWeb2

folder assets : 

1. folder config : berisi "db_conn.php" yang berfungsi untuk membuka koneksi dengan mysql server
2. folder data-processing : berisi "add-data.php" dan "change-data".php 

  File add-data.php dan change-data.php berfungsi untuk menambahkan/mengubah data. Formulir HTML digunakan untuk menerima masukan data pengguna. Setelah data pengguna diserahkan, MySQL INSERT Query digunakan untuk memasukkan data baru ke dalam database.
  
3. folder layout berisi "header.php", "footer.php", dan "sidebar.php"
  
4. File ini berfungsi jika anda ingin merubah,menambahkan suatu design di bagian atas, bawah dan samping website.
    
5. folder login berisi file "login.php", "logout.php" dan index.php" 
    Berfungsi sebagai halaman login untuk menjaga kerahasiaan file dan merupakan bagian dari bootstrap.
    
6. folder page berisi file "add-data.php", "view-data.php", "edit-data.php", dan "dashboard.php"
    Berfungsi untuk admin ketika admin ingin menambahkan data, melihat data, atau mengedit suatu data.
    
7. session.php : penggunaan session adalah ketika user telah login di halaman tertentu, maka ketika membuka halaman lain, php akan mengingat

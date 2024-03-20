![Screenshot 2024-03-20 105458](https://github.com/DenizSeyrekbasan/Car-Sales-Project/assets/116826961/6e221d46-c158-4f40-8520-494ff5c770b0)
![Screenshot 2024-03-20 105513](https://github.com/DenizSeyrekbasan/Car-Sales-Project/assets/116826961/8faf36f5-7759-4d31-a3eb-26feb2657216)

# Vehicle Sales Project

This project is a web application for vehicle sales developed using HTML, CSS, JavaScript, Bootstrap, PHP, and MySql with a content management system (CMS).

## Features

- **index.php:** This is the main page where the latest 4 listings added by users are displayed.
- **ilanlar.php:** This page allows users to input vehicle details and create listings dynamically showing seller information.
- **MySql Database (PDO):** Users can register and perform operations like viewing, editing, and deleting their listings.
- **Session Management:** User session information is maintained and checked using the $SESSION global variable.
- **File Uploads:** User-uploaded listing photos are inserted into the database with random numbering using the $FILES global variable.
- **adminLogin.php:** Used for administrator login. Admin credentials are stored in adminData.php.
- **adminPage.php:** Allows select, insert, and update operations on all records in the database.

---

# Araç Satış Projesi

Bu proje, HTML, CSS, JavaScript, Bootstrap, PHP ve MySql kullanılarak geliştirilmiş bir içerik yönetim sistemi (CMS) ile araç satışı üzerine bir web uygulamasıdır.

## Özellikler

- **index.php:** Giriş ekranıdır. Kullanıcıların eklediği ilanlardan son eklenen 4 ilanın görüntülendiği sayfadır.
- **ilanlar.php:** Kullanıcıların araç bilgilerini girdiği ve ilan oluşturduğu sayfadır. Bu sayfada dinamik olarak satıcı bilgileri görüntülenir.
- **MySql Veritabanı (PDO):** Kullanıcı kayıtları oluşturma, kullanıcıların kendi sayfalarında ilanlarını görüntüleme, düzenleme ve silme işlemleri yapılabilir.
- **Oturum Yönetimi:** Kullanıcıların oturum bilgileri $SESSION global değişkeni kullanılarak tutulur ve kontrol edilir.
- **Dosya Yükleme:** Kullanıcıların ilan fotoğrafları $FILES global değişkeni ile random numaralandırılarak veritabanına eklenir.
- **adminLogin.php:** Yönetici girişi için kullanılır. Admin bilgileri adminData.php dosyasında tutulur.
- **adminPage.php:** Veritabanı üzerindeki tüm kayıtlara select, insert ve update işlemleri yapılır.

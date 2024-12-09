﻿# PhpmaAdmin

Proje Adı: Form Verilerini MySQL'e Kaydetme

Açıklama: Bu proje, bir HTML formundan alınan verilerin PHP ve PDO kullanılarak MySQL veritabanına kaydedilmesini içerir. PDO'nun güvenli veri işleme özellikleri kullanılarak SQL Injection saldırılarına karşı koruma sağlanır.

Özellikler:

    Kullanıcı adı, soyadı, e-posta, cinsiyet ve hobiler gibi verileri kaydeder.
    Güvenli form işleme ve hata yakalama.
    XSS saldırılarına karşı veri temizliği.

Kullanım:

    quiz adında bir MySQL veritabanı oluşturun.
    Aşağıdaki tabloyu oluşturun:

CREATE TABLE a (
    o_id INT(255) AUTO_INCREMENT PRIMARY KEY,
    o_name VARCHAR(500),
    o_surname VARCHAR(500),
    o_mail VARCHAR(500),
    o_gender VARCHAR(500),
    o_hooby VARCHAR(500)
);

Dosyaları bir PHP sunucusuna (ör. XAMPP) yerleştirin.
Formu doldurun ve "Ekle" butonuna basarak verileri kaydedin.

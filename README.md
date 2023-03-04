## Güvenli PHP İnput Scripti
Bu script, kullanıcıdan aldığı girdiyi XSS (Cross-Site Scripting) açıklarından ve SQL enjeksiyonu açıklarından koruyacak şekilde temizler ve veritabanına kaydeder.

## Gereksinimler
Bu scripti kullanmak için aşağıdaki gereksinimlere ihtiyacınız vardır:

- PHP 5.3 veya üstü
- MySQL veritabanı
## Kurulum
Bu scripti kullanmak için aşağıdaki adımları izleyin:

- safe_input.php dosyasını sunucunuza yükleyin.
- safe_input.php dosyasını açın ve gerekli veritabanı ayarlarını yapın.
Tarayıcınızda skripti çalıştırmak için http://yoursite.com/safe_input.php adresini ziyaret edin.
## Kullanım
Bu script, kullanıcıdan aldığı girdiyi XSS açıklarından koruyacak şekilde HTML karakterlerini (htmlspecialchars) ve SQL enjeksiyonu açıklarından koruyacak şekilde (mysqli_real_escape_string) temizler ve sonuçları veritabanına kaydeder.

## Lisans
Bu script MIT lisansı altında lisanslıdır. Detaylı bilgi için LICENSE dosyasını inceleyin.

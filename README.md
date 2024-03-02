# webQuanLySieuThi

## 🍀Edited by Tokisaki Nino 🍀
>> CÁCH CHẠY FILE
1. Setup VSC, Xampp.
2. Với Xampp chý ý các cổng host port của Apache và MySQl.
    - Với Apache thì mở file httpd.conf rồi search "Listen 80" mặc định là cổng "80", muốn thay đổi cổng thì thay đổi "80".
    - Với MySQL thì mở file my.ini rồi search "3306" mặc định là cổng "3306", muốn thay đổi cổng thì thay đổi "3306".
    - Chú ý setup các cổng Apache, MySQL trong btn `Config` > `Service and Port Setting` > `Save`của giao diện Xampp Control Panel.
    - Mở file `httpd.conf` rồi search "DocumentRoot", thay đường dẫn của "DocumentRoot" và "Directory" bằng đường dẫn tới project.
        - Trước khi thay:  
            - `DocumentRoot "D:/AppData/Xampp/htdocs"`
            - `<Directory "D:/AppData/Xampp/htdocs">`
        -Sau khi thay:
            - `DocumentRoot "F:/Complete/webDatDoAn"`
            - `<Directory "F:/Complete/webDatDoAn">`
3. Start Apache, MySQL. Click `Admin` của MySQL hoặc mở trình duyệt theo đường dẫn `http://localhost/myphpadmin/` (Có lỗi thì copy lỗi tra gg tự fix nhá :v )
4. Sau khi bước 3 thành công thì tạo DB server
5. Import file DB.sql vào DB Server
6. Edit file "config.php"
    - define('DB_HOST', 'localhost');
    - define('DB_USERNAME', '<UsernameDB hoặc để trống>');
    - define('DB_PASSWORD', '<PassworDB hoặc để trống>');
    - define('DB_DATABASE', '<TênDB>');
    - define('SHOPPING_CART_SESSION', 'cart');
    - define('BASE_URL', 'http://localhost:<CổngHostApache>/');
7. Run File
    - Sau khi 1>2>3 hoàn thành mở file `index.php` theo đường dẫn ./viewa/layouts/index.php
    - Run file `index.php` bằng `PHP Server: Serve project` hoặc `PHP Server: Reload serve`
    - Login app theo tài khoản mật khẩu trong DB > users

## 🍀Contact me
- **GitHub:** [TokisakiNinoVn](https://github.com/TokisakiNinoVn).
- **Discord:** [tokisakinino](link).
- **Twitter:** [_tokisaki_nino](https://twitter.com/_tokisaki_nino).
- **Instagram:** [nino.real.memories](https://www.instagram.com/nino.real.memories/).
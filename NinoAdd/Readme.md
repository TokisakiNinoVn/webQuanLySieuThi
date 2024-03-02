1. import database
2. sau đó sửa các giá trị tương ứng sau trong file "database.php", "chitiet.php"
    `protected $db_host='localhost';` hoặc `protected $db_host='localhost:<Cổng>';`
	`protected $db_user='root';` hoặc `protected $db_user='<TênuserphpAdmin>';`
	`protected $db_pass='';` hoặc `protected $db_pass='<Mật khẩu>';`
	`protected $db_name='<Têndatabase>';`

	- file "dangnhap.php":
		`$connect_db = mysqli_connect('localhost', 'root', '', '<TênDB>');`
		hoặc
		`$connect_db = mysqli_connect('localhost', '<TênuserphpAdmin>', '<Mật khẩu>', '<TênDB>');`
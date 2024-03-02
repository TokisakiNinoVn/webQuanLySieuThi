
<?php
class nguoidung extends Database{
	protected $ten;
	protected $dc;
	protected $email;
	protected $user;
	protected $pass;
	protected $level;
	protected $tensp;
	protected $loaisp;
	protected $giasp;
	protected $anh;
	protected $dm;
	
		public function __construct(){
		$this->connect();
		}
	public function setTen($t){
		$this->ten=$t;
		}
	public function getTen(){
		return $this->ten;
		}
	public function setDiachi($t){
		$this->dc=$t;
		}
	public function getDiachi(){
		return $this->dc;
		}
	public function setEmail($t){
		$this->email=$t;
		}
	public function getEmail(){
		return $this->email;
		}
	public function setUser($t){
		$this->user=$t;
		}
	public function getUser(){
		return $this->user;
		}
	public function setPass($t){
		$this->pass=$t;
		}
	public function getPass(){
		return $this->pass;
		}
	public function setLevel($t){
		$this->level=$t;
		}
	public function getLevel(){
		return $this->level;
		}
		public function setTensp($t){
		$this->tensp=$t;
		}
	public function getTensp(){
		return $this->tensp;
		}
		
		public function setSL($t){
		$this->loaisp=$t;
		}
	public function getSL(){
		return $this->loaisp;
		}
	
		public function setGiasp($t){
		$this->giasp=$t;
		}
	public function getGiasp(){
		return $this->giasp;
		}
	
		public function setAnh($t){
		$this->anh=$t;
		}
		
	public function getAnh(){
		return $this->anh;
		}
		
			public function setDm($t){
		$this->dm=$t;
		}
		
	public function getDm(){
		return $this->dm;
		}
		
	public function Login(){
		$sql="SELECT * FROM thanhvien tai_khoan='".$this->getUser()."' AND mat_khau='".$this->getPass()."' ";
		$this->query($sql);
			if($this->num_row() > 0){
				$user = ""; // Assign a value to the variable '$user'
				$pass = ""; // Assign a value to the variable '$user'
				$_SESSION["user"] = $user;
				$_SESSION["pass"] = $pass;
				return 'valid';
			}}
	public function create(){
		$sql="INSERT INTO thanhvien(ho_ten,tai_khoan,mat_khau,id_quyen) VALUES('".$this->getTen()."','".$this->getUser()."','".$this->getPass()."','".$this-> getLevel()."')";
		$this->query($sql);
		}
		public function createtv(){
		$sql="INSERT INTO thanhvien(ho_ten,tai_khoan,mat_khau,id_quyen) VALUES('".$this->getTen()."','".$this->getUser()."','".$this->getPass()."','2')";
		$this->query($sql);
		}
		public function createsp(){
		$sql="INSERT INTO sanpham(ten_sp,so_luong,don_gia,hinh_anh,loai_sp) VALUES('".$this->getTensp()."','".$this->getSL()."','".$this->getGiasp()."','".$this->getAnh()."','".$this->getDm()."')";
		$this->query($sql);
		}
		public function createloai(){
		$sql="INSERT INTO loai_sp(ten_loaisp,id_danhmuc) VALUES('".$this->getTensp()."','".$this->getDm()."')";
		$this->query($sql);
		}
		public function createdm(){
		$sql="INSERT INTO danhmuc_sp(ten_danhmuc) VALUES('".$this->getTensp()."')";
		$this->query($sql);
		}
	public function check_tv(){
		$sql="SELECT * FROM thanhvien WHERE tai_khoan=".$this->getUser()."";
		$this->query($sql);
		if($this->num_row()==0){
			
			return TRUE;
			}
			else{
				return FALSE;
				}
		
		}
		}

?>
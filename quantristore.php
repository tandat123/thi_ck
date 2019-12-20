<?php
 	require "class/goc.php";
		 class quantristore extends goc{
			function thongtinuser($u, $p){
	$u = $this->db->escape_string($u);
	$p = $this->db->escape_string($p);
	$p = md5($p);
	$sql="SELECT * FROM users WHERE Username='$u' AND Password ='$p'";
	$kq = $this->db->query($sql);
	if ($kq->num_rows==0) return FALSE;
	else return $kq->fetch_assoc();
}
			function checkLogin() {
    if (isset($_SESSION['login_id'])== false){
          $_SESSION['error'] = 'Bạn chưa đăng nhập';
          $_SESSION['back'] = $_SERVER['REQUEST_URI'];
           header('location:login.php'); 
           exit();
     }elseif ($_SESSION['login_level']!=1){
          $_SESSION['error'] = 'Bạn không có quyền xem trang này';
          $_SESSION['back'] = $_SERVER['REQUEST_URI'];
          header('location:login.php');
          exit();
     }
}			function ListLoaiSP(){
			$sql = " SELECT idLoai, TenLoai, AnHien from loaisp";
			$kq= $this->db->query($sql);
			if(!$kq) die ($this->db->error);
			return $kq;
				}
			function LoaiSP_Them($TenLoai,$hinh,$AnHien){
				settype($AnHien,"int");
				 $sql= "INSERT INTO loaisp SET TenLoai ='$TenLoai', AnHien='$AnHien', hinh ='$hinh'";
				$kq= $this->db->query($sql);
				
				if(!$kq) die ($this-> db->error);
				return $kq;
				
				}
				function LoaiSP_ChiTiet($idLoai){
					$sql="SELECT idLoai,TenLoai, AnHien, hinh from loaisp
					where idLoai=$idLoai";
					$kq = $this->db->query($sql);
					if(!$kq) die ($this-> db->error);
					return $kq;
					}
					function LoaiSP_Sua($idLoai,$TenLoai,$AnHien,$hinh){
						settype($idLoai,"int");
						$TenLoai = $this->db->escape_string(trim(strip_tags($TenLoai)));
						settype($AnHien,"int");
						$sql = " Update loaisp SET TenLoai = '$TenLoai', AnHien='$AnHien', hinh = '$hinh'
						where idLoai = $idLoai";
						$kq = $this->db->query($sql);
						if(!$kq) die ( $this->db->error);
						}
					
					function LoaiSP_Xoa($idLoai){
						settype($idLoai,"int");
						$sql= "DELETE FROM loaisp WHERE idLoai=$idLoai";
						$kq = $this->db->query($sql);
						if (!$kq) die ($this->db->error);
					}//function
					
					function ListSP(){
					$sql= "SELECT idSP, TenSP, MoTa,Gia,GiaKM, AnHien, sanpham.idLoai from sanpham";
					$kq = $this->db->query($sql);
					if (!$kq) die ($this->db->error);
					return $kq;
					}//function
			function SP_Them($TenSP,$MoTa, $Gia, $GiaKM, $AnHien, $idLoai){
				settype($AnHien,"int");
				settype($Gia,"int");
				settype($GiaKM,"int");
				 $sql= "INSERT INTO sanpham SET TenSP ='$TenSP',MoTa = '$MoTa',Gia='$Gia',GiaKM='$GiaKM', AnHien='$AnHien',idLoai='5'";
				$kq= $this->db->query($sql);
				
				if(!$kq) die ($this-> db->error);
				return $kq;
				
				}
				function SP_ChiTiet($idSP){
					$sql="SELECT idSP,TenSP,MoTa,Gia,GiaKM, AnHien, idLoai from sanpham where idSP=$idSP"; 
					
					$kq = $this->db->query($sql);
					if(!$kq) die ($this-> db->error);
					return $kq;
					}
				
				function SP_Sua($TenSP,$MoTa,$Gia, $GiaKM, $AnHien,$idLoai){
					$TenSP = $this->db->escape_string(trim(strip_tags($TenSP)));
					$MoTa = $this->db->escape_string(trim(strip_tags($MoTa)));
						settype($Gia,"int");
						settype($GiaKM,"int");
						settype($idLoai,"int");
						
						settype($AnHien,"int");
						$sql = "Update sanpham SET TenSP = '$TenSP', MoTa = '$MoTa', Gia='$Gia', GiaKM='$GiaKM',AnHien='$AnHien', idLoai = '6' where idSP = '$idSP'";
						$kq = $this->db->query($sql);
						if(!$kq) die ( $this->db->error);
						}
						function SP_Xoa($idSP){
						settype($idSP,"int");
						$sql= "DELETE FROM sanpham WHERE idSP=$idSP";
						$kq = $this->db->query($sql);
						if (!$kq) die ($this->db->error);
	}//function
					
	}//class
	?>
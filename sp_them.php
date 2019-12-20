<?php

if (isset($_POST['TenSP'])){
	  $TenSP =$_POST['TenSP'];
	  $MoTa =$_POST['MoTa'];
	$Gia =$_POST['Gia'];
	 $GiaKM =$_POST['GiaKM'];
	 $AnHien = $_POST['AnHien'];
	 $idLoai = $_POST['idLoai']; 
 $qt->SP_Them($TenSP,$MoTa, $Gia, $GiaKM, $AnHien,$idLoai);
	echo "<script>document.location='index.php?p=sp_ds';</script>";
	exit();
	
	
}
	
?>
<div class="row clearfix">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 center-block" style="float:none">
                    <div class="card">
                        <div class="header">
                            <h2>
                                THÊM SẢN PHẨM
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method="post"  enctype= multipart/form-data>
                                <div class="row clearfix">
                                    <div class=" col-sm-3 form-control-label">
                                        <label for="TenSP">TênSP</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="TenSP" name="TenSP" class="form-control" placeholder="Nhập tên sản phẩm" maxlength="20" min="3" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class=" col-sm-3 form-control-label">
                                        <label for="MoTa">Mô Tả</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="MoTa" name="MoTa" class="form-control" placeholder="Mô tả sản phẩm " maxlength="255" min="3" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class=" col-sm-3 form-control-label">
                                        <label for="TenSP">Giá</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="Gia" name="Gia" class="form-control" placeholder="Nhập giá sản phẩm" maxlength="20" min="3" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class=" col-sm-3 form-control-label">
                                        <label for="TenSP">GiáKM</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="GiaKM" name="GiaKM" class="form-control" placeholder="Nhập giá khuyến mãi tại đây hehe	" maxlength="20" min="3" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 form-control-label">
                                	<label>Ẩn hiện</label>
                                </div>
                                <div class="col-sm-9">
                                	<div class="form-group">
                                    <div class="form-line abc">
                                    	<input type="radio" id="AH1" name="AnHien" checked value="1">
                                        <label for="AH1">Hiện</label>
                                        <input type="radio" id="AH0" name="AnHien" value="0">
                                        <label for="AH0">Ẩn</label>
                                        </div>
                                        </div>
                                </div>
                                
                               
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Thêm SP</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
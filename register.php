<!DOCTYPE html>
<html>
<head>
  <!-- Basic Page Info -->
  <meta charset="utf-8">
  <title>Fırat Üniversitesi - Fen Bilimleri Enstitüsü</title>

  <!-- Site favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/ful.png">
  <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/ful.png">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
</head>
<body>
  

  <div class="header">
    <div class="header-left">
      <div class="menu-icon dw dw-menu"></div>
    </div>


  
  </div>

  <div class="left-side-bar">
    
    <div class="menu-block customscroll">
      <div class="sidebar-menu">
        <ul id="accordion-menu">
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-library"></span><span class="mtext">Profil</span>
            </a>
            <ul class="submenu">
              
              <li><a href="basvurular.php">Başvurular</a></li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-library"></span><span class="mtext">Giriş</span>
            </a>
            <ul class="submenu">
              
              <li><a href="register.php">Yeni Kullanıcı Girişi</a></li>
            </ul>

            
          </li>

        </ul>
      </div>
    </div>
  </div>
  <div class="mobile-menu-overlay"></div>

  <div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
      <div class="min-height-200px">
        
        <div class="card-box mb-30">
          <div class="pd-20">
            <h4 class="text-blue h4">Fırat Üniversitesi</h4>
          </div>
<form id="AjaxBaglanRegister" method="POST" enctype="multipart/form-data">
<div class="pd-20 card-box mb-30">
<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									 <label>Adınızı Giriniz</label>
								  <input type="text" id="name" name="name" placeholder="Lütfen Adınızı Giriniz" class="form-control" required>
                                    
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Email Giriniz</label>
									                      <input type="text" id="email" name="email" placeholder="E-mail Adresinizi Giriniz" class="form-control" required>
								</div>
							</div>
						</div>
            <div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									 <label>Şifrenizi Giriniz</label>
							<input type="text" id="password" name="password"  placeholder="Şifrenizi Giriniz" class="form-control" class="form-control" required>
                                    
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Şifrenizi Giriniz</label>
									            <input type="text" id="c_password" name="c_password" placeholder="Şifrenizi Tekrar Giriniz" class="form-control" required>
								</div>
							</div>
						</div>
            <div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									 <label>Bölüm Giriniz</label>
						<select name="departman" class="custom-select col-12">
                    <option value="0">Danışman</option>
                    <option value="1">Anabilim Dalı Başkanı</option>
                    <option value="2">Öğrenci İşleri</option>
                    <option value="3">Enstitü Müdürü</option>
                    <option value="4">Enstitü Yönetim KuruluBaşkanı</option>
   <!-- Bu kısma ekleme yapabilirsin yanlız ekleme yaparsan eğer value değerini bir arttır -->
                </select>
                                    
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									&nbsp;
								      <div align="right"  class="form-group">
                                    <input type="submit" value="Başvur"id ="submit" data-toggle="button" class="btn btn-primary">
                                </div>
								</div>
							</div>
						</div>







                    </div></div>
      </form> 
      </div>
      
    </div>
  </div>
</script>
  </body>
</html>
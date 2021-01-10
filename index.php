<?php include 'header.php';?>
<?php include 'navigator.php';?>
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Kişisel Bilgiler</h4>

            <p class="mb-30" id="kisiselBilgiKontrol" style="color: red;">              
            <?php 

              if ($_GET['durum']=="hataKodu1") {?><b>Lütfen Ad kısmını dikkatli doldurnuz<b><br></p>
                <?php }

              ?>
              <?php 

              if ($_GET['durum']=="hataKodu2") {?><b>Lütfen Soyad kısmını dikkatli doldurnuz<b><br></p>
                <?php }

              ?>

        </div>
    </div>
    <form action="baglan.php" id="AjaxBaglan" method="POST" enctype="multipart/form-data">
        <div class="row">
                            <div class="col-md-2 col-sm-12">
                                <div class="form-group">
                                    <label>Adınızı Giriniz</label>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                  
                                    <input type="text" name="ad" class="form-control" placeholder="Lütfen Adınızı Giriniz" required>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <div class="form-group">
                                    <label>Soyadınızı Giriniz</label>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="soyad" class="form-control" placeholder="Lütfen Soyadınızı Giriniz" required>
                                </div>
                            </div>
                        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" name="email" placeholder="Mail Adresinizi Giriniz" type="email" required/>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Telefon Numarası</label>
            <div class="col-sm-2 col-md-2">
                <select  name="alanAdi" class="custom-select col-12">

                                                           
<?php
$Dosya = fopen("telephonenumber.txt", "r") or exit("Dosya Açılamadı !");
 $i;
while(!feof($Dosya))
{
    
      $i=$i.fgets($Dosya).".";
    }
 
fclose($Dosya);
$dizi = explode (".",$i);
$newArray = array_unique($dizi);
for ($a=0; $a <=18988 ; $a++) { 
    
if (is_null($newArray[$a])!=true) {?>
    <option value="<?php echo $newArray[$a]; ?>">
    <?php
 echo $newArray[$a];
}
?></option><?php
}
    ?>
</select>
            </div>
            <div class="col-sm-10 col-md-8">
                <input class="form-control" name="tel" placeholder="(111)-111-1111" type="text" min="1000000000" maxlength="10" pattern="[0-9]*"  required/>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Departman Seçiniz</label>
            <div class="col-sm-12 col-md-10">
                <select name="departman" class="custom-select col-12">
                    
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    
</div>

<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Pasaport Bilgileri</h4>
            <p class="mb-30" style="color: red;"> <?php 

              if ($_GET['durum']=="hataKodu3") {?><b>Lütfen Ad Soyad kısmını dikkatli doldurnuz<b><br></p>
                <?php }

              ?>

              <?php 

              if ($_GET['durum']=="hataKodu4") {?><b>Lütfen Pasaport Numarasını Dikkatli Doldurnuz<b><br></p>
                <?php }

              ?>
       
        </div>
    </div>
    
        <div class="row">
            <div class="col-md-4 col-sm-12">
<div class="form-group">
                    <label>Pasaport Numarası</label>
                    <input type="text" name="pasaportNumber" placeholder="X00000000" maxlength="9" minlength="9"  class="form-control"required />
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Kimlik Numarası</label>
                    <input class="form-control" name="kimlik" placeholder="00000000000" minlength="10"  min="0" pattern="[0-9]*"   type="text" required  />
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
           
                                    <label class="weight-600">Cinsiyet</label>
                                    <div class="custom-control custom-radio mb-5">
                                        <input checked="" type="radio" id="customRadio1" value="e" name="cinsiyet" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Erkek</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" value="k" id="customRadio2" name="cinsiyet" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Kadın</label>
                                    </div>
                            
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Doğum Tarihi</label>
                    <input class="form-control date-picker" placeholder="Tarih Seçiniz" required name="dogumTarih" type="text" />
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Düzenlenme Tarihi</label>
                    <input name="duzenlemeTarih" required class="form-control date-picker" placeholder="Tarih Seçiniz" type="text" />
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Geçerlilik Tarihi</label>
                    <input name="gecerlilikTarih" required class="form-control date-picker" placeholder="Tarih Seçiniz" type="text" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                             <div class="form-group">
            <label>Pasaport Ekleyin</label>
            <input name="pasaportEkleyin" type="file" accept="application/pdf,application" class="form-control-file form-control height-auto"  required/>
        </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Uyruk</label>
                    <input name="uyruk" placeholder="Uyruk Giriniz Örnek(TUR)" type="text" minlength="3" maxlength="3" class="form-control"required pattern="[a-zA-Z'-'\s]*" />
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Pasaport Türü</label>
                    <select name="pasaportTur" class="custom-select col-12">
                        <option value="1" selected="">Bordo</option>
                        <option value="2">Yeşil</option>
                        <option value="3">Gri</option>

                        <option value="3">Siyah</option>
                    </select>
                </div>
            </div>
        </div>
      </div>
      <div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Mezuniyet Bilgileri</h4>
            <p class="mb-30">Lütfen dikkatli doldurnuz</p>
        </div>
    </div>
      <div class="row">
                            <div class="col-md-4 col-sm-12">
                                                     <div class="form-group">
            <label>Diploma Ekleyin</label>
            <input name="diplomaEkleyin" type="file" accept="application/pdf,application" class="form-control-file form-control height-auto" required />
        </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                                 <div class="form-group">
            <label>Transkript Ekleyin</label>
            <input name="transkriptEkleyin" type="file" accept="application/pdf,application" class="form-control-file form-control height-auto" required/>
        </div>  </div>
                            <div class="col-md-4 col-sm-12">
                                                     <div class="form-group">
            <label>Diploma Notu Giriniz</label>
            
                    <input type="text" name="diplomaNot" placeholder="4.0" class="form-control" required />
               
        </div>
                            </div>
                        </div>
<div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>Ülke Seç</label>




                                             <select id='ulkeSec' name="ulkeSec" onchange="run()" class="custom-select col-12">                
<?php
$Dosya = fopen("isle_yeni.txt", "r");
 $q;
while(!feof($Dosya))
{
    
      $q=$q.fgets($Dosya).".";
    }
 
fclose($Dosya);
$dizi = explode (".",$q);
$newArray = array_unique($dizi);
for ($a=0; $a <=18988 ; $a++) { 
    
if (is_null($newArray[$a])!=true) {?>
    <option value="<?php echo $newArray[$a]; ?>">
    <?php
 echo $newArray[$a];
}
?></option><?php
}
    ?>
</select>

                                </div>
                            </div>
                            <script>
                                



                            </script>
                            <div class="col-md-8 col-sm-12">
                                <div class="form-group">
                                    <label>Üniversite Seç</label>
                                   <select id="universiteSec" name="universiteSec"  class="custom-select col-12">


<?php


$Dosya = fopen("isle2.txt", "r");
 $w;
while(!feof($Dosya))
{
    
      $w=$w.fgets($Dosya).".";
    }
 
fclose($Dosya);
$dizi = explode (".",$w);
$newArray = array_unique($dizi);
for ($a=0; $a <=18988 ; $a++) { 
    //burasi yazan kısma ulkeSec id eklenmesi gerekiyor
//    $metin = $newArray[$a]; 
//if(strstr($metin,"-->burasi")) 
//{ 
if (is_null($newArray[$a])!=true) {?>

    <option value="<?php echo $newArray[$a]; ?>">
    <?php
 echo $newArray[$a];
//}
}
?></option><?php
}
    ?>
</select>
                                </div>
                            </div>
                        </div>   
</div>
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Yabancı Dil Bilgisi</h4>
                <p class="mb-30" style="color: red;"> <?php 

              if ($_GET['durum']=="hataKodu5") {?><b>Lütfen Gönderilen Belge Sayısına Dikkat Ediniz<b><br></p>
                <?php }

              ?>


        </div>
    </div>
<div class="row">
                            <div class="col-md-2 col-sm-12">
                                <div class="form-group">
                                    <label></label>
                                    Türkçe Dil Belgesi                              </div>
                            </div>
                            <div class="col-md-10 col-sm-12">
                                <div class="form-group">
                                     <input name="dilBelgesiEkleyin" type="file" accept="application/pdf,application" class="form-control-file form-control height-auto" required/>
                                </div>
                            </div>
                   
                    
                        </div>
    
</div>
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Bizden Soru</h4>
            <p class="mb-30">Neden Üniversitemize Başvurmak İstiyorsunuz?</p>
        </div>
    </div>
        <div class="row">
                 <div class="col-md-12 col-sm-12">
                                <textarea name="dusunce" class="form-control" placeholder="Düşünceleriniz..." maxlength="1000" required></textarea>
                            </div>
                        </div>
                        <br>

<div class="row">
                                                 <div class="col-md-4 col-sm-12">
                         
                            </div>
                            <div class="col-md-4 col-sm-12">
                            </div>
                            <div class="col-md-4 col-sm-12">

                                <div align="right"  class="form-group">
                                     <button type="submit" id="submit" name="submit" class="btn btn-primary" data-toggle="button"  >Başvur</button>
                                </div>
                            </div>
                        </div>

    
</div>

    </form>
    
<div class="footer-wrap pd-20 mb-20 card-box">
    Fırat Üniversitesi - Fen Bilimleri Enstitüsü
</div>
            </div>
        
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="AjaxBaglan.js"></script>
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>
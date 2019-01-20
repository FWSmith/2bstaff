<div class="col-sm-1"></div>
<div class="col-sm-10">
	<div class="panel panel-default">
		<div class="panel-body" style="padding: 30px;">
			<div class="content">
				<h3><i class="fa fa-user"></i> ข้อมูลส่วนตัว</h3><hr>
				<div class="row">
   <div class="col-sm-3">
      <div class="form-group cloud">
         <label for="gender" class="control-label" style="font-size: 15px;">คำนำหน้า :</label> 
         <select required="required" id="gender" class="form-control">
            <?php
               $check = $getClass->check($profile->gender);
               if($check == true){
                  ?>
                     <option><?php echo $profile->gender; ?></option>
                  <?php
               }
            ?>            
            <option>นาย</option>
            <option>นางสาว</option>
         </select>
      </div>
   </div>
   <div class="col-sm-6">
      <div class="form-group cloud"><label for="name" class="control-label" style="font-size: 15px;">ชื่อ-นามสกุล :</label> 
         <?php
            $check = $getClass->check($profile->name);
            if($check == true){
               ?>
                  <input required="required" id="name" placeholder="กรอกชื่อและนามสกุล" type="text" class="form-control" value="<?php echo $profile->name; ?>">
               <?php
            }else{  
               ?>
                  <input required="required" id="name" placeholder="กรอกชื่อและนามสกุล" type="text" class="form-control">
               <?php
            }
         ?> 
      </div>
   </div>
   <div class="col-sm-3">
      <div class="form-group cloud"><label for="phone" class="control-label" style="font-size: 15px;">เบอร์โทรศัพท์ :</label> 
         <?php
            $check = $getClass->check($profile->phone);
            if($check == true){
               ?>
                  <input required="required" id="phone" placeholder="กรอกเบอร์มือถือ" type="text" class="form-control" value="<?php echo $profile->phone ?>">
               <?php
            }else{  
               ?>
                  <input required="required" id="phone" placeholder="กรอกเบอร์มือถือ" type="text" class="form-control">
               <?php
            }
         ?> 
      </div>
   </div>
   <div class="col-sm-4">
      <div class="form-group cloud"><label for="facebook" class="control-label" style="font-size: 15px;">Facebook :</label> 
         <?php
            $check = $getClass->check($profile->facebook);
            if($check == true){
               ?>
                  <input required="required" id="facebook" placeholder="กรอกชื่อโปรไฟล์ Facebook" type="text" class="form-control" value="<?php echo $profile->facebook ?>">
               <?php
            }else{  
               ?>
                  <input required="required" id="facebook" placeholder="กรอกชื่อโปรไฟล์ Facebook" type="text" class="form-control">
               <?php
            }
         ?> 
      </div>
   </div>
   <div class="col-sm-4">
      <div class="form-group cloud"><label for="line" class="control-label" style="font-size: 15px;">Line ID :</label> 
         <?php
            $check = $getClass->check($profile->line);
            if($check == true){
               ?>
                  <input required="required" id="line" placeholder="กรอก ID Line" type="text" class="form-control" value="<?php echo $profile->line ?>">
               <?php
            }else{  
               ?>
                  <input required="required" id="line" placeholder="กรอก ID Line" type="text" class="form-control">
               <?php
            }
         ?> 
      </div>
   </div>
   <div class="col-sm-4">
      <div class="form-group cloud"><label for="email" class="control-label" style="font-size: 15px;">Email :</label> 
         <?php
            $check = $getClass->check($profile->email);
            if($check == true){
               ?>
                  <input required="required" id="email" placeholder="กรอก Email ที่ใช้ได้จริง" type="email" class="form-control" value="<?php echo $profile->email ?>">
               <?php
            }else{  
               ?>
                  <input required="required" id="email" placeholder="กรอก Email ที่ใช้ได้จริง" type="email" class="form-control">
               <?php
            }
         ?> 
      </div>
   </div>
   <div class="col-sm-8">
      <div class="form-group cloud"><label for="address" class="control-label" style="font-size: 15px;">ที่อยู่ :</label> 
      <?php
         $check = $getClass->check($profile->address);
         if($check == true){
            ?>
               <input required="required" id="address" placeholder="กรอกที่อยู่ของคุณ" type="text" class="form-control" value="<?php echo $profile->address ?>"> 
            <?php
         }else{  
            ?> 
               <input required="required" id="address" placeholder="กรอกที่อยู่ของคุณ" type="text" class="form-control"> 
            <?php
         }
      ?>
      </div>
   </div>
   <div class="col-sm-4">
      <div class="form-group cloud"><label for="mail_code" class="control-label" style="font-size: 15px;">รหัสไปรษณีย์ :</label> 
      <?php
         $check = $getClass->check($profile->mail_code);
         if($check == true){
            ?>
               <input required="required" id="mail_code" placeholder="กรอกรหัสไปรษณีย์" type="text" class="form-control" value="<?php echo $profile->mail_code ?>">
            <?php
         }else{  
            ?> 
               <input required="required" id="mail_code" placeholder="กรอกรหัสไปรษณีย์" type="text" class="form-control">
            <?php
         }
      ?>
      </div>
   </div>
   <div class="col-sm-4">
      <div class="form-group cloud"><label for="district" class="control-label" style="font-size: 15px;">เขต :</label> 
      <?php
         $check = $getClass->check($profile->district);
         if($check == true){
            ?>
               <input required="required" id="district" placeholder="กรอกที่อยู่เขตของคุณ" type="text" class="form-control" value="<?php echo $profile->district ?>">
            <?php
         }else{  
            ?> 
               <input required="required" id="district" placeholder="กรอกที่อยู่เขตของคุณ" type="text" class="form-control">
            <?php
         }
      ?>
      </div>
   </div>
   <div class="col-sm-4">
      <div class="form-group cloud"><label for="city" class="control-label" style="font-size: 15px;">อำเภอ :</label> 
         <?php
            $check = $getClass->check($profile->city);
            if($check == true){
               ?>
                  <input required="required" id="city" placeholder="กรอกที่อยู่อำเภอของคุณ" type="text" class="form-control" value="<?php echo $profile->city ?>">
               <?php
            }else{  
               ?> 
                  <input required="required" id="city" placeholder="กรอกที่อยู่อำเภอของคุณ" type="text" class="form-control">
               <?php
            }
         ?>
      </div>
   </div>
   <div class="col-sm-4">
      <div class="form-group cloud"><label for="province" class="control-label" style="font-size: 15px;">จังหวัด :</label> 
      <?php
         $check = $getClass->check($profile->province);
         if($check == true){
            ?>
               <input required="required" id="province" placeholder="กรอกจังหวัดของคุณ" type="text" class="form-control" value="<?php echo $profile->province ?>">
            <?php
         }else{  
            ?> 
               <input required="required" id="province" placeholder="กรอกจังหวัดของคุณ" type="text" class="form-control">
            <?php
         }
      ?>
      </div>
   </div>
   <div class="col-sm-2">
      <div class="form-group cloud">
         <label for="size" class="control-label" style="font-size: 15px;">ไซส์เสื้อ :</label> 
         <select id="size" class="form-control">
            <?php
               $check = $getClass->check($profile->size);
               if($check == true){
                  ?>
                     <option><?php echo $profile->size; ?></option>
                  <?php
               }
            ?>    
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
            <option>2XL</option>
            <option>3XL</option>
         </select>
      </div>
   </div>
   <div class="col-sm-5">
      <div class="form-group cloud"><label for="food_allergy" class="control-label" style="font-size: 15px;">อาหารที่แพ้ :</label> 
         <?php
            $check = $getClass->check($profile->food_allergy);
            if($check == true){
               ?>
                  <input required="required" id="food_allergy" placeholder="กรอกข้อมูลอาหารที่น้องแพ้" type="text" class="form-control" value="<?php echo $profile->food_allergy ?>">
               <?php
            }else{  
               ?> 
                  <input required="required" id="food_allergy" placeholder="กรอกข้อมูลอาหารที่น้องแพ้" type="text" class="form-control">
               <?php
            }
         ?>
      </div>
   </div>
   <div class="col-sm-5">
      <div class="form-group cloud"><label for="drug_allergy" class="control-label" style="font-size: 15px;">ยาที่แพ้ :</label>
         <?php
            $check = $getClass->check($profile->food_allergy);
            if($check == true){
               ?>
                  <input required="required" id="drug_allergy" placeholder="กรอกข้อมูลยาที่น้องแพ้" type="text" class="form-control" value="<?php echo $profile->food_allergy ?>">
               <?php
            }else{  
               ?> 
                  <input required="required" id="drug_allergy" placeholder="กรอกข้อมูลยาที่น้องแพ้" type="text" class="form-control">
               <?php
            }
         ?>
       </div>
   </div>
   <div class="col-sm-12">
      <div class="form-group cloud">
         <label for="drug_allergy" class="control-label" style="font-size: 15px;">รูปโปรไฟล์ :</label> 
         <div class="input-group"><input required="required" accept="image/*" type="file" id="file"></div>
      </div>
      <br> 
      <div style="font-family: cloud; margin-bottom: -5px; font-size: 16px;">
         <svg class="svg-inline--fa fa-address-book fa-w-14 fa-fw" aria-hidden="true" data-prefix="fa" data-icon="address-book" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
            <path fill="currentColor" d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-228-32c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H118.4C106 384 96 375.4 96 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2z"></path>
         </svg>
         <!-- <i class="fa fa-fw fa-address-book"></i> -->&nbsp;ข้อมูลผู้ปกครอง
      </div>
      <hr class="style">
      <div class="row">
         <div class="col-sm-3">
            <div class="form-group cloud">
               <label for="gender" class="control-label" style="font-size: 15px;">คำนำหน้า :</label> 
               <select required="required" id="gender" class="form-control">
                  <?php
                     $check = $getClass->check($profile->parent_gender);
                     if($check == true){
                        ?>
                           <option><?php echo $profile->parent_gender; ?></option>
                        <?php
                     }
                  ?>   
                  <option>นาย</option>
                  <option>นางสาว</option>
                  <option>นาง</option>
               </select>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group cloud"><label for="name" class="control-label" style="font-size: 15px;">ชื่อ-นามสกุล :</label> 
               <?php
                  $check = $getClass->check($profile->parent_name);
                  if($check == true){
                     ?>
                        <input required="required" id="name" placeholder="กรอกชื่อและนามสกุล" type="text" class="form-control" value="<?php echo $profile->parent_name?>">
                     <?php
                  }else{  
                     ?> 
                        <input required="required" id="name" placeholder="กรอกชื่อและนามสกุล" type="text" class="form-control">
                     <?php
                  }
               ?>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="form-group cloud"><label for="status" class="control-label" style="font-size: 15px;">เกี่ยวข้องเป็น :</label> 
               <?php
                  $check = $getClass->check($profile->parent_status);
                  if($check == true){
                     ?>
                        <input required="required" id="status" placeholder="เกี่ยวข้องเป็น" type="text" class="form-control" value="<?php echo $profile->parent_status ?>">
                     <?php
                  }else{  
                     ?> 
                        <input required="required" id="status" placeholder="เกี่ยวข้องเป็น" type="text" class="form-control">
                     <?php
                  }
               ?>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group cloud"><label for="phone" class="control-label" style="font-size: 15px;">เบอร์โทรศัพท์ :</label> 
            <?php
                  $check = $getClass->check($profile->parent_phone);
                  if($check == true){
                     ?>
                        <input required="required" id="phone" placeholder="กรอกเบอร์มือถือ" type="text" class="form-control" value="<?php echo $profile->parent_phone ?>">
                     <?php
                  }else{  
                     ?> 
                        <input required="required" id="phone" placeholder="กรอกเบอร์มือถือ" type="text" class="form-control">
                     <?php
                  }
               ?>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group cloud">
               <label for="parent_address" class="control-label" style="font-size: 15px;">สถานะ :</label> 
               <select required="required" id="parent_address" class="form-control">
                  <?php
                     $check = $getClass->check($profile->parent_address);
                     if($check == true){
                        ?>
                           <option><?php echo $profile->parent_address ?></option>
                        <?php
                     }
                  ?>   
                  <option>ผู้ปกครองพักอาศัยร่วมกับนักเรียน</option>
                  <option>ผู้ปกครองมิได้พักอาศัยร่วมกับนักเรียน</option>
               </select>
            </div>
         </div>
         <!----> <!----> <!----> <!----> <!---->
      </div>
   </div>
</div>
			</div>
		</div>
		<div class="panel-footer">
			<a href="?page=main" style="text-decoration: none;">
				<button class="btn btn-block btn-danger" type="button" style="margin-bottom: 5px;">
				<i class="fa fa-backward"></i>&nbsp;<b>ย้อนกลับ</b></button>
			</a>
		</div>
	</div>
</div>
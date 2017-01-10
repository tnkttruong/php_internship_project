<?php echo $this->element('/public/header'); ?>
<div style="width: 80%;padding: 50px;margin-top: 125px;    margin-left: 200px;"class="">
<h3 style="margin-left: -17px;color: #b99ddd;float: left;">Thông tin cá nhân</h3>
<div style="float: left; margin-top: 45px; margin-left: -240px;">

		</div>
<div style="float: right;">
<a href="/DACSHTTT/them-nha-hang" class="btn btn-primary"  style="font-size: 13px;margin-left: 0px;    margin-right: 10px;">Thêm nhà hàng</a>
<a href="/DACSHTTT/logout-user" class="btn btn-primary"  style="font-size: 13px;margin-left: 0px;">Đăng xuất</a>
</div>
<div style="clear: both;"></div>
		<?php
			echo $this->Form->create('User', array('id'=>'formuser'));
		?>

			<div	class="row form-group">
		           <div  style="margin-bottom: 15px;" class="">
		            <label style="" class="control-label">Tên đăng nhập(*)</label><br>
		            <label class="control-label" style="color: red;" >admin1234</label>

		        </div>
		        <div  style="margin-bottom: 15px;"  class="">
		            <label class="control-label">Tên đầy đủ(*)</label>
		           <?php
      echo $this->Form->input('User.Fullname', array('label' => false,'class'=>'form-control','type'=>'text','required'=>'false','placeholder'=>'Fullname'));
      ?>
		        </div>
		        <div  style="margin-bottom: 15px;" class="">
		        <label class="control-label">Phone</label>
		           <?php
      echo $this->Form->input('User.Phone', array('label' => false,'class'=>'form-control','type'=>'text','required'=>'false','placeholder'=>'Phone'));
      ?>
		        			        </div>
		        <div   style="margin-bottom: 15px;"class="">
		           <label class="control-label">Email</label>
		             <?php
      echo $this->Form->input('User.Email', array('label' => false,'class'=>'form-control','type'=>'text','required'=>'false','placeholder'=>'Email'));
      ?>
		        </div>
		      
		    </div>
		    <div  class="row form-group">
		        <div class="">
		            <label class="control-label">Mật khẩu(*)</label>
		           <?php
      echo $this->Form->input('User.Password', array('label' => false,'class'=>'form-control','type'=>'password','required'=>'false','placeholder'=>'Password'));
      ?>
		        </div>
		        <div class="">
		            <label class="control-label">Nhập lại mật khẩu(*)</label>
		             <?php
      echo $this->Form->input('User.Retype_password', array('label' => false,'class'=>'form-control','type'=>'password','required'=>'false','placeholder'=>'Retype Password'));
      ?>
		        </div>
		    </div>

			<div class="form-group text-right">
		        <input type="submit" class="btn btn-primary" name="submit" value="Sửa">
		        <input type="reset" class="btn btn-primary" name="reset" value="Nhập lại">
		    </div>
		</form>
	</div> 

<?php echo $this->element('/public/footer'); ?>
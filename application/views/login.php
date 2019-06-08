<!DOCTYPE html>
<html lang="zxx">

    <head>
        
        <title>Medication Medical Category Bootstrap responsive Web Template | Home :: w3layouts</title>
        <?php $this->load->view('includes/css_headers') ?>
        
  

    <body>
        <div class="header-top-w3layouts">
            <?php $this->load->view('includes/top_menu') ?>
            
           <div class="col-md-12 col-lg-6">
  <div class="row">
   <div class="col-md-6 col-md-offset-6 well">
		<?php $attributes = array("name" => "loginform");
			echo form_open("login/submit", $attributes);?>
			<legend><b>Login</b></legend>
			
			<div class="form-group">
				<label for="name">Email-ID</label>
				<input class="form-control" name="email" placeholder="Enter Email-ID" type="text" autocomplete="username" value="<?php echo set_value('email'); ?>" />
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>
		
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-dark">Login</button>
			</div>
	   
	   	  <div class="col-md-12 col-md-offset-12 text-center">	
		   New User? <a href="<?php echo base_url(); ?>DoctorsAppointment/index">Sign Up Here</a>
		 </div>
	     </div>
	    
    
		<?php echo form_close(); ?>
		<?php echo $this->session->flashdata('msg'); ?>
		</div>
		</div>
            <?php $this->load->view('includes/footer') ?>
            <?php $this->load->view('includes/js_footer') ?>
        </div>
      
    </body>
</html>
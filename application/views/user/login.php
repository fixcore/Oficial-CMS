<!-- don't touch -->
<title><?= $this->config->item('project_name'); ?> - <?= $this->lang->line('sign_in'); ?></title>
</head>
<!-- don't touch -->
<body>

 <center>

 <!--HEADER-->
 <?php $this->load->view('general/menu'); ?>
 <!--HEADER.End-->


<div id="image_header" align="center">

	<div class="sub_head_image" align="center"></div>    
</div>

<div class="main_a_holder" align="center">
<!-- BODY-->
<div class="main_b_holder" align="center">

<div class="space-fix"></div>
 <div class="sec_b_holder" align="center">
  <div id="body" align="left">
   <!-- BODY Content start here -->
   

 <div class="sub-page-title">
  <div id="title"><h1><?= $this->lang->line('sign_in'); ?><p></p><span></span></h1></div>
 </div>

<!-- Heroes-WoW -->
 <div class="container_2" align="center">

<div class="error-holder">
   </div>

   <div class="container_3" align="center">

     <!-- FORMS -->
      <form action="" method="post">

        <?php if($this->expansion_selector_model->getTrueSelector($this->config->item('expansion_selector')) == 1) {?>
        <div class="row">
          <label><?= $this->lang->line('username'); ?></label>
          <input type="text" name="username" tabindex="5" required/>
        </div>
        <?php } else { ?>
        <div class="row">
          <label><?= $this->lang->line('email_address'); ?></label>
          <input type="text" name="email" tabindex="5" required/>
        </div>
        <?php } ?>
        
        <div class="row">
          <label><?= $this->lang->line('password'); ?></label>
          <input type="password" name="password" tabindex="3" required />
        </div>

        	<div class="seperator"></div>

        <div class="row" align="right">
       		<input type="submit" value="<?= $this->lang->line('sign_in'); ?>" name="sigin_user" tabindex="10">
        </div>

        <?php if(isset($_POST['sigin_user'])){ 
                $password = $_POST["password"];
                if($this->expansion_selector_model->getTrueSelector($this->config->item('expansion_selector')) == 1){
                $username = $_POST["username"];
                    $this->expansion_selector_model->getLoginOne($username, $this->general_model->encryptAccount($username, $password));
                }
                else{
                $email = $_POST["email"];
                    $this->expansion_selector_model->getLoginTwo($email, $this->general_model->encryptBattlenet($email, $password));
                }
           } ?>

      </form>
     <!-- FORMS.End -->

   </div>


 </div>

   <!-- BODY Content end here -->
   </div>
  </div>
 </div>
 <!-- BODY-->
 </div>
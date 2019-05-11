<head>
    <title>Staff Information</title>
</head>
<body>
<html>
    <head>
        <title>New Staff</title>
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/util.css">
    </head>
    <body>
       <div class="container-contact100">
            <div class="wrap-contact100">
                <form action="index.php?controller=staff&action=updateStaff&id=<?php echo $emp->staff_id ?>" method="POST" class="contact100-form validate-form" enctype="multipart/form-data">
                    <span class="contact100-form-title">
                        Modify
                    </span>
                    <div>
                        <label for="staff_id" class="label-input100">ID</label>
                        <input type="text" name="staff_id" class="input100" value=<?php echo $emp->staff_id ?>>
                    </div>  
                    <br>
                    <div>
                        <label for="staff_name" class="label-input100">Name</label>
                        <input type="text" name="staff_name" class="input100" value= "<?php echo $emp->staff_name?>">
                    </div> 
                    <br>
                    <div class="wrap-input100 input100-select">
                        <label for="staff_gender" class="label-input100">Gender</label>
                        <div>
						<select class="selection-2" name="staff_gender" >
                        <?php 
                            if($emp->staff_gender == 'M'){
                                echo "<option value = ".M. ">Male</option>";
                                echo "<option value = ".F.">Female</option>";
                            }else {
                                echo "<option value = ".F. ">Female</option>";
                                echo "<option value = ".M.">Male</option>";
                                }
                        ?>
                        </select>
                        </div>
					</div>
                    <br>
                    <div>
                        <label for="staff_dob" class="label-input100">Birthday</label>
                        <input type="text" name="staff_dob" class="input100" <?php echo "value=" .$emp->staff_dob ?>>
                    </div>
                    <div>
                        <label for="staff_address" class="label-input100">Address</label>
                        <input type="text" name="staff_address" class="input100" value ="<?php echo $emp->staff_address?> ">
                    </div>
                    <div>
                        <label for="staff_phone" class="label-input100">Phone</label>
                        <input type="text" name="staff_phone" class="input100" value= <?php echo "  $emp->staff_phone" ?>>
                    </div>
                    <div>
                        <label for="image" class="label-input100">Avatar</label>
                        <input type="file" name="image" class="input100" >
                    </div>
                    <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
                </form>
                
            </section>
        
       </div>
    </body>

</html>

</body>
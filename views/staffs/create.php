<html>
    <head>
        <title>New Staff</title>
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/util.css">
    </head>
    <body>
       <div class="container-contact100">
            <div class="wrap-contact100">
                <form action="index.php?controller=staff&action=createStaff" method="POST" class="contact100-form validate-form" enctype="multipart/form-data">
                    <span class="contact100-form-title">
                        New Staff
                    </span>
                    <div class= "wrap-input100 validate-input" >
                        <label for="staff_id" class="label-input100">ID</label>
                        <input type="text" name="staff_id" class="input100" placeholder="Enter ID" >
                    </div>  
                    <br>
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <label for="staff_name" class="label-input100">Name</label>
                        <input type="text" name="staff_name" class="input100" placeholder="Enter name">
                    </div> 
                    <br>
                    <div class="select2-container">
                        <label for="staff_gender" class="label-input100">Gender</label>
                        <div>
						<select class="selection-2" name="staff_gender">
							<option value = "M">Male</option>
							<option value = "F">Female</option>
                        </select>
                        </div>
                    </div>
                    <!-- <div class="wrap-input100 input100-select">
					<span class="label-input100">Needed Services</span>
					<div>
						<select class="selection-2" name="service">
							<option>Choose Services</option>
							<option>Online Store</option>
							<option>eCommerce Bussiness</option>
							<option>UI/UX Design</option>
							<option>Online Services</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				    </div> -->
                    <br>
                    <div class="wrap-input100 validate-input">
                        <label for="staff_dob" class="label-input100">Birthday</label>
                        <input type="text" name="staff_dob" class="input100" placeholder="Enter Birthday">
                    </div>
                    <div class="wrap-input100 validate-input">
                        <label for="staff_address" class="label-input100">Address</label>
                        <input type="text" name="staff_address" class="input100" placeholder="Enter Address">
                    </div>
                    <div class="wrap-input100 validate-input">
                        <label for="staff_phone" class="label-input100">Phone</label>
                        <input type="text" name="staff_phone" class="input100" placeholder="Enter Phone">
                    </div>
                    <div class="wrap-input100 validate-input">
                        <label for="image" class="label-input100">Avatar</label>
                        <input type="file" name="image" class="input100" placeholder="Enter Avatar">
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
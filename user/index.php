<?php
if ($_settings->userdata('id') != '' && $_settings->userdata('id') != 2) {
	$qry = $conn->query("SELECT * FROM `customer_list` where id = '{$_settings->userdata('id')}'");
	if ($qry->num_rows > 0) {
		foreach ($qry->fetch_array() as $k => $v) {
			if (!is_numeric($k)) {
				$$k = $v;
			}
		}
	}
} else {
	echo "<script>alert('You dont have access for this page'); location.replace('./');</script>";
}
?>
<style>
	img#cimg {
		height: 5em;
		width: 5em;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>

<section>
	<div class="container-fluid text-center">
		<div class="py-2">
			<hr>
			<h3>Update Account Information</h3>
			<hr>
		</div>
	</div>
</section>
<section class="py-3">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-md-11 col-sm-12 col-xs-12">
				<div class="">
					<div class="">
						<form id="register-form" action="" method="post">
							<input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 px-5">
									<div class="form-group">
										<label for="firstname" class="control-label">First Name</label>
										<input type="text" class="form-control form-control-sm rounded-0" reqiured="" name="firstname" id="firstname" value="<?= isset($firstname) ? $firstname : '' ?>">
									</div>
									<!-- <div class="form-group">
										<label for="middlename" class="control-label">Middle Name</label>
										<input type="text" class="form-control form-control-sm rounded-0" name="middlename" id="middlename" value="<?= isset($middlename) ? $middlename : '' ?>">
									</div>
									<div class="form-group">
										<label for="lastname" class="control-label">Last Name</label>
										<input type="text" class="form-control form-control-sm rounded-0" reqiured="" name="lastname" id="lastname" value="<?= isset($lastname) ? $lastname : '' ?>">
									</div> -->
									<div class="form-group">
										<label for="gender" class="control-label">Gender</label>
										<select class="custom-select custom-select-sm rounded-0" reqiured="" name="gender" id="gender">
											<option <?= isset($gender) && $gender == 'Male' ? "selected" : '' ?>>Male</option>
											<option <?= isset($gender) && $gender == 'Female' ? "selected" : '' ?>>Female</option>
										</select>
									</div>
									<div class="form-group">
										<label for="password" class="control-label">New Password</label>
										<div class="input-group input-group-sm">
											<input type="password" class="form-control form-control-sm rounded-0" name="password" id="password">
											<button tabindex="-1" class="btn btn-outline-secondary btn-sm rounded-0 pass_view" type="button"><i class="fa fa-eye-slash"></i></button>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 px-5">
									<div class="form-group">
										<label for="email" class="control-label">Email</label>
										<input type="text" class="form-control form-control-sm rounded-0" reqiured="" name="email" id="email" value="<?= isset($email) ? $email : '' ?>">
									</div>
									<div class="form-group">
										<label for="contact" class="control-label">Contact</label>
										<input type="text" class="form-control form-control-sm rounded-0" reqiured="" name="contact" id="contact" value="<?= isset($contact) ? $contact : '' ?>">
									</div>
									<!-- <div class="form-group">
										<label for="password" class="control-label">New Password</label>
										<div class="input-group input-group-sm">
											<input type="password" class="form-control form-control-sm rounded-0" name="password" id="password">
											<button tabindex="-1" class="btn btn-outline-secondary btn-sm rounded-0 pass_view" type="button"><i class="fa fa-eye-slash"></i></button>
										</div>
									</div> -->
									<div class="form-group">
										<label for="cpassword" class="control-label">Confirm New Password</label>
										<div class="input-group input-group-sm">
											<input type="password" class="form-control form-control-sm rounded-0" id="cpassword">
											<button tabindex="-1" class="btn btn-outline-secondary btn-sm rounded-0 pass_view" type="button"><i class="fa fa-eye-slash"></i></button>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 px-5">
									<!-- <div class="form-group">
										<label for="" class="control-label">New Profile Image</label>
										<div class="custom-file">
											<input type="file" class="custom-file-input rounded-0" id="customFile" name="img" onchange="displayImg(this,$(this))" accept="image/png, image/jpeg">
											<label class="custom-file-label rounded-0" for="customFile">Choose file</label>
										</div>
									</div> -->
									<div class="form-group">
										<label for="" class="control-label">Profile Image</label>
										<div class="custom-file">
											<input type="file" class="custom-file-input rounded-0" id="customFile" name="img" onchange="displayImg(this,$(this))" accept="image/png, image/jpeg">
											<label class="custom-file-label rounded-0" for="customFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group d-flex justify-content-center align-items-center">Profile Image -
										<img src="<?php echo validate_image(isset($avatar) ? $avatar : '') ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
									</div>
								</div>
							</div>
							<div class="d-flex justify-content-center">
								<div class="col-sm-4">
									<div class="">
										<button type="submit" class="btn btn-block gradient-custom-2 text-light rounded-pill">Update</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<script>
	function displayImg(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#cimg').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		} else {
			$('#cimg').attr('src', "<?php echo validate_image('') ?>");
		}
	}
	$(document).ready(function() {
		end_loader();
		$('.pass_view').click(function() {
			var input = $(this).siblings('input')
			var type = input.attr('type')
			if (type == 'password') {
				$(this).html('<i class="fa fa-eye"></i>')
				input.attr('type', 'text').focus()
			} else {
				$(this).html('<i class="fa fa-eye-slash"></i>')
				input.attr('type', 'password').focus()
			}
		})
		$('#register-form').submit(function(e) {
			e.preventDefault()
			var _this = $(this)
			var el = $('<div>')
			el.addClass('alert alert-danger err_msg')
			el.hide()
			$('.err_msg').remove()
			if ($('#password').val() != $('#cpassword').val()) {
				el.text('Password does not match')
				_this.prepend(el)
				el.show('slow')
				$('html, body').scrollTop(0)
				return false;
			}
			if (_this[0].checkValidity() == false) {
				_this[0].reportValidity();
				return false;
			}
			start_loader()
			$.ajax({
				url: _base_url_ + "classes/Users.php?f=registration",
				method: 'POST',
				type: 'POST',
				data: new FormData($(this)[0]),
				dataType: 'json',
				cache: false,
				processData: false,
				contentType: false,
				error: err => {
					console.log(err)
					alert('An error occurred')
					end_loader()
				},
				success: function(resp) {
					if (resp.status == 'success') {
						location.reload()
					} else if (!!resp.msg) {
						el.html(resp.msg)
						el.show('slow')
						_this.prepend(el)
						$('html, body').scrollTop(0)
					} else {
						alert('An error occurred')
						console.log(resp)
					}
					end_loader()
				}
			})
		})
	})
</script>
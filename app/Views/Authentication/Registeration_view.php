<?= $this->extend('Layouts/main.php'); ?>

<?= $this->section('content'); ?>
    <div class="container shadow-sm border border-secondary rounded mt-4">
    <form action="" method="post" enctype="multipart/form-data" class="p-2">
        <h3 class="text-center fw-semobold">R E G I S T E R A T I O N <i class="fa-solid fa-id-card" style="color: #74C0FC;"></i></h3>
        <hr>

        <!-- SERVER Message -->
        <?php if(isset($validation)): ?>
            <div class="form-group text-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <div class="row">
            <!-- Profile Image Section -->
            <div class="col-md-4 text-center">
                <div class="form-group">
                    
                    <div class="image-preview-container">
                        <!-- Make the image clickable -->
                        <img id="profilePreview" src="../assets/images/placeholder_image.jpg"  alt="Profile Image" class="img-fluid rounded-circle clickable" style="width: 150px; height: 150px; cursor: pointer; object-fit: cover;">
                    </div>
                    <label for="profile_image">Profile Image</label>
                    <!-- Hidden file input -->
                    <input type="file" class="form-control mt-2" name="profile_image" id="profile_image" accept="image/*" style="display: none;">
                </div>
        </div>

            <!-- User Details Section -->
            <div class="col-md-8">
                <div class="form-group">
                    <label for="#">Firstname</label>
                    <input type="text" class="form-control" name="firstname" value="<?= set_value('firstname')?>">
                </div>
                <div class="form-group">
                    <label for="#">Lastname</label>
                    <input type="text" class="form-control" name="lastname" value="<?= set_value('lastname')?>">
                </div>

                <div class="form-group mt-2">
                    <label for="#">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= set_value('username')?>">
                </div>

                <div class="form-group mt-2">
                    <label for="#">Email</label>
                    <input type="email" class="form-control" name="Email" value="<?= set_value('Email')?>">
                </div>

                <div class="form-group mt-2">
                    <label for="#">Password</label>
                    <input type="password" class="form-control" name="password" value="<?= set_value('password')?>">
                </div>

                <div class="form-group mt-2">
                    <label for="#">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirm" value="<?= set_value('password_confirm')?>">
                </div>

                <button type="submit" class="btn w-100 mt-2" style="background-color: #74C0FC">REGISTER</button>
            </div>
        </div>

        <div class="container text-center mt-3">
            <p>I have already an account <span><a href="Login">Login</a></span></p>
        </div>
    </form>

<!-- JavaScript to Preview the Image -->
<script>
    // Get the image and file input elements
    const profileImageInput = document.getElementById('profile_image');
    const profilePreview = document.getElementById('profilePreview');

    // When the image is clicked, trigger the file input click
    profilePreview.addEventListener('click', function() {
        profileImageInput.click();  // Trigger the file input dialog
    });

    // When a file is selected, update the image preview
    profileImageInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            
            // When the file is loaded, update the preview image
            reader.onload = function(e) {
                profilePreview.src = e.target.result; // Set the src to the base64-encoded image
            };
            
            // Read the file as a data URL
            reader.readAsDataURL(file);
        }
    });
</script>


    </div>
<?= $this->endSection('content'); ?>
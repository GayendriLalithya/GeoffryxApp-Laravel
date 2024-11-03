<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/hbcmsproject/resources/css/register.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 signup-section">
                <h1>Create a new account</h1>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contact No</label>
                        <input type="tel" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">User type</label>
                        <select class="form-control" required>
                        <option value="" disabled>Select user type</option>
                        <option value="professional">Professional</option>
                        <option value="customer">Customer</option>
                        <option value="admin">Admin</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="password-field">
                            <input type="password" class="form-control" required>
                            <span class="password-toggle">
                                <i class="far fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-signup">Sign Up</button>
                </form>
            </div>

            <div class="col-md-6 login-section">
                <h2>Already have an account?</h2>
                <p>Sign In and discover great amount of opportunities</p>
                <a href="#" class="btn btn-signin">Sign In</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <script>
        // Password toggle functionality
        document.querySelector('.password-toggle').addEventListener('click', function() {
            const passwordInput = this.previousElementSibling;
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
</body>
</html>
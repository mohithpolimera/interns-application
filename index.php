<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Website</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c4/KMRL-logo.png" alt="Logo">
        </div>
        <h1>Kochi Metro Rail Limited</h1>
        <nav>
            <ul class="nav-links">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Section: Design Block -->
        <section class="background-radial-gradient overflow-hidden">
            <style>
                .background-radial-gradient {
                    background-color: hsl(240, 8%, 95%);
                    background-image: radial-gradient(650px circle at 0% 0%,
                        hsl(240, 1%, 87%) 15%,
                        hsl(220, 6%, 90%) 35%,
                        hsl(216, 11%, 91%) 75%,
                        hsl(218, 27%, 94%) 80%,
                        transparent 100%),
                    radial-gradient(1250px circle at 100% 100%,
                        hsl(220, 9%, 94%) 15%,
                        hsl(210, 8%, 90%) 35%,
                        hsl(210, 10%, 92%) 75%,
                        hsl(228, 11%, 91%) 80%,
                        transparent 100%);
                }

                #radius-shape-1 {
                    height: 220px;
                    width: 220px;
                    top: -60px;
                    left: -130px;
                    background: radial-gradient(#44006b, #ad1fff);
                    overflow: hidden;
                }

                #radius-shape-2 {
                    border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                    bottom: -60px;
                    right: -110px;
                    width: 300px;
                    height: 300px;
                    background: radial-gradient(#44006b, #ad1fff);
                    overflow: hidden;
                }

                .bg-glass {
                    background-color: hsla(0, 0%, 100%, 0.9) !important;
                    backdrop-filter: saturate(200%) blur(25px);
                }
            </style>

            <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                <div class="row gx-lg-5 align-items-center mb-0">
                    <div class="col-lg-6 mb-0 mb-lg-0" style="z-index: 10">
                        <h1 class="my-4 display-5 fw-bold ls-tight" style="color:#44006b">
                            <span style="color: #44006b">Main Objective</span>
                        </h1>
                        <p class="mb-0 opacity-70" style="text-align:justify; color: hsl(240, 5%, 4%)">
                            Student training – has been one of the key areas that Kochi Metro (KMRL) as an Organization has always 
                            encouraged & facilitated as it helps the budding professionals to learn the practical aspects of jobs and 
                            also help KMRL to contribute in skill building in State.
                            Kochi Metro aims at fulfilling its role in to enhance skill building by 
                            providing:  
                            Right Exposure of an industrial environment to students pursuing professional courses  
                            Opportunities to learn, understand & sharpen the technical / managerial skills required in any 
                            job.  Exposure to the current technological developments relevant to the subject area of training.  
                            Create conditions conducive to trigger quest for knowledge and its applicability on the job 
                            amongst students.
                        </p>
                    </div>

                    <div class="col-lg-6 mb-0 mb-lg-0 position-relative">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                        <div class="card bg-glass">
                            <div class="card-body px-4 py-4 px-md-5">
                                <h2 class="text-center fw-bold mx-3 mb-4">Sign Up</h2>
                                <form method="post" action="index1.php">
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="name" class="form-control form-control-lg" name="name" placeholder="Your Name" pattern="[a-zA-Z ]{3,}" title="Minimum 3 letters" required/>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="email" id="email" class="form-control form-control-lg" name="email" placeholder="Your Email" required/>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter Password"
                                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}" title="Must contain at least one number, one uppercase and lowercase letter, one special character, and at least 8 or more characters" required>      
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="checkbox" id="togglePassword"> Show Password
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="phonenumber" class="form-control form-control-lg" name="phonenumber" placeholder="Phone Number" pattern="[0-9]{10,}" title="Minimum 10 numbers" required/>
                                    </div>

                                    <!-- Email input -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="institution" class="form-control form-control-lg" name="institution" placeholder="Name of the institution" pattern="[a-zA-Z ]{3,}" title="Minimum 3 letters" required/>
                                    </div>

                                    <!-- Password input -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="course" class="form-control form-control-lg" name="course" placeholder="Course" pattern="[a-zA-Z ]{3,}" title="Minimum 3 letters" required/>
                                    </div>

                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-center mb-3">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" required/>
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                        </label>
                                    </div>

                                    <!-- Submit button -->
                                    <center>
                                        <div class="text-center">
                                            <button type="submit" data-mdb-button-init
                                                    name="submit" data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-0 text-body">Register</button>
                                        </div>
                                    </center>

                                    <!-- Register buttons -->
                                    <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="http://localhost/kmrl_project/index1.php"
                                            class="fw-bold text-body"><u>Login here</u></a></p>
                                </form>

                                <script>
                                    $(document).ready(function() {
                                        $('#togglePassword').on('change', function() {
                                            var passwordField = $('#password');
                                            var fieldType = passwordField.attr('type') === 'password' ? 'text' : 'password';
                                            passwordField.attr('type', fieldType);
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <ul class="footer-links">
            <li><a href="https://www.kochimetro.org/rti/">RTI</a></li>
            <li><a href="https://kochimetro.org/notifications-g-o-s/">NOTIFICATIONS&G.O S</a></li>
            <li><a href="https://kochimetro.org/open-data/">OPEN DATA</a></li>
            <li><a href="https://kochimetro.org/privacy-policy/">Privacy Policy</a></li>
            <li><a href="https://kochimetro.org/newsletters/">NEWSLETTERS</a></li>
            <li><a href="https://kochimetro.org/grievance-redressal/">GRIEVANCE REDRESSAL</a></li>
        </ul>
        <style>
            .icon-spacing {
                margin-right: 20px; /* Adjust as needed */
            }
            .phone-number {
                font-size: 14px; /* Adjust font size as needed */
            }
        </style>
        <p>JLN Metro Station,4th Floor</p>
        <p>Kaloor,Ernakulam-682017</p>
        <a href="https://www.facebook.com/KochiMetroRail/" target="_blank">
            <i class="fa fa-facebook icon-spacing" style="font-size:36px; color:blue;"></i>
        </a>
        <a href="https://x.com/MetroRailKochi/" target="_blank">
            <i class="fa fa-twitter icon-spacing" style="font-size:36px;color:skyblue"></i>
        </a>
        <a href="https://www.linkedin.com/company/metrorailkochi/" target="_blank">
            <i class="fa fa-linkedin icon-spacing" style="font-size:36px;color:darkblue;"></i>
        </a>
        <a href="https://www.youtube.com/KochiMetroRail" target="_blank">
            <i class="fa fa-youtube icon-spacing" style="font-size:36px;color:red"></i>
        </a>
        <a href="https://www.instagram.com/kochimetrorail/" target="_blank">
            <i class="fa fa-instagram icon-spacing" style="font-size:36px;color:lightgreen"></i>
        </a>
        <i class="fa fa-phone icon-spacing" style="font-size:36px;color:green"></i>
        <span class="phone-number">0484-2846700- 09:30 am-5:00 pm</span><br>
        <span class="phone-number">1800 425 0355- Toll Free</span>
        <p>&copy; 2024 Kochi Metro Rail Ltd. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>

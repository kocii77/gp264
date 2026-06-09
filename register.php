<html>
<head>
    <title>Expense Buddy - Register</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background-color: #f0f4f8;
            text-align: center;
            overflow-x: hidden;
        }

        /* LOGO */
        .logo {
            margin-top: 40px;
        }

        .logo img {
            height: 80px;
        }

        /* REGISTER BOX */
        .box {
            width: 300px;
            margin: 30px auto;
            background-color: #2196F3;
            padding: 20px;
            border-radius: 10px;
        }

        .box h2 {
            color: black;
        }

        /* INPUT */
        .input-box {
            margin: 10px 0;
        }

        input {
            width: 100%;
            padding: 10px;
            /* Added box-sizing so inputs don't spill out of the blue box */
            box-sizing: border-box; 
        }

        /* BUTTON */
        button {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background-color: gray;
            border: none;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: darkgray;
        }

        /* ERROR */
        small {
            color: #ffcccc; /* Lightened the red so it's easier to read on blue */
            font-weight: bold;
        }

        .footer-link {
            margin-top: 15px;
        }

        .signup {
            color: white;
            text-decoration: underline;
        }

        @media only screen and (max-width: 600px) {
            .box {
                width: 90%;
            }

            .logo img {
                height: 60px;
            }
        }
    </style>
</head>

<body>

    <div class="logo">
        <img src="img/logo.png" alt="Expense Buddy Logo">
    </div>

    <div class="box">
        <h2>REGISTER ACCOUNT</h2>

        <form method="POST" action="proses_daftar.php" onsubmit="return validateRegister()">

            <div class="input-box">
                <input type="text" id="name" name="nama" placeholder="Name">
                <br><small id="nameError"></small>
            </div>

            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Username">
                <br><small id="usernameError"></small>
            </div>

            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Email">
                <br><small id="emailError"></small>
            </div>

            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password">
                <br><small id="passwordError"></small>
            </div>

            <button type="submit">REGISTER</button>

            <p class="footer-link">Already have an account? 
                <a href="index.php" class="signup">Sign in here</a>
            </p>

        </form>

    </div>

</body>

<script>
function validateRegister() {
    let name = document.getElementById("name").value.trim();
    let username = document.getElementById("username").value.trim(); // Capture Username
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value;

    let valid = true;

    // Reset error messages
    document.getElementById("nameError").innerText = "";
    document.getElementById("usernameError").innerText = ""; // Reset Username error
    document.getElementById("emailError").innerText = "";
    document.getElementById("passwordError").innerText = "";

    // 1. Validate Name
    if (name === "" || !isNaN(name)) {
        document.getElementById("nameError").innerText = "Enter valid name";
        valid = false;
    }

    // 2. NEW: Validate Username (No spaces allowed)
    if (username === "") {
        document.getElementById("usernameError").innerText = "Username is required";
        valid = false;
    } else if (username.includes(" ")) {
        document.getElementById("usernameError").innerText = "Username cannot contain spaces";
        valid = false;
    }

    // 3. Validate Email
    if (email === "") {
        document.getElementById("emailError").innerText = "Email is required";
        valid = false;
    } else if (!email.includes("@")) {
        document.getElementById("emailError").innerText = "Invalid email format";
        valid = false;
    }

    // 4. Validate Password
    if (password === "") {
        document.getElementById("passwordError").innerText = "Password is required";
        valid = false;
    } else if (password.length < 6) {
        document.getElementById("passwordError").innerText = "Min 6 characters";
        valid = false;
    }

    // THE FIX: If valid is true, let the form naturally submit to PHP!
    if (valid) {
        return true; 
    }

    // If valid is false, stop the form from submitting
    return false;
}
</script>

</html>
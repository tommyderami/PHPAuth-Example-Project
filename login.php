<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/spectre.min.css">
    <title>Login Page</title>
</head>
<body>
    <div style="margin: 50px auto; text-align: center;">
        <h2>Login</h2>
        <label>Email:<input id="emailInput" type="email" placeholder="user@email.com"></label><br>
        <label>Password:<input id="passwordInput" type="password" placeholder="password"></label><br>
        <button id="submitBtn" onclick="login()" style="margin-top:20px;">Submit</button><br><br>
        <p>Not a member? <a href="signup.php">Click Here</a> to signup.</p>
    </div>
    <script>
        function login(){
            let email = document.getElementById('emailInput').value;
            let pswd = document.getElementById('passwordInput').value;
            
            let xhr = new XMLHttpRequest();
                xhr.onload = function() {
                    console.log(xhr.responseText);
                }
            let url = `auth-proc.php?mode=1&email=${email}&password=${pswd}`;
            url = encodeURI(url);
            xhr.open("POST", url, true);
            xhr.send();
        }
      
    </script>
</body>
</html>
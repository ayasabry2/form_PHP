<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        .input-group {
            margin-bottom: 20px;
            display: flex;
            
        }
        input {
            margin-top: 10px; 
            margin-left: 70px;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            
        }
    </style>
</head>
<body>
    <form action="server.php" method="post">
        <h1>LOGIN FORM</h1>
        <div class="input-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name"> 
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email"> 
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        <div style="margin-left: 70px;">
        <input type="submit" name="form_type" value="login" style="background-color: green; color: white;">
        </div>
    </form>
</body>
</html>

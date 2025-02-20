<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration</title>
    <style>
        .container {
            display: flex;
            justify-content: space-around; 
            align-items: flex-start; 
            padding: 20px;
        }
        .form-box {
            width: 45%; 
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .input-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        button {
            background-color: green;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 10px;
        }

        table {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
       
        <div class="form-box">
            <h1>Registration Form</h1>
            <form action="server.php" method="post">
                <table>
                    <tbody>
                        <tr>
                            <td><label for="first">First Name</label></td>
                            <td><input id="first" type="text" name="first_name" required></td>
                        </tr>
                        <tr>
                            <td><label for="last">Last Name</label></td>
                            <td><input id="last" type="text" name="last_name" required></td>
                        </tr>
                        <tr>
                            <td><label for="country">Country</label></td>
                            <td>
                                <select id="country" name="country">
                                    <option value="1">Egypt</option>
                                    <option value="2">US</option>
                                    <option value="3">Japan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <label><input type="radio" name="gender" value="male"> Male</label>
                                <label><input type="radio" name="gender" value="female"> Female</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="user">Username</label></td>
                            <td><input id="user" type="text" name="username" required></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password</label></td>
                            <td><input id="password" type="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td><label for="department">Department</label></td>
                            <td><input id="department" type="text" name="department"></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <input type="hidden" name="form_type" value="register">
                                <button type="submit">Register</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>

        <div class="form-box">
            <h1>Login Form</h1>
            <form action="server.php" method="post">
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required> 
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required> 
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <input type="hidden" name="form_type" value="login">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>

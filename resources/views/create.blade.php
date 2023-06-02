<!DOCTYPE html>
<html>
<head>
    <style>
        .add-form {
            margin-bottom: 20px;
            border: black solid 2px;
            width: 400px;
            margin-left:35%;
            margin-top: 80px;
            height: 300px;
            border-radius: 10px;
        }

        .add-form input[type="text"] {
            padding: 5px;
            width: 200px;

        }

        .add-form input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .add-form input{
            margin-left: 80px;

        }
        .add{
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="add-form">

    <form class="add" id="addStudentForm">
        <input type="text" id="nameInput" placeholder="Name" required>
        <br>
        <br>
        <input type="number" id="ageInput" placeholder="Age" required>
        <br>
        <br>
        <input type="text" id="addressInput" placeholder="Address" required>
        <br>
        <br>
        <input type="text" id="telephoneInput" placeholder="Telephone" required>
        <br>
        <br>
        <input  type="submit" value="Thêm" >
    </form>

</div>

</body>
</html>

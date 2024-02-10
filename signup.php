<?php
include "navbar.html";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: orangere;
        }

        .whole-content{
            display: flex;
            justify-content: center;
            background-color: ;
            height: 100%;
            margin-bottom:;
        }
        .whole-form{
            margin-top: 2%;
            border-radius: 10px 10px 10px 10px;
            background-color: #e0e0e0;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            width: 30%;
            height: 100%;
            margin-bottom: %;
        }

        input{
            width: 100%;
            height:25px;
            
        }
        select{
            width: 100%;
            height: 27px;
        }
        label{
            color: #333333;
            text-align: center;
        }
        h1{
            color: #333333;
        }

        .picture{
            height: 30px;
        }
        #submit{
            width: 80%;
            align-items: center;
            display: flex;
            justify-content: center;
            padding-bottom: 3;
        }
        .submit{
            align-items: center;
            display: flex;
            justify-content: center;
            padding-bottom: 25%;
        }

        @media (max-width:600px) {
            .whole-form{
                width: 80%;
            }
        }
        
    </style>

</head>
<body>
    <div class="whole-content">
        <div class="whole-form">
            <h1>Sign up</h1>
            <br>

            <form action="#" method="POST">
                <label for="f_name">Firstname:</label>
                <br>
                <input type="text" id="f_name" name="f_name">
                <br><br>

                <label for="m_name">Middle Name: (Optional)</label>
                <br>
                <input type="text" id="m_name" name="m_name">
                <br><br>

                <label for="l_name">Last Name:</label>
                <br>
                <input type="text" id="l_name" name="l_name">
                <br><br>

                <label for="password">Password:</label>
                <br>
                <input type="password" name="passwords">
                
                <label for="age">Age:</label>
                <br>
                <input type="number" id="age" name="age">
                <br><br>

                <label for="gender">Gender</label>
                <br>
                <select name="gender" id="gender">
                    <option value="">Select Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    <option value="3">other</option>
                </select>
                <br><br>

                <label for="role">Role:</label><br>
                    <select id="role" name="role">
                        <option value="">Select Your Role</option>
                        <option value="admin">Admin</option>
                        <option value="volounteer">Volounteer</option>
                        <option value="orphan">Orphan</option>
                    </select><br><br>   
                    <div id="additionalFields">

                    </div>


                <div class="submit">
                <input type="submit" name="submit" id="submit">
                </div>

            </form>
        </div>
    </div>

    <?php
    
    include "footer.html";
    
    ?>
    <script>
document.getElementById('role').addEventListener('change', function() {
    var role = this.value;
    var additionalFields = document.getElementById('additionalFields');
    
    // Clear existing fields
    additionalFields.innerHTML = '';

    if (role === 'volounteer') {
        additionalFields.innerHTML = `
            <label for="">E-Mail:</label><br>
            <input type="text" id="email" name="email" ><br> <br>
            
            <label for="phonenumber">Phone Number:</label><br>
            <input type="text" id="phonenumber" name="phone_num"><br> <br>

            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address"><br> <br>
        `;
    } else if (role === 'orphan') {
        additionalFields.innerHTML = `

            <label for="">Disability Status:</label>
                <br>
                <select name="" id="">
                    <option value="">Select the disability status</option>
                    <option value="1">Cripple</option>
                    <option value="2">Deaf</option>
                    <option value="">Dumb</option>
                    <option value="">Deaf and Dumb</option>
                </select>
                <br><br>
                <label for="guardian">Guardian's Name:</label>
                <br>
                <input type="text" name="guardian">
                <br><br>

                <label for="guardian">Guardian's Address:</label>
                <br>
                <input type="text" name="guardian-address">
                <br><br>

                <label for="guardian">Guardian's Occupation:</label>
                <br>
                <input type="text" name="guardian-occupation">
                <br><br>

                <label for="guardian">Guardian's Phone Number:</label>
                <br>
                <input type="text" name="guardian-phonenumber">
                <br><br>

                <label for="guardian">Guardian's E-mail:</label>
                <br>
                <input type="email" name="guardian-email">
                <br><br>
        `;
    } else if(role === 'admin'){
            additionalFields.innerHTML = `
            <label for="phonenumber">Phone Number:</label><br>
            <input type="text" id="phonenumber" name="phone_num"><br> <br>

                <label for="">Position (optional):</label>
                <br>
                <input type="text" name="position">
                <br><br>
        `;
        }
});
</script>
</body>
</html>
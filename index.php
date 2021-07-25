<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
     <title>Form</title>
</head>
<body">
     <form action="" method="POST" class="form">
          <div class="input-cont">
               <img src="img/logo.png" alt="" class="logo">
               <span>
                    <label for="firstname">First name</label>
                    <input class="input" id="firstname" type="text" name="firstname" placeholder="First name" required>
               </span>
               <span>
                    <label for="lastname">Last name</label>
                    <input class="input" id="lastname" type="text" name="lastname" placeholder="Last name" required>
               </span>
               <span>
                    <label for="email">Email</label>
                    <input class="input" id="email" type="email" name="email" placeholder="Email" required>
               </span>
               <span>
                    <label for="phonenumber">Phone number</label>
                    <input class="input" id="phonenumber" type="text" name="phonenumber" placeholder="Phone number" required>
               </span>
               <span>
                         <label for="gender">Sex</label>
                         <input class="input" id="gender" type="text" name="gender" placeholder="Sex" required>
               </span>
               <input type="submit" id="register" name="create" value="Submit" class="btn">
          </div>
     </form>
</body>
</html>
git remote add origin https://github.com/gbadamosi11/Registration-form.git
git push -u origin main
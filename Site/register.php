<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng kí</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/public/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="../Asset/css/base.css">
</head>

<body>
  <!-- Content -->

  <div class="mt-2">
    <div class="container mx-auto mt-5 mb-5">
      <div class="mx-auto bg-[#79c0ff] w-[400px] h-[600px] rounded-lg">
        <form action="" class="flex flex-col w-[300px] ml-[50px]" method="POST" enctype="multipart/form-data">
          <h1 class="mt-7 mb-6 text-[24px] text-center font-bold">Đăng ký</h1>
            <div class="mb-4">
              <input type="text" placeholder="Nhập Họ Và Tên" class="pl-2 rounded-lg h-[35px] w-full" name="fullname" required>
              <!-- <span class="errorMsg">Lỗi</span> -->
            </div>

            <div class="mb-4">
              <input type="email" placeholder="Nhập email" class="pl-2 rounded-lg h-[35px]  w-full" name="email" id="Email" required>

            </div>

            <div class="mb-4">
              <input type="password" placeholder="Nhập mật khẩu" class="pl-2 rounded-lg h-[35px] w-full" name="password" id="Pass" required>
              <span class="errorMsg" id="error-2"></span>
              <span class="errorMsg" id="error-3"></span>
            </div>

            <div class="mb-4">
              <input type="password" placeholder="Nhập lại mật khẩu" class="pl-2 rounded-lg h-[35px] w-full" id="ChangePass" required>
              <span class="errorMsg" id="error-3"></span>
              <span class="errorMsg" id="error-4"></span>
            </div>
          <button class="bg-[#D73C3C] text-white text-[20px] w-[100px] h-[30px] rounded-[10px] mx-auto hover:bg-green-500" name="btn_register" onclick="CheckPass()">Đăng ký</button>

          <div class="text-white  text-center mt-5 text-[16px]">
            Bạn đã có tài khoản? <a class="mr-6 text-blue-900 hover:underline hover:text-[#E52323]" href="">Đăng nhập</a>
          </div>
        </form>
      </div>
      <script src="../Asset/js/main.js"></script>
      <!-- <img src="../Asset/img/header/1200px-Nuvola_apps_error.svg.png"> -->
  </div>

  <?php
    if(isset($_POST['btn_register'])){
      $fullname=$_POST['fullname'];
      $email = $_POST["email"];
      $password = $_POST["password"];
      user_insert_register($password,$fullname,$email);
      $VIEW_NAME = 'login.php';
  }
  ?>
</body>
</html>
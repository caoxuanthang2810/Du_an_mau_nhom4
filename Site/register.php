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

</head>

<body>
  <!-- Content -->

  <div class="mt-2">
    <div class="container mx-auto mt-5 mb-5">
      <div class="mx-auto bg-red-400 w-[400px] h-[600px] rounded-lg">
        <form action="" class="flex flex-col w-[300px] text-center ml-[50px] ">
          <h1 class="mt-7 mb-6 text-[24px] font-bold">Đăng ký</h1>
          <input type="text" placeholder="Nhập tên tài khoản" class="pl-2 rounded-lg h-[35px]"><br>
          <input type="email" placeholder="Nhập email" class="pl-2 rounded-lg h-[35px]"><br>
          <input type="password" placeholder="Nhập mật khẩu" class="pl-2 rounded-lg h-[35px]"><br>
          <input type="password" placeholder="Nhập lại mật khẩu" class="pl-2 rounded-lg h-[35px]"><br>
          <button class="bg-[#D73C3C] text-white text-[20px] w-[100px] h-[30px] rounded-[10px] mx-auto hover:bg-green-500">Đăng ký</button>

          <div class="text-white mt-5 text-[16px]">
            Bạn đã có tài khoản? <a class="mr-6 text-blue-700 hover:underline hover:text-[#E52323]" href="">Đăng nhập</a>
          </div>
        </form>
      </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/public/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!-- Content -->

    <div class="mt-2">
        <!-- <img src="../Asset/img/header/banner.jpg" alt="" srcset=""> -->
        <div class="container mx-auto mt-16 mb-16">
            <div class=" mx-auto bg-red-400 w-[400px] h-[350px] rounded-lg">
             <form action="" class="flex flex-col w-[300px] text-center ml-[50px]" method="GET">
                <h1 class="mt-8 mb-6 text-[24px] font-bold">Đăng nhập</h1>
                <input type="text" name="email" placeholder="Tên đăng nhập" class="rounded-lg pl-2 h-[35px]"><br>
                <input type="password" name="password" placeholder="Mật khẩu" class="rounded-lg pl-2 h-[35px]"><br>
                <button class="bg-[#D73C3C] text-white text-[18px] w-[100px] h-[30px] rounded-[10px] mx-auto hover:bg-green-500" type="submit" name="btn_login">Đăng nhập</button>
                <div class="text-white mt-2">
                  Bạn chưa có tài khoản? <a class="mr-4 text-blue-700 hover:underline hover:text-[#E52323]" href="">Đăng kí</a>
                </div>
             </form>
            </div>
        </div>
    </div>
</body>
</html>
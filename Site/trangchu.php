<?php
require_once "./index.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./Asset/css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Content -->

    <div class="mt-2">
        <!-- banner1 -->
        <div class="container mx-auto">
            <div class="w-full mx-auto">
              <img src="../Asset/img/header/banner.jpg" alt="" srcset="">
            </div>
            <!-- Sản phẩm hot -->
            <div class="mt-5 flex w-full">
              <img class="w-[80px] h-[80px]" src="../Asset/img/content/Hot.png" alt="">
              <h2 class="text-4xl text-red-700 font-bold mt-10">Sản phẩm hot</h2>
            </div>
            <!-- sản phẩm -->
            
              <div class="mt-6 grid grid-cols-4 gap-4 bg-gray-300 ">
                <?php foreach($item as $items):?>
                <a href="./index.php?detail&id=<?=$items['id']?>"> <div class="text-center">
                  <img class="w-full h-[300px]" src="<?=$items['image_file']?>" alt="">
                <div class="text-2xl font-normal hover:text-lime-500 "><?=$items['name']?></div>
                <div class="text-red-500 font-bold">
                <?=$items['price']?>
                </div>

               </div></a>
              <!-- <div class="text-center">
                <img class="w-full h-[370px]" src="../Asset/img/content/Ip14.jpg" alt="">
                <a href="" class="text-2xl font-normal  hover:text-lime-500">Iphone 14 pro max</a>
              </div>
              <div class="text-center">
                <img class="w-full h-[370px]" src="../Asset/img/content/Ip14.jpg" alt="">
                <a href="" class="text-2xl font-normal hover:text-lime-500 ">Iphone 14 pro max</a>
              </div>
              <div class="text-center">
                <img class="w-full h-[370px]" src="../Asset/img/content/Ip14.jpg" alt="" >
                <a href="" class="text-2xl font-normal hover:text-lime-500">Iphone 14 pro max</a>
              </div> -->
              <?php endforeach;?>
            </div>

            <!-- banner2 -->
            <div class="mt-6">
              <img class="h-[350px] w-[1980px]" src="../Asset/img/content/Banner2.jpg" alt="">
            </div>
            <!-- Sản phẩm bán chạy -->
            <h1 class="text-4xl text-red-700 font-bold mt-5">Sản phẩm bán chạy</h1>
            <div class="mt-10 bg-gray-300 mb-3">
              
              <div class="mt-6 grid grid-cols-4 gap-4 bg-gray-300 ">
                <?php foreach($pro as $items):?>
              <div class="text-center">
                <a href="./index.php?detail&id=<?=$items['id']?>"><img class="w-full h-[300px]" src="<?=$items['image_file']?>" alt=""></a>
                <a href="" class="text-2xl font-normal hover:text-lime-500 "><?=$items['name']?></a>
                <div class="text-red-500 font-bold">
                <?=$items['price']?>
                </div>
                <!-- <div class="text-center">
                  <img src="../Asset/img/content/Ip14.jpg" alt="">
                  <a href="" class="text-2xl font-normal hover:text-lime-500">Iphone 14 pro max</a>
                  <p class="text-xl text-red-500">45.000.00đ</p>
                  <div class="mt-5 w-[100px] h-[50px] bg-green-400 text-center font-bold  ml-[130px] flex justify-center items-center rounded-xl hover:text-slate-300 hover:bg-red-500"><span class="">Đặt hàng</span></div>
                </div>
                <div class="text-center">
                  <img src="../Asset/img/content/Ip14.jpg" alt="">
                  <a href="" class="text-2xl font-normal hover:text-lime-500 ">Iphone 14 pro max</a>
                  <p class="text-xl text-red-500">45.000.00đ</p>
                  <div class="mt-5 w-[100px] h-[50px] bg-green-400 text-center font-bold  ml-[130px] flex justify-center items-center rounded-xl hover:text-slate-300 hover:bg-red-500"><span class="">Đặt hàng</span></div>
                </div>
                <div class="text-center">
                  <img src="../Asset/img/content/Ip14.jpg" alt="">
                  <a href="" class="text-2xl font-normal hover:text-lime-500 ">Iphone 14 pro max</a>
                  <p class="text-xl text-red-500">45.000.00đ</p>
                  <div class="mt-5 w-[100px] h-[50px] bg-green-400 text-center font-bold  ml-[130px] flex justify-center items-center rounded-xl hover:text-slate-300 hover:bg-red-500"><span class="">Đặt hàng</span></div>
                </div>
                <div class="text-center">
                  <img src="../Asset/img/content/Ip14.jpg" alt="">
                  <a href="" class="text-2xl font-normal hover:text-lime-500 ">Iphone 14 pro max</a>
                  <p class="text-xl text-red-500">45.000.00đ</p>
                  <div class="mt-5 w-[100px] h-[50px] bg-green-400 text-center font-bold  ml-[130px] flex justify-center items-center rounded-xl hover:text-slate-300 hover:bg-red-500"><span class="">Đặt hàng</span></div>
                </div>
                <div class="text-center">
                  <img src="../Asset/img/content/Ip14.jpg" alt="">
                  <a href="" class="text-2xl font-normal hover:text-red-600 hover:text-lime-500 ">Iphone 14 pro max</a>
                  <p class="text-xl text-red-500">45.000.00đ</p>
                  <div class="mt-5 w-[100px] h-[50px] bg-green-400 text-center font-bold  ml-[130px] flex justify-center items-center rounded-xl hover:text-slate-300 hover:bg-red-500"><span class="">Đặt hàng</span></div>
                </div>
                <div class="text-center">
                  <img src="../Asset/img/content/Ip14.jpg" alt="">
                  <a href="" class="text-2xl font-normal hover:text-lime-500 ">Iphone 14 pro max</a>
                  <p class="text-xl text-red-500">45.000.00đ</p>
                  <div class="mt-5 w-[100px] h-[50px] bg-green-400 text-center font-bold  ml-[130px] flex justify-center items-center rounded-xl hover:text-slate-300 hover:bg-red-500 "><span class="">Đặt hàng</span></div>
                </div>
                <div class="text-center">
                  <img src="../Asset/img/content/Ip14.jpg" alt="">
                  <a href="" class="text-2xl font-normal hover:text-lime-500 ">Iphone 14 pro max</a>
                  <p class="text-xl text-red-500">45.000.00đ</p>
                  <div class="mt-5 w-[100px] h-[50px] bg-green-400 text-center font-bold  ml-[130px] flex justify-center items-center rounded-xl hover:text-slate-300 hover:bg-red-500"><span class="">Đặt hàng</span></div>
                </div>
                <div class="text-center">
                  <img src="../Asset/img/content/Ip14.jpg" alt="">
                  <a href="" class="text-2xl font-normal hover:text-lime-500  ">Iphone 14 pro max</a>
                  <p class="text-xl text-red-500">45.000.00đ</p>
                  <div class="mt-5 w-[100px] h-[50px] bg-green-400 text-center font-bold  ml-[130px] flex justify-center items-center rounded-xl hover:text-slate-300 hover:bg-red-500"><span class="">Đặt hàng</span></div>
                </div>            -->
              </div>
              <?php endforeach;?>
            </div>
        </div>
    </div>
</body>
</html>
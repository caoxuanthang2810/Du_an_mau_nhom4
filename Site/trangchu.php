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

      <div class="mt-6 grid grid-cols-4 gap-4 bg-gray-300">
      <?php foreach($items as $item): ?>
      <a href="./index.php?detail&id=<?=$item['id']?>" class="text-center mx-auto mt-3 ">
    <div class="text-center ml-10 bg-white w-60 h-96 rounded-3xl ">
      <img src="../Asset/img/products/<?=$item['image']?>" class="pt-4 m-auto   hover:scale-75 duration-100" alt="">
      <p class="text-xl font-semibold pt-3"><?= $item['name'] ?></p>
      <h5 class="text-xl text-orange-700 pt-2 pb-2  font-bold"><?= $item['price'] ?></h5>
      <button class="text-xl bg-lime-500 text-white w-40 rounded-3xl">Đặt mua</button>
    </div>
    </a>
    <?php endforeach?>

      </div>

      <!-- banner2 -->
      <div class="mt-6">
        <img class="h-[350px] w-[1980px]" src="../Asset/img/content/Banner2.jpg" alt="">
      </div>
      <!-- Sản phẩm bán chạy -->
      <h1 class="text-4xl text-red-700 font-bold mt-5">Sản phẩm bán chạy</h1>
      <div class="mt-10 bg-gray-300 mb-3">

        <div class="mt-6 grid grid-cols-4 gap-4  ">
        <?php foreach($pro as $item): ?>
      <a href="./index.php?detail&id=<?=$item['id']?>" class="text-center mx-auto mt-3 ">
    <div class="text-center ml-10 bg-white w-60 h-96 rounded-3xl ">
      <img src="../Asset/img/products/<?=$item['image']?>" class="pt-4 m-auto   hover:scale-75 duration-100" alt="">
      <p class="text-xl font-semibold pt-3"><?= $item['name'] ?></p>
      <h5 class="text-xl text-orange-700 pt-2 pb-2  font-bold"><?= $item['price'] ?></h5>
      <button class="text-xl bg-lime-500 text-white w-40 rounded-3xl">Đặt mua</button>
    </div>
    </a>
    <?php endforeach?>

        </div>
      </div>
    </div>
</body>

</html>
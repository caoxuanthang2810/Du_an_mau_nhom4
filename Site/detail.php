

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chi tiết sản phẩm</title>
  <link rel="stylesheet" href="">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./Asset/css/base.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div id="content">
    <div class="container mx-auto">
      <!-- id="buy-book" -->
      <div class="grow">
        <!-- Sản phẩm -->
          
        <div class="flex mt-[48px]">
          <div class="mr-6">
            <div class="w-[300px]">
              <img class="w-full h-full" src="../Asset/img/products/<?= $image ?>" alt="Ảnh bị lỗi hoặc chưa có">
            </div>

            <div class="flex mt-6">
              <div class="mr-2">
                Chia sẻ:
              </div>
              <img class="mr-2" src="../Asset/img/footer/Facebook.png" alt="">
              <img class="mr-2" src="../Asset/img/footer/Mess.png" alt="">
              <img class="mr-2" src="../Asset/img/footer/Priterset.png" alt="">
              <img class="mr-2" src="../Asset/img/footer/Twitter.png" alt="">
              <img class="mr-0" src="../Asset/img/footer/Link.png" alt="">
            </div>
          </div>

          <div>
            <!-- Header -->
            <div>
              <div class="flex">
                <span>
                  Hãng điện thoại : <?=$name_cate?>
                </span>
              </div>

              <h1 class="text-[32px]">
                <!-- <?php echo $result["name_product"]?> -->
                <!-- SamSung Galaxy A10s -->
                <?=$name?>
              </h1>
            </div>
            <!-- Body -->
            <div class="flex">
              <!-- left -->
              <div>
                <div class="flex flex-col">
                  <div class="flex items-center justify-evenly bg-[#FAFAFA] w-[500px]">
                    <del class="text-[16px] text-[#bbb]">
                      <!-- <?php echo $result["price_product"]?> vnđ -->
                      <!-- 17.000.000 vnđ -->
                      <?=$price?> vnđ
                    </del>

                    <div class="text-[32px] text-[#E52323]">
                      <!-- <?php echo $result["price_product"]?> vnđ -->
                      <?=$price?> vnđ
                    </div>

                    <div class="ml-3 text-white bg-[#E52323] px-2">
                      -23%
                    </div>
                  </div>

                  <div class="mt-4">
                    <div class="flex mb-[16px] items-center">
                      <div class="mr-6">
                        Màu Sắc
                      </div>

                      <div class="grid grid-cols-3 gap-5 text-[14px]">
                        <div class="border border-[#ccc] w-[88px] h-[35px] flex justify-center items-center">Đỏ</div>
                        <div class="border border-[#ccc] w-[88px] h-[35px] flex justify-center items-center">Xanh</div>
                        <div class="border border-[#ccc] w-[88px] h-[35px] flex justify-center items-center">Vàng</div>
                      </div>
                    </div>
                  </div>

                  <div class="mt-4">
                    <div class="flex mb-[16px] items-center">
                      <div class="mr-6">
                        Dung lượng
                      </div>

                      <div class="grid grid-cols-2 gap-5 text-[14px]">
                        <div class="border border-[#ccc] w-[88px] h-[35px] flex justify-center items-center">6GB/128GB
                        </div>
                        <div class="border border-[#ccc] w-[88px] h-[35px] flex justify-center items-center">8GB/256GB
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="flex flex-col mt-4">
                    <!-- <div class="flex">
                      <p>Số Lượng</p>

                      <div class="flex ml-8">
                        <button class="border border-[#000000]">
                          <img class="p-1" src="../Asset/img/footer/Tru.png" alt="">
                        </button>
                        <input class="border border-[#000000] w-10 text-center" type="text" value="1">

                        <button class="border border-[#000000]">
                          <img class="p-1" src="../Asset/img/footer/Cong.png" alt="">
                        </button>
                      </div>
                    </div> -->

                    <div class="flex min-w-[190px] max-w-[300px] w-[300px] mt-8 justify-between items-center gap-5">
                      <div class="">
                        <a href="">
                          <img class="w-full h-full" src="../Asset/img/footer/Themvaogiohang.png" alt="">
                        </a>
                      </div>
                      <button class="w-[300px] h-[36px] bg-[#FF3945] text-white rounded-[24px] p-1">
                        Chọn Mua
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-6">
          <div class="text-[24px] mb-4">MÔ TẢ SẢN PHẨM</div>
          <p><?=$detail?></p>
        </div>

        <div class="block mt-6">
          <h1 class="text-[24px] py-3">Sản Phẩm Tương Tự</h1>
          <div class="grid grid-cols-4 gap-2">

            <div>
              <a href="../detail/index.html?id=${book.id}">
                <div class="w-[250px] mx-auto">
                  <img class="w-auto max-h-[200px] mx-auto" src='../Asset/img/content/Picture2.png' alt="Image">
                  <div class="text-center">
                    <p class="font-bold">Iphone 14 Pro Max 128GB</p>
                    <p class="text-[#FF424E]">17.000.000 vnđ</p>
                  </div>
                </div>
              </a>  
            </div>

            <div>
              <a href="../detail/index.html?id=${book.id}">
                <div class="w-[250px] mx-auto">
                  <img class="w-auto max-h-[200px] mx-auto" src='../Asset/img/content/Picture2.png' alt="Image">
                  <div class="text-center">
                    <p class="font-bold">Iphone 14 Pro Max 128GB</p>
                    <p class="text-[#FF424E]">17.000.000 vnđ</p>
                  </div>
                </div>
              </a>  
            </div>
            <div>
              <a href="../detail/index.html?id=${book.id}">
                <div class="w-[250px] mx-auto">
                  <img class="w-auto max-h-[200px] mx-auto" src='../Asset/img/content/Picture2.png' alt="Image">
                  <div class="text-center">
                    <p class="font-bold">Iphone 14 Pro Max 128GB</p>
                    <p class="text-[#FF424E]">17.000.000 vnđ</p>
                  </div>
                </div>
              </a>  
            </div>
            <div>
              <a href="../detail/index.html?id=${book.id}">
                <div class="w-[250px] mx-auto">
                  <img class="w-auto max-h-[200px] mx-auto" src='../Asset/img/content/Picture2.png' alt="Image">
                  <div class="text-center">
                    <p class="font-bold">Iphone 14 Pro Max 128GB</p>
                    <p class="text-[#FF424E]">17.000.000 vnđ</p>
                  </div>
                </div>
              </a>  
            </div>
          </div>
        </div>

        <div class="mt-6">
          <div class="text-[24px] mb-4">Bình luận</div>

          <div>
            <div class="border border-[#000] h-[150px]">

            </div>
            
            <form class="flex justify-center mt-3" method="POST">
                <?php
                    include "./index.php";
                    if (isset($_SESSION['email'])) {
                ?>
                    <input type="text" name="content" placeholder="Bình luận..." class="border w-1/2 border-[#000] pl-2 rounded-[25px]">
                <?php
                    }else{
                ?>
                    <input type="text" placeholder="Bạn phải đăng nhập mới được bình luận..." class="border w-1/2 border-[#000] pl-2 rounded-[25px]" disabled>
                <?php
                    }
                ?>
                
                <button class="bg-[#FFB800] w-[100px] h-[50px] ml-6 rounded-[25px]" name="btn_comment">Gứi</button>
            </form>
          </div>

        </div>
      </div>
    </div>
</body>

</html>
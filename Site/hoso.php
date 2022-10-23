<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/public/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    

</head>


<body>
  <!-- Header -->
  <div class="bg-[#E52323]">
    <div class="container mx-auto py-5 flex">
      <div class="flex ml-[110px] md:hidden">
        <button class="mr-2"><i class="ti-search"></i></button>
        <input type="text" placeholder="Bạn đang tìm kiếm gì">
      </div>

      <div class="w-2/12 md:block hidden">
        <img class="w-[200px]" src="img/lgo.png" alt="">
      </div>

      <div class="w-7/12 md:block hidden">
        <div class="">
          <form class="flex" action="">
            <input class="h-12 w-full pl-2" type="text" placeholder="Tìm kiếm sản phẩm...">
            <button class="bg-[#f6b32dd2] text-white h-12 w-56">
              <span class="pr-3">
                <i class="fa-solid fa-magnifying-glass"></i>
              </span>
              Tìm Kiếm
            </button>
          </form>
        </div>
      </div>

      <div class="h-auto w-3/12 pl-3 relative md:block hidden">
        <div class="flex justify-between">
          <div class="flex">
            <div class="pt-2 pr-2">
              <!-- <img class="w-8" src="./images." alt=""> -->
            </div>
            <div class="pt-1">
              <div class="text-[18px] text-white">
                <ul class="flex mt-2 gap-1">
                  <li><a href="./Login.php">Đăng nhập</a></li>
                  /
                  <li><a href="./Register.php">Đăng kí</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="">
            <div class="text-[36px]">
              <a href="">
                <i class="fa-solid fa-cart-shopping"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar -->

  <div class="bg-[#E52323] mt-2">
    <div class="container mx-auto">
      <ul class="flex text-white py-1 justify-between text-2xl font-bold ">
        <li class="hover:underline"><a href="">Trang chủ</a></li >
        <li class="hover:underline"><a href="">Sản phẩm</a></li>
        <li class="hover:underline"><a href="">Giới thiệu</a></li>
        <li class="hover:underline"><a href="">Hỏi đáp</a></li>
      </ul>
    </div>
  </div>
  <div class=" bg-neutral-100 max-w-screen-2xl m-auto   border-2  rounded-lg ">
    <div class="text-center h-20 text-5xl font-bold pt-4  ">
        <h2 class="font-mono " >Hồ Sơ Của Tôi</h2>
    </div>

    <div class="pb-2 text-center">
      <i class="fa-solid fa-user"></i>
        <input  type="text" id="name "   placeholder="Ho-Tên :" class=" border-2 w-[1000px] h-12 rounded-lg hover:border-orange-400 border-2  "  >

    </div>
    <div class="pt-4 text-center">
      <i class="fa-solid fa-phone"></i>
        <input  type="number" id="name "  placeholder="Số điện thoại :"  class=" border-2 w-[1000px] h-12 rounded-lg hover:border-orange-400 border-2   " >

    </div>
    <div class="pt-4 text-center ">
      <i class="fa-solid fa-envelope"></i>
        <input   type=" email" id="name "  placeholder="Email :" class="  w-[1000px] h-12 rounded-lg hover:border-orange-400 border-2  " >

    </div>
    <div class="pt-4 pb-4 text-center">
      <i class="fa-solid fa-location-dot "></i>
        <input  type="text" id="name "  placeholder="Địa chỉ :" class=" border-2 w-[1000px] h-20 rounded-lg hover:border-orange-400 border-2  " >

    </div>
    <div class="text-center pb-4 ">
        <button class="bg-red-500 w-[120px]  h-[40px] text-xl rounded-md text-gray-300 "> <i class="fa-solid fa-paper-plane "></i> Thay đổi </button>
    </div>

  </div>

 


  <!-- Footer -->
  <div class="container mx-auto border-2px-white md:block hidden bg-gray-100   max-w-screen-2xl m-auto ">
    <div class="grid grid-cols-5 gap-3 ml-4 pt-4">
      <div>
        <h1 class="mb-3 text-2xl font-normal ">Hỗ trợ khách hàng</h1>

        <p class="text-xs">
          Hotline: 1900-6035
        </p>
        <p class="text-xs mb-2">
          (1000 đ/phút, 8-21h kể cả T7, CN)
        </p>

        <p class="mb-2 text-xs">
          Các câu hỏi thường gặp
        </p>

        <p class="mb-2 text-xs">
          Gửi yêu cầu hỗ trợ
        </p>

        <p class="mb-2 text-xs">
          Hướng dẫn đặt hàng
        </p>

        <p class="mb-2 text-xs">
          Chính sách đổi trả
        </p>

        <p class="mb-2 text-xs">
          Hướng dẫn trả góp
        </p>

        <p class="mb-2 text-xs">
          Chính sách hàng nhập khẩu
        </p>

        <p class="mb-2 text-xs">
          Hỗ trợ khách hàng: hotro@Modernstore.vn
        </p>

        <p class="mb-2 text-xs">
          Báo lỗi bảo mật: security@Modernstore.vn
        </p>
      </div>
      <div>
        <h1 class="mb-3 text-2xl font-normal">Về Modern store</h1>

        <p class="text-xs mb-2">
          Giới thiệu Modern store
        </p>

        <p class="text-xs mb-2">
          Tuyển dụng
        </p>

        <p class="text-xs mb-2">
          Chính sách bảo mật thanh toán
        </p>

        <p class="text-xs mb-2">
          Chính sách bảo mật thông tin cá nhân
        </p>

        <p class="text-xs mb-2">
          Chính sách giải quyết khiếu nại
        </p>

        <p class="text-xs mb-2">
          Điều khoản sử dụng
        </p>

        <p class="text-xs mb-2">
          Giới thiệu Modern store Xu
        </p>

        <p class="text-xs mb-2">
          Tiếp thị liên kết cùng Modern store
        </p>

        <p class="text-xs mb-2">
          Bán hàng doanh nghiệp
        </p>

        <p class="text-xs mb-2">
          Điều kiện vận chuyển
        </p>
      </div>
      <div>
        <div>
          <h1 class="mb-3 text-2xl font-normal">Hợp tác và liên kết</h1>

          <p class="text-xs mb-2">
            Quy chế hoạt động Sàn GDTMĐT
          </p>

          <p class="text-xs">
            Bán hàng cùng Modern store
          </p>
        </div>

        <div class="mt-6">
          <h1 class="mb-3 text-2xl font-normal">Chứng nhận bởi</h1>

          <div class="flex">
            <img src="img/VanTay.png" alt="">
            <img src="img/DaDangky.png" alt="">
          </div>
        </div>
      </div>
      <div>
        <h1 class="mb-3 text-2xl font-normal">Phương thức thanh toán</h1>

        <div class=" grid grid-cols-5 w-[200px]">
          <img class="mb-3" src="../Asset/img/footer/Tiki.png" alt="">
          <img src="img/viettelpay.png" alt="">
          <img src="img/visa.png" alt="">
          <img src="img/agr.png" alt="">
          <img src="../Asset/img/footer/ATM.png" alt="">
          <img class="mb-3" src="../Asset/img/footer//momo.png" alt="">
          <img src="../Asset/img/footer/Zalopay.png" alt="">
          <img src="../Asset/img/footer/Grap.png" alt="">
          <img src="../Asset/img/footer/VietelPay.png" alt="">
          <img src="../Asset/img/footer/VnPay.png" alt="">
          <img src="../Asset/img/footer/money.png" alt="">
          <img src="../Asset/img/footer/Tragop0phantram.png" alt="">
        </div>

        <div class="mt-11">
          <h1 class="mb-3 text-2xl font-normal">Dịch vụ giao hàng</h1>

          <div>
            <img src="img/tiki.png" class="w-16 h-16" alt="">
          </div>

        </div>
      </div>
      <div>
        <h1 class="mb-3 text-2xl  font-normal">Kết nối với chúng tôi</h1>

        <div class="flex">
          <img src="img/fb.png" class="w-16 h-16" alt="">
          <img src="img/zalo.png" class="w-16 h-16" alt="">
          <img src="img/icon-youtube.png" class="w-16 h-16" alt="">
        </div>

        <div class="mt-7">
          <h1 class="mb-3 text-2xl font-normal">Tải ứng dụng trên điện thoại</h1>

          <div class="flex gap-2 mt-3">
            <img src="img/qr.png" alt="">

            <div>
              <img src="../Asset/img/footer/AppStore.png" alt="" srcset="">
              <img class="mt-2" src="../Asset/img/footer/CHplay.png" alt="" srcset="">
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</body>

</html>
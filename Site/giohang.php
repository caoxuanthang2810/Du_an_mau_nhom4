<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/public/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <img class="w-[200px]" src="../Asset/img/header/Logo.png" alt="">
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
            <ul class="flex text-white py-1 justify-between">
                <li><a href="./trangchu.php">Trang chủ</a></li>
                <li><a href="./danhmuc.php">Sản phẩm</a></li>
                <li><a href="./gioithieu.php">Giới thiệu</a></li>
                <li><a href="./hoidap.php">Hỏi đáp</a></li>
            </ul>
        </div>
    </div>

    <!-- Content -->

    <div class="w-3/4 bg-slate-200 h-[2000px] m-auto mt-10 py-4">
    <div class="text-4xl text-center font-bold ">Giỏ hàng</div>

    <table class="table-auto w-full mt-20">
  <thead class="border-b border-gray-600">
    <tr class="text-left text-xl ">
      <th>Song</th>
      <th>Artist</th>
      <th>Year</th>
      
    </tr>
  </thead>
  
  <tbody class="mt-10">
    <tr>
      <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
      <td>Malcolm Lockyer</td>
      <td>1961</td>
    </tr>
    <tr>
      <td>Witchy Woman</td>
      <td>The Eagles</td>
      <td>1972</td>
    </tr>
    <tr>
      <td>Shining Star</td>
      <td>Earth, Wind, and Fire</td>
      <td>1975</td>
    </tr>
  </tbody>
</table>

    </div>
 <!-- Footer -->
 <div class="container mx-auto py-4 border-2px-white md:block hidden">
    <div class="grid grid-cols-5 gap-3">
      <div>
        <h1 class="mb-3 text-base font-normal">Hỗ trợ khách hàng</h1>

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
        <h1 class="mb-3 text-base font-normal">Về Modern store</h1>

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
          <h1 class="mb-3 text-base font-normal">Hợp tác và liên kết</h1>

          <p class="text-xs mb-2">
            Quy chế hoạt động Sàn GDTMĐT
          </p>

          <p class="text-xs">
            Bán hàng cùng Modern store
          </p>
        </div>

        <div class="mt-6">
          <h1 class="mb-3 text-base font-normal">Chứng nhận bởi</h1>

          <div class="flex">
            <img src="../Asset/img/footer/VanTay.png" alt="">
            <img src="../Asset/img/footer/DaDangky.png" alt="">
          </div>
        </div>
      </div>
      <div>
        <h1 class="mb-3 text-base font-normal">Phương thức thanh toán</h1>

        <div class=" grid grid-cols-5 w-[200px]">
          <img class="mb-3" src="../Asset/img/footer/Tiki.png" alt="">
          <img src="../Asset/img/footer/Visa.png" alt="">
          <img src="../Asset/img/footer/Card.png" alt="">
          <img src="../Asset/img/footer/Jcb.png" alt="">
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
          <h1 class="mb-3 text-base font-normal">Dịch vụ giao hàng</h1>

          <div>
            <img src="../Asset/img/footer/Modern storenow.png" alt="">
          </div>

        </div>
      </div>
      <div>
        <h1 class="mb-3 text-base font-normal">Kết nối với chúng tôi</h1>

        <div class="flex">
          <img src="../Asset/img/footer/Facebook.png" alt="">
          <img class="px-2" src="../Asset/img/footer/Youtube.png" alt="">
          <img src="../Asset/img/footer/Zalo.png" alt="">
        </div>

        <div class="mt-7">
          <h1 class="mb-3 text-base font-normal">Tải ứng dụng trên điện thoại</h1>

          <div class="flex gap-2 mt-3">
            <img src="../Asset/img/footer/QRCode.png" alt="">

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
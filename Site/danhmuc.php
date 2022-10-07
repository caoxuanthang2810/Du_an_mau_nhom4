<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <link rel="stylesheet" href="">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./Asset/css/base.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>


</style>

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
        <li><a href="./trangchu.php" class="">Trang chủ</a></li>
        <li><a href="./danhmuc.php" class="">Sản phẩm</a></li>
        <li><a href="./gioithieu.php" class="">Giới thiệu</a></li>
        <li><a href="./hoidap.php" class="">Hỏi đáp</a></li>
      </ul>
    </div>
  </div>

  <!-- Content -->

  <div class="mt-2">

    <img src="../Asset/img/header/banner.jpg" alt="" class="m-auto max-w-screen-2xl" srcset="">

    <div class="container mx-auto">
      <div class="w-full mx-auto">
      </div>
    </div>
  </div>
  <div class="text-2xl h-80 bg-red-50 max-w-screen-2xl m-auto ">
    <h1 class="text-neutral-500 border-b-2 border-black ">Danh mục :</h1>

    <div class=" flex justify-between ml-28 mr-28 pt-4 font-sans ">
      <div class=" w-60 h-60  hover:border-2   bg-slate-50  rounded-2xl  ">
        <img src="../Asset/img/content/637985700630020572_ip-14-pro-max-tim.webp "class="w-52 h-52 m-auto pt-2 "  alt="">
        <div class=" pt-3">

          <p class="m-auto text-center text-xl  font-bold  text-2xl font-bold w-28  rounded-md h-10 bg-yellow-100  border-2 border-black">iPhone </p>
        </div>

      </div>

      <div class=" w-60 h-60  hover:border-2   bg-slate-50  rounded-2xl ">
        <img src="../Asset/img/content/teco.png" class="w-52 h-52 m-auto pt-2 "  alt="">
        <div class="pt-2">
          <p class="m-auto text-center text-xl  font-bold  text-2xl font-bold w-28  rounded-md h-10 bg-yellow-100  border-2 border-black">
            OPPO </p>
        </div>
      </div>

      <div class="  w-60 h-60  hover:border-2   bg-slate-50  rounded-2xl ">
        <img src="../Asset/img/content/oppo-reno7-z-(2).jpg"  class="w-52 h-52 m-auto pt-2 " alt="">
        <div class="pt-2">
          <p class="m-auto text-center text-xl  font-bold  text-2xl font-bold w-28  rounded-md h-10 bg-yellow-100  border-2 border-black ">
            NOKIA </p>
        </div>

      </div>

      <div class=" w-60 h-60  hover:border-2   bg-slate-50  rounded-2xl">
        <img src="../Asset/img/content/pocco.jpg" class="w-52 h-52 m-auto pt-2 " alt="">
        <div class="pt-2">
          <p class="m-auto text-center text-xl  font-bold  text-2xl font-bold w-28  rounded-md h-10 bg-yellow-100  border-2 border-black">
            README </p>
        </div>

      </div>

      <div class=" w-60 h-60  hover:border-2   bg-slate-50  rounded-2xl">
        <img src="../Asset/img/content/a4.jpg" class="w-52 h-52 m-auto pt-2 " alt="">
        <div class="pt-2">
          <p class="m-auto text-center text-xl  font-bold  text-2xl font-bold w-28  rounded-md h-10 bg-yellow-100  border-2 border-black">
            SAM SUNG </p>
        </div>

      </div>



    </div>


  </div>


  <div class="text-2xl h-80 bg-red-50 max-w-screen-2xl m-auto border-b-2  border-t-2 border-black font-sans  ">


    <div class=" flex justify-between ml-28 mr-28 pt-4 ">
      <div class=" w-60 h-60  hover:border-2   bg-slate-50  rounded-2xl   ">
        <img src="../Asset/img/content/sony-xperia-5-plus-600x600-1-600x600.jpg" class="w-52 h-52 m-auto pt-2 " alt="">
        <div class="pt-2">
          <p class="m-auto text-center text-xl  font-bold  text-2xl font-bold w-28  rounded-md h-10 bg-yellow-100  border-2 border-black ">
            SONY</p>
        </div>

      </div>

      <div class=" w-60 h-60  hover:border-2   bg-slate-50  rounded-2xl  ">
        <img src="../Asset/img/content/xiaomi-poco-c3-085320-015320-600x600.jpg"  class="w-52 h-52 m-auto pt-2 " alt="">

        <div class="pt-2">
          <p class="m-auto text-center text-xl  font-bold  text-2xl font-bold w-28  rounded-md h-10 bg-yellow-100  border-2 border-black">
            XIAOMI </p>
        </div>

      </div>

      <div class="  w-60 h-60  hover:border-2   bg-slate-50  rounded-2xl ">
        <img src="../Asset/img/content/z3773077180047_97aae459f1c759744608f2fd7d0471c2.jpg"class="w-52 h-52 m-auto pt-2 " alt="">

        <div class="pt-2">
          <p class="m-auto text-center text-xl  font-bold  text-2xl font-bold w-28  rounded-md h-10 bg-yellow-100  border-2 border-black">
            TECNO</p>
        </div>

      </div>

      <div class=" w-60 h-60  hover:border-2   bg-slate-50  rounded-2xl ">
        <img src="../Asset/img/content/Nubia-Z20-5.jpg" class="w-52 h-52 m-auto pt-2 " alt="">

        <div class="pt-2">
          <p class="m-auto text-center text-xl  font-bold  text-2xl font-bold w-28  rounded-md h-10 bg-yellow-100  border-2 border-black">
            NUBIA </p>
        </div>

      </div>

      <div class="  w-60 h-60  hover:border-2   bg-slate-50  rounded-2xl ">
        <img src="../Asset/img/content/vivo_v23_03.jpg " class="w-52 h-52 m-auto pt-2 " alt="">
        <div class="pt-2">
          <p class="m-auto text-center text-xl  font-bold  text-2xl font-bold w-28  rounded-md h-10 bg-yellow-100  border-2 border-black ">
            VIVO</p>
        </div>

      </div>



    </div>


  </div>

  <div class="">
    <h1 class="text-4xl text-center font-black font-mono bg-yellow-300 max-w-screen-2xl m-auto "> SẢN PHẨM DÀNH RIÊNG
      CHO BẠN </h1>

  </div>
  <!--điện thoại-->
  <div class=" flex justify-between  h-4/5 bg-red-400 pt-8  max-w-screen-2xl m-auto ">
    <div class="text-center ml-10 bg-white w-60 h-96 rounded-3xl ">
      <img src="../Asset/img/content/637985700630020572_ip-14-pro-max-tim.webp" class="pt-4 m-auto   hover:scale-75" alt="">
      <p class="text-xl font-semibold pt-3">SAM SUNG A-20</p>
      <h5 class="text-xl text-orange-700 pt-2 pb-2  font-bold">21.000.000</h5>
      <button class="text-xl bg-lime-500 text-white w-40 rounded-3xl">Đặt mua</button>
    </div>

    <div class="text-center bg-white w-60 rounded-3xl">
      <img src="../Asset/img/content/637985700630020572_ip-14-pro-max-tim.webp" class="pt-4 m-auto  hover:scale-75" alt="">
      <p class="text-xl font-semibold pt-3">iPhone 14 Pro Max</p>
      <h5 class="text-xl text-orange-700 pt-2 pb-2 font-bold">40.000.000</h5>
      <button class="text-xl bg-lime-500 text-white w-40 rounded-3xl">Đặt mua</button>
    </div>

    <div class="text-center bg-white w-60 rounded-3xl">
      <img src="../Asset/img/content/637985700630020572_ip-14-pro-max-tim.webp" class="pt-4 m-auto  hover:scale-75" alt="">
      <p class="text-xl font-semibold pt-3">iPhone 14 Pro Max</p>
      <h5 class="text-xl text-orange-700 pt-2 pb-2 font-bold">40.000.000</h5>
      <button class="text-xl bg-lime-500 text-white w-40 rounded-3xl">Đặt mua</button>
    </div>

    <div class="text-center mr-10 bg-white w-60 rounded-3xl">
      <img src="../Asset/img/content/637985700630020572_ip-14-pro-max-tim.webp" class="pt-4 m-auto  hover:scale-75 " alt="">
      <p class="text-xl font-semibold pt-3">iPhone 14 Pro Max</p>
      <h5 class="text-xl text-orange-700 pt-2 pb-2 font-bold">40.000.000</h5>
      <button class="text-xl bg-lime-500 text-white w-40 rounded-3xl">Đặt mua</button>
    </div>

  </div>

  <div class=" flex justify-between h-4/5 bg-red-400 pt-8 pb-8  max-w-screen-2xl m-auto">
    <div class="text-center ml-10 bg-white w-60 h-96 rounded-3xl">
      <img src="../Asset/img/content/637985700630020572_ip-14-pro-max-tim.webp" class="pt-4 pt-4 m-auto  hover:scale-75 " alt="">
      <p class="text-xl font-semibold pt-3">iPhone 14 Pro </p>
      <h5 class="text-xl text-orange-700 pt-2 pb-2 font-bold">30.000.000</h5>
      <button class="text-xl bg-lime-500 text-white w-40 rounded-3xl">Đặt mua</button>
    </div>

    <div class="text-center bg-white w-60 rounded-3xl ">
      <img src="../Asset/img/content/637985700630020572_ip-14-pro-max-tim.webp" class="pt-4 m-auto  hover:scale-75" alt="">
      <p class="text-xl font-semibold pt-3">iPhone 14 Pro </p>
      <h5 class="text-xl text-orange-700 pt-2 pb-2 font-bold">30.000.000</h5>
      <button class="text-xl bg-lime-500 text-white w-40 rounded-3xl">Đặt mua</button>
    </div>

    <div class="text-center bg-white w-60 rounded-3xl">
      <img src="../Asset/img/content/637985700630020572_ip-14-pro-max-tim.webp" class="pt-4 pt-4 m-auto  hover:scale-75" alt="">
      <p class="text-xl font-semibold pt-3">iPhone 14 Pro </p>
      <h5 class="text-xl text-orange-700 pt-2 pb-2 font-bold">30.000.000</h5>
      <button class="text-xl bg-lime-500 text-white w-40 rounded-3xl">Đặt mua</button>
    </div>

    <div class="text-center mr-10 bg-white w-60 rounded-3xl">
      <img src="../Asset/img/content/637985700630020572_ip-14-pro-max-tim.webp " class="pt-4  pt-4 m-auto  hover:scale-75" alt="">
      <p class="text-xl font-semibold pt-3">iPhone 14 Pro Max</p>
      <h5 class="text-xl text-orange-700 pt-2 pb-2 font-bold">30.000.000</h5>
      <button class="text-xl bg-lime-500 text-white w-40 rounded-3xl">Đặt mua</button>
    </div>







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
    
            <div class="flex grid grid-cols-5 w-[200px]">
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
                <img src="../Asset/img/footer/Tikinow.png" alt="">
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
    
        <div class="mt-9 py-4">
          <p class="mb-2">Trụ sở chính: Tòa nhà Viettel, Số 285, đường Cách Mạng Tháng 8, phường 12, quận 10, Thành phố Hồ
            Chí Minh</p>
    
          <p class="mb-2">Modern store nhận đặt hàng trực tuyến và giao hàng tận nơi, chưa hỗ trợ mua và nhận hàng trực tiếp tại văn
            phòng hoặc trung tâm xử lý đơn hàng</p>
    
          <p class="mb-2">Giấy chứng nhận Đăng ký Kinh doanh số 0309532909 do Sở Kế hoạch và Đầu tư Thành phố Hồ Chí Minh
            cấp lần đầu ngày 06/01/2010 và sửa đổi lần thứ 23 ngày 14/02/2022</p>
    
          <p class="mb-0">© 2022 - Bản quyền của Công ty TNHH Modern store</p>
        </div>
      </div>
</body>

</html>
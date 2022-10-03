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
<style>
  .a {
    display: grid;
    grid-template-columns: 1fr;
  }
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
        <li class=""><a href="./trangchu.php">Trang chủ</a></li >
        <li class=""><a href="./danhmuc.php">Sản phẩm</a></li>
        <li class=""><a href="./gioithieu.php">Giới thiệu</a></li>
        <li class=""><a href="./hoidap.php">Hỏi đáp</a></li>
      </ul>
    </div>
  </div>

  <!-- Content -->
  <div class="max-w-screen-2xl m-auto h-[1800px]">
    <div class="">
      <h1 class="text-center  text-5xl font-bold  pt-4">HỆ THỐNG PHÂN PHỐI SẢN PHẨM CHÍNH HÃNG</h1>
      <p class="text-xl font-bold pt-4">Công ty TNHH MODERN-STORE – là nhà bán lẻ hàng đầu, chuyên cung cấp các sản phẩm công
        nghệ lớn chính hãng từ các thương hiệu lớn như Apple, Samsung. MODERN-STORE được thành lập vào năm 2010 dựa trên
        tầm nhìn “Những gì chúng tôi có, chắc chắn bạn sẽ cần”. Chúng tôi đã, đang và sẽ tiếp tục nỗ lực trên con đường
        mang đến những giá trị, những mặt hàng công nghệ với mức giá tốt nhất để phục vụ tất cả quý khách hàng.<br>
        Sau 12 năm phát triển,Modern-store đã không còn xa lạ gì đối với người dùng ở 2 TP lớn Hà Nội và TP-HCM với 3
        chi nhánh tại những vị trí đắc địa, cửa hàng lớn và sang trọng tầm cỡ. Đến với chuỗi cửa hàng của Táo Zin, quý
        khách hàng có thể hoàn toàn yên tâm về chất lượng sản phẩm, chế độ bảo hành và mức giá tốt nhất thị trường. Đồng
        thời, chúng tôi luôn nỗ lực nâng cấp chất lượng dịch vụ để mang đến cho khách hàng những trải nghiệm tuyệt vời
        nhất.
      </p>
      <div>
        <img src="img/icon.png " class="w-24 h-24 " alt="">
      </div>
      <h2 class="text-2xl font-bold ">12 năm thành lập</h2>
      <p class="text-xl">Modern-store được thành lập từ năm 2010. Trải qua 12 năm phát triển với nhiều thành quả đáng
        ghi nhận. Hứa hẹn sẽ tiếp tục phát
        triển mạnh mẽ trở thành chuỗi hệ thống điện thoại di động mạnh TOP ở Việt Nam.</p>
    </div>

    <div>
      <img src="img/icon.png " class="w-24 h-24 " alt="">
    </div>
    <h2 class="text-2xl font-bold">Chuỗi 3 chi nhánh điện thoại di động</h2>
    <p class="text-xl">Sau 3 năm hoạt động, TMODERN-STORE không ngừng cố gắng và nỗ lực để phục vụ khách hàng.
      Tổng cộng đã mở được 3 chi nhánh bao gồm: 2 chi nhánh ở TP. HCM và 1 chi nhanh ở HÀ NỘI.</p>


    <div>
      <img src="img/icon.png " class="w-24 h-24 " alt="">
    </div>
    <h2 class="text-2xl font-bold">Tập thể hơn 40 nhân viên</h2>
    <p class="text-xl">Chúng tôi luôn trân trọng và biết ơn những nhân viên đã cùng MODERN-STORE trải qua những năm
      tháng thăng trầm để gầy dựng nên một chuỗi cửa hàng hùng mạnh ngày hôm nay..</p>

    <div>
      <img src="img/icon.png " class="w-24 h-24 " alt="">
    </div>
    <h2 class="text-2xl font-bold">TMODERN-STORE được khách hàng biết đến rất nhiều vì phong cách phục vụ tận tình, chất
      lượng sản phẩm tốt,
      chế độ hậu mãi hấp dẫn và đặc biệt chế độ bảo hành an tâm cho người dùng.</p>

      <h2 class="text-2xl font-bold pt-4">Tôn chỉ hoạt động</h2>
      <p class="text-xl ">
        MODERN-STORE luôn hoạt động với phương châm “Tất cả vì khách hàng”, luôn cố gắng và nỗ lực mang đến những sản
        phẩm và dịch vụ tốt nhất đến cho khách hàng hài lòng nhất.MODERN-STORE đã, đang và sẽ xây dựng dịch vụ khách
        hàng, chất lượng dịch vụ tốt nhất để không phụ lòng tin của quý khách hàng.

        Với khách hàng, chúng tôi làm việc dựa trên trách nhiệm và tinh thần tập trung cao nhất,
        Với đội ngũ nhân viên, chúng tôi đề cao tinh thần tự giác học hỏi, đoàn kết, luôn hỗ trợ nhau trong công việc,
        môi trường làm việc thân thiện, văn hóa công ty luôn được đặt lên hàng đầu.

        Với đối tác, MODERN-STORE luôn làm việc nghiêm túc, chân thực, hợp tác đôi bên cùng có lợi, tạo ra giá trị cho
        cộng đồng phát triển bền vững.
      </p>

      <h2 class="text-2xl font-bold pt-4">TẦM NHÌN SỨ MỆNH</h2>
      <p class="text-xl ">
        Xuyên suốt 12 năm hoạt động, MODERN-STORE luôn mang đến khách hàng những sản phẩm dịch vụ tốt nhất thông qua các
        chi nhánh và các kênh online. Chúng tôi cam kết sẽ mang đến sản phẩm và dịch vụ tốt nhất tới tay khách hàng, hỗ
        trợ bảo hành trong thời gian sớm nhất có thể.
        MODERN-STORE sẽ hướng đến các mục tiêu cao cả hơn. Cụ thể, chúng tôi sẽ tiếp tục mở rộng các chi nhánh ra các
        thành phố lớn, mở rộng các kênh online để khách hàng có thể mua được những sản phẩm dịch vụ tốt nhất ở mọi nơi
        trên đất nước. Quan trọng vẫn là nâng cấp dịch vụ, chất lượng phục vụ, hạn chế rủi ro nhất có thể, quan tâm và
        lắng nghe ý kiến phản hồi của khách hàng mỗi ngày để mang đến trải nghiệm mua sắm hoàn hảo nhất tại Táo Zin .
      </p>

      <h2 class="text-3xl font-bold pt-4 ">MÔI TRƯỜNG LÀM VIỆC</h2>
      <p class="text-xl ">
        Hiện tại, chúng có đội ngũ hơn 40 nhân viên hoạt động tại các chi nhánh ở 2 thành phố lớnTP-HCM và HÀ
        NỘI.
        Khi tham gia vào hàng ngũ của MODERN-STORE , bạn sẽ được tận hưởng môi trường làm việc thân thiện, đoàn kết và tương
        trợ lẫn nhau.
        Được hưởng những chế độ ưu đãi về mức lương, hệ thống KPI kích thích nỗ lực làm việc, cơ sở hạ tầng hiện đại.
      </p>
      <h2 class="text-3xl font-bold pt-4 ">VĂN HÓA CÔNG TY</h2>
      <p class="text-xl ">Chúng tôi không những có đội ngũ nhân viên vô cùng nhiệt huyết với công ty mà họ còn có chung
        tầm nhìn: Đó là không ngừng đeo đuổi sự hoàn hảo. Chúng tôi không bao giờ sợ hãi khi đưa ra những khái niệm mới
        dám phá vỡ truyền thống. Với tinh thần và khát vọng cống hiến, kết hợp với sự hỗ trợ của các quý khách hàng
        trung thành của MODERN-STORE 
        , chúng tôi sẽ đem đến những sản phẩm với mức giá tốt nhất thị trường đến tay khách hàng.</p>

      <h1 class="text-2xl font-bold pt-4">MODERN-STORE - HỆ THỐNG TOÀN QUỐC</h1>
      <h1 class="pt-2">Chi nhánh Hà Nội: 96-Cầu Diễn</h1>
      <h1>Chi nhành TP-HCM : 12/87-QUẬN 1</h1>
      <H2 class="text-2xl font-bold pt-2">Hotline: 0258.628.7777</H2>


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
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
  <div class=" bg-neutral-100 max-w-screen-2xl m-auto border-2 my-[24px] rounded-lg ">
    <div class="text-center h-20 text-5xl font-bold pt-4  ">
        <h2 class="font-mono " >Hồ Sơ Của Tôi</h2>
    </div>

    <div class="pb-2 text-center">
      <i class="fa-solid fa-user text-[24px] mr-3"></i>
        <input  type="text" id="name " placeholder="Ho-Tên :" class=" border-2 w-[1000px] h-12 rounded-lg hover:border-orange-400 border-2 pl-2"  >

    </div>
    <div class="pt-4 text-center">
      <i class="fa-solid fa-phone text-[24px] mr-3"></i>
        <input  type="number" id="name " placeholder="Số điện thoại :"  class=" border-2 w-[1000px] h-12 rounded-lg hover:border-orange-400 border-2 pl-2" >

    </div>
    <div class="pt-4 text-center ">
      <i class="fa-solid fa-envelope text-[24px] mr-3"></i>
        <input   type=" email" id="name " placeholder="Email :" class="w-[1000px] h-12 rounded-lg hover:border-orange-400 border-2 pl-2" >

    </div>
    <div class="pt-4 pb-4 text-center">
      <i class="fa-solid fa-location-dot text-[24px] mr-3"></i>
        <input  type="text" id="name " placeholder="Địa chỉ :" class=" border-2 w-[1000px] h-20 rounded-lg hover:border-orange-400 border-2 pl-2" >

    </div>
    <div class="text-center pb-4">
        <button class="bg-red-500 w-[120px]  h-[40px] text-xl rounded-md text-white hover:bg-[#08ee33] hover:text-[#000]"> <i class="fa-solid fa-paper-plane"></i> Thay đổi </button>
    </div>
  </div>  
</body>

</html>
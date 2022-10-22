<?php
require_once "../../Admin/products/index.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Thêm Mới Sản Phẩm</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 class="text-center text-[36px] font-bold mb-6 mt-4">Thêm sản phẩm</h1>
    <div class="flex items-center justify-center">
        <form action="" class="w-[600px] rounded-[10px] border border-[#000] p-4 shadow shadow-[#000]" method="POST" enctype="multipart/form-data">
            <div class="">
                <div class="font-bold mb-3 text-[18px]">Tên sản phẩm</div>
                <input type="text" name="name" class="border pl-2 border-[#000] h-[40px] w-[75%] rounded-[10px]">
            </div>

            <div class="pt-5">
                <div class="font-bold mb-3 text-[18px]">Ảnh sản phẩm</div>
                <input type="file" name="image">
            </div>

            <div class="pt-5">
                <div class="font-bold mb-3 text-[18px]">Giá sản phẩm</div>
                <input type="number" name="price" class="border pl-2 border-[#000] h-[40px] w-[25%] rounded-[10px]">
            </div>

            <div class="pt-5 ">
                <div class="font-bold mb-3 text-[18px]">Mô tả sản phẩm</div>
                <!-- <input type="text" name="detail" class="border pl-2 border-[#000] h-[40px] w-[90%]"> -->
                <textarea name="detail" id="" class="border pl-2 border-[#000] h-[100px] w-[90%]"></textarea>
            </div>

            <div class="pt-5">
                <div class="font-bold mb-3 text-[18px]">Trạng thái</div>
                <input type="number" name="bit_active" class="border pl-2 border-[#000] h-[40px] w-[25%] rounded-[10px]">
            </div>

            <div class="pt-5">
                <div class="font-bold mb-3 text-[18px]">Loại Màu</div>
                <input type="number" name="color" class="border pl-2 border-[#000] h-[40px] w-[25%] rounded-[10px]">
            </div>

            <div class="pt-5">
                <div class="font-bold mb-3 text-[18px]">Dung lượng</div>
                <input type="number" name="capacity" class="border pl-2 border-[#000] h-[40px] w-[25%] rounded-[10px]">
            </div>

            <div class="pt-5">
                <div class="font-bold mb-3 text-[18px]">Loại điện thoại</div>
                <input type="number" name="id_categories" class="border pl-2 border-[#000] h-[40px] w-[25%] rounded-[10px]">
            </div>

            <div class="pt-5 flex justify-center">
                <button type="submit" class="bg-[#000] text-white w-[200px] text-[20px] h-[40px] hover:bg-red-500" name="btn_insert">Thêm mới</button>
            </div>
        </form>
    </div>
</body>

</html>
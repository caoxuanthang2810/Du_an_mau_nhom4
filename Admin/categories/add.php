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
        <form action="" class="" method="POST" enctype="multipart/form-data">
            <div class="">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="name" class="ml-3 border border-[#000] h-[40px] w-[300px]">
            </div>

            <div class="pt-5">
                <label for="">Ảnh sản phẩm</label>
                <input type="file" name="image">
            </div>

            <div class="pt-5">
                <label for="">Giá sản phẩm</label>
                <input type="number" name="price" class="border border-[#000] ml-3 h-[40px] w-[300px]">
            </div>

            <div class="pt-5 ">
            <label for="">Mô tả sản phẩm</label>
            <input type="text" name="detail" class="border border-[#000] h-[40px] w-[300px]">
            </div>

            <div class="pt-5">
                <label for="">Trạng thái</label>
                <select name="bit_active" id=""></select>
            </div>

            <div class="pt-5">
                <label for="">Mã màu</label>
                <select name="id_color" id=""></select>
            </div>

            <div class="pt-5">
                <label for="">Mã dung lượng</label>
                <select name="id_capacity" id=""></select>
            </div>

            <div class="pt-5">
                <label for="">Mã loại</label>
                <select name="id_categories" id=""></select>
            </div>

            <div class="pt-5 flex justify-center">
                <button type="submit" class="bg-green-700 text-white w-[100px] text-[20px] h-[40px] hover:bg-red-500" name="btn_insert">Thêm mới</button>
            </div>
        </form>
    </div>
</body>
</html>
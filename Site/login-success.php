<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="pt-1">
  <div class="text-[16px] text-white">
    Tài khoản
  </div>
  <span class="text-sm text-white font-bold">
    <?php echo $_SESSION['email']?>
  </span>
  <div class="font-bold">
    <a class="hover:text-[#000] hover:underline" href="../logout.php">Đăng xuất</a>
  </div>
</div>
</body>
</html>
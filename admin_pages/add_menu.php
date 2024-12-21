<?php  

require('../db_connection.php');

if (isset ($_GET['id_menu'])){$id = $_GET['id_menu'];};


if (isset ($_POST['submit'])){

  $menu_name = $_POST['menu_name'];
  $Menu_description = $_POST['Menu_description'];
  $firstDish = $_POST['firstDish'];
  $secondDish = $_POST['secondDish'];
  $finalDish = $_POST['finalDish'];
 

  $query = mysqli_query($conn, "INSERT INTO menu (menu_name, menu_description,id_reserve_fk, entree, main ,sortie) VALUES ('$menu_name', '$Menu_description','$id_reserve_fk', '$firstDish', '$secondDish' ,'$finalDish')");

  if($query) {
    header("Location: index.php  ");
  }else{
    echo "<script>alert('There is an error ');</script>";
  }

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AFRINOVA</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>


<body>



<nav class="bg-[#FAF5EF] border-black">
    <div class="flex flex-wrap px-12 justify-between items-center mx-auto max-w-screen-xl ">
        <a href="#" class="flex items-center  space-x-3 rtl:space-x-reverse">
            <img class=" h-[60px] w-[120px]" src="../img/DishUP.png" class="h-8" alt="Logo" />
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
           
            <div class="flex gap-4 items-center">
            <a href="dashboard.php" class="text-sm bg-[#14452B] rounded-sm border-2 border-[#14452B]    text-white px-4 py-2 hover:bg-white hover:text-[#14452B] transform duration-300">Dashboard</a>
            <a href="../login.php" class="text-sm bg-transparent rounded-sm border-2 border-[#14452B]    text-14452B px-4 py-2 hover:bg-[#14452B] hover:text-white transform duration-300">Login Page</a>

            </div>
           
        </div>
    </div>
</nav>
<nav class="bg-[#14452B]">
    <div class="max-w-screen-xl px-12 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline " aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">Company</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">Team</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                </li>
            </ul>
        </div>
    </div>
</nav>




  <section class="pb-20 bg-[url('../img/hero_bg2.jpg')] bg-cover bg-center h-auto  p-8">
    <form class="flex flex-col gap-4  mx-auto w-full md:w-1/2 bg-[#FAF5EF] p-8  rounded shadow-xl shadow-white/40" method="POST">
      <label for="menu-name" class="font-semibold">Menu Name:</label>
      <input type="text" name="menu_name" id="menu_name" class="p-2 border border-green-900 rounded" placeholder="Enter menu name">

      <label for="Menu-description" class="font-semibold">Menu Description:</label>
      <textarea type="text" rows="4" name="Menu_description" id="Menu_description" class="p-2 border border-green-900 rounded " placeholder="Enter menu description "></textarea>

      <label for="Start-Dish" class="font-semibold">Start Dish description:</label>
      <textarea type="text" rows="3" name="firstDish" id="firstDish" class="p-2 border border-green-900 rounded" placeholder="Enter first dish"></textarea>

      <label for="Second-Dish" class="font-semibold">Second Dish description:</label>
      <textarea type="text" rows="3" name="secondDish" id="secondDish" class="p-2 border border-green-900 rounded" placeholder="Enter second dish"></textarea>

      <label for="Final-Dish" class="font-semibold">Final Dish description:</label>
      <textarea type="text" rows="3" name="finalDish" id="finalDish" class="p-2 border border-green-900 rounded" placeholder="Enter final dish"></textarea>

      <button href="index.php?" type="submit" name="submit" class="mt-4 bg-green-950 text-white py-2 px-4 rounded hover:bg-green-700 transform duration-300">Add Menu</button>
    </form>
    </section>



    <footer class="bg-white ">
    <div class="w-full max-w-screen-xl  p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="../img/DishUP.png" class="w-[150px]" alt="Flowbite Logo" />
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
    </div>
</footer>




</body>
</html>

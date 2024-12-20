<?php  

require('./db_connection.php');

if (isset ($_GET['id_menu'])){$id = $_GET['id_menu'];};


if (isset ($_POST['submit'])){

  $city_name = $_POST['city_name'];
  $city_description = $_POST['city_description'];
  $Type = $_POST['Type'];
  $city_img = $_POST['city_img'];
 

  $query = mysqli_query($conn, "INSERT INTO menu (city_name, city_description, Type, city_img ,id_pays) VALUES ('$city_name', '$city_description', '$Type', '$city_img' ,'$id')");

  if($query) {
    header("Location: cities.php?id_pays={$id}");
  }else{
    echo "<script>alert('There is an error');</script>";
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




  <section class="pb-20">
    <form class="flex flex-col gap-4  mx-auto w-full md:w-1/2 bg-gray-50 p-8  rounded shadow" method="POST">
      <label for="city-name" class="font-semibold">Menu Name:</label>
      <input type="text" name="city_name" id="city_name" class="p-2 border border-green-900 rounded" placeholder="Enter country name">

      <label for="city-description" class="font-semibold">Menu Description:</label>
      <textarea type="text" rows="4" name="city_description" id="city_description" class="p-2 border border-green-900 rounded " placeholder="Enter country location"></textarea>

      <label for="Type" class="font-semibold">Type(Capital or City) :</label>
      <input type="text" name="Type" id="Type" class="p-2 border border-green-900 rounded" placeholder="Enter city type">

      <label for="city-img" class="font-semibold">City Image URL:</label>
      <input type="text" name="city_img" id="city-img" class="p-2 border border-green-900 rounded" placeholder="Enter image URL">

      <button href="index.php?" type="submit" name="submit" class="mt-4 bg-green-950 text-white py-2 px-4 rounded hover:bg-green-700 transform duration-300">Add Country</button>
    </form>

    </section>




</body>
</html>

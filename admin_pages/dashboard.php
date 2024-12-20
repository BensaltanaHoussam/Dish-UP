<?php
require('../db_connection.php');

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
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
  
  <script>
    // JavaScript function to show/hide sections
    function toggleContent(contentType) {
      const clientSection = document.getElementById("client-section");
      const reservationSection = document.getElementById("reservation-section");
      const menusSection = document.getElementById("menus-section");
      
      // Hide all sections
      clientSection.style.display = "none";
      reservationSection.style.display = "none";
      menusSection.style.display = "none";
      
      // Show the selected section
      if (contentType === 'clients') {
        clientSection.style.display = "block";
      } else if (contentType === 'reservations') {
        reservationSection.style.display = "block";
      } else if (contentType === 'Menus') {
        menusSection.style.display = "block";
      }
    }
  </script>
</head>
<body>
<div class="flex min-h-screen h-full">
    <aside class="w-52 bg-[#FAF5EF]  border-r border-[#14452B] min-h-full flex flex-col items-center gap-4">
        <div class="drop-shadow-xl">
            <img src="img/africa.png" alt="">
        </div>
        <div>
            <div class="grid gap-4 w-[100%]">
                <a href="index.php"><img class="w-[150px]" src="../img/DishUP.png" alt=""></a>
                <a href="javascript:void(0);" class="flex gap-4 px-4 py-2 rounded-2xl" onclick="toggleContent('clients')">
                  <img src='img/3 User.svg' alt=''> Clients 
                </a>
                <a href="javascript:void(0);" class="flex gap-4 px-4 py-2 rounded-2xl" onclick="toggleContent('reservations')">
                  <img id='btn-icon' class='mt-1' src='img/act.svg' alt=''> Reservations
                </a>
                <a href="javascript:void(0);" class="flex gap-4 px-4 py-2 rounded-2xl" onclick="toggleContent('Menus')">
                  <img src="img/Settings_Future.svg" alt=""> Menus
                </a>
            </div>
        </div>
    </aside>
    <div class="grow">
        <header class= " border-[#14452B] bg-[#FAF5EF] h-20 border-b">
            <nav class="h-full flex justify-between mx-8 items-center">
                <div class="flex gap-2">
                    <img src="img/Search.svg" alt="">
                    <input class="search outline-none border-none w-64 px-4 py-2 rounded-2xl" type="search" name="search-input" id="search-input" placeholder="Search anything here">
                </div>
                <div class="flex w-72 justify-between items-center">
                    <img class="cursor-pointer" src="img/settings.svg" alt="">
                    <img class="cursor-pointer" src="img/Icon.svg" alt="">
                   
                    <div class="flex items-center gap-2 cursor-pointer">
                        <div class="cursor-pointer w-10 h-10 bg-black bg-cover rounded-full text-white relative">
                            <div class="bg-[#228B22] h-3 w-3 rounded-full absolute bottom-0 right-0"></div>
                        </div>
                        <p class="text-[#606060] font-bold">Houssam Bensaltana</p>
                    </div>
                </div>
            </nav>
        </header>

    
        <main class="p-8 bg-[url('../img/background_dash.jpg')] bg-cover bg-center h-[500px] ">
            <h1 class="text-2xl font-bold mb-6">Clients</h1>

            <!-- Clients Section -->
            <div id="client-section">
                <table class="min-w-full table-auto border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border bg-slate-400  border-gray-300 px-4 py-2">ID</th>
                            <th class="border bg-gray-400 border-gray-300 px-4 py-2">Username</th>
                            <th class="border bg-gray-400 border-gray-300 px-4 py-2">Password</th>
                            <th class="border bg-gray-400 border-gray-300 px-4 py-2">Phone Number</th>
                            <th class="border bg-gray-400 border-gray-300 px-4 py-2">Address</th>
                            <th class="border bg-gray-400 border-gray-300 px-4 py-2">Role</th>
                            <th class="border bg-gray-400 border-gray-300 px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $row['id']; ?></td>
                                <td class="border bg-slate-100 font-medium border-gray-300 px-4 py-2"><?php echo $row['userName']; ?></td>
                                <td class="border bg-slate-100 font-medium border-gray-300 px-4 py-2"><?php echo $row['password']; ?></td>
                                <td class="border bg-slate-100 font-medium border-gray-300 px-4 py-2"><?php echo $row['phoneNumber']; ?></td>
                                <td class="border bg-slate-100 font-medium border-gray-300 px-4 py-2"><?php echo $row['Adress']; ?></td>
                                <td class="border bg-slate-100 font-medium text-green-500 border-gray-300 px-4 py-2"><?php echo $row['id_roles_fk']; ?></td>
                                <td class="border bg-slate-100 border-gray-300 px-4 py-2">
                                    <a href="modify.php?id=<?php echo $row['id']; ?>" class="text-blue-500 hover:underline">Modify</a>
                                    |
                                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Reservations Section (Hidden by Default) -->
            <div id="reservation-section" style="display: none;">
                <!-- Add reservation content here -->
                <h2 class="text-xl font-bold">Reservations Content</h2>
                <!-- Example reservation table or content can go here -->
                <p>This is where the reservation details will be displayed.</p>
            </div>

            <!-- Menus Section (Hidden by Default) -->
            <div id="menus-section" style="display: none;">
                <h2 class="text-xl font-bold">Menus Content</h2>
                <p>This is where the menus details will be displayed.</p>
            </div>
        </main>
    </div>
</div>
</body>
</html>

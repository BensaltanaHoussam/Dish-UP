

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
        <a href="index.php" class="flex items-center  space-x-3 rtl:space-x-reverse">
            <img class=" h-[60px] w-[120px]" src="../img/DishUP.png" class="h-8" alt="Logo" />
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <div class="flex gap-4 items-center">
            <a href="#" class="text-sm bg-[#14452B] rounded-sm border-2 border-[#14452B]    text-white px-4 py-2 hover:bg-white hover:text-[#14452B] transform duration-300">contact Us</a>

            <a href="#"><img class="w-[40px] rounded-full" src="../img/profile.jpeg" alt="prile"></a>

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





<section class="bg-[url('../img/hero_bg2.jpg')] bg-cover bg-center p-8 flex justify-around   ">



<div class="mt-8 pl-2 flex flex-col ">
<h1 class=" text-3xl font-extrabold  text-gray-900 dark:text-[#FAF5EF] md:text-5xl lg:text-6xl">Reserve Your Table Now for an Unforgettable Italian Dining Experience!</h1>

<p class="text-[#fffbf5] bg-black/10  pb-8 border-b-2 border-white  mt-1 p-2 rounded-sm  font-light w-[600px]">Experience the finest Italian cuisine, made with the highest quality ingredients sourced from Italy’s best regions. Our dishes are crafted with care, using fresh, seasonal produce and traditional recipes for an authentic, unforgettable meal. Taste the difference—where quality and tradition meet.</p>

</div>

 
     
      <div class="w-full bg-[#FAF5EF] rounded-lg  md:mt-0 sm:max-w-md shadow-xl shadow-white/40 flex">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-2xl font-bold text-[#14452B] ">
                  Reserve menu
              </h1>
              <form class="space-y-4 md:space-y-6" action="#">
                <div>
                    

                <div class="pb-2">
                      <label for="email" class="block mb-2 text-sm text-[#14452B]">User name</label>
                      <input type="email" name="email" id="email" class="w-[380px] p-3  rounded-xl text-sm " placeholder="losiento wilson" required="">
                  </div>
                  <div class="pb-2">
                      <label for="email" class="block mb-2 text-sm text-[#14452B]">phoneNumber</label>
                      <input type="email" name="email" id="email" class="w-[380px] p-3  rounded-xl text-sm " placeholder="+212" required="">
                  </div>
                  <div class="pb-2">
                      <label for="email" class="block mb-2 text-sm text-[#14452B]">Adress</label>
                      <input type="email" name="email" id="email" class="w-[380px] p-3  rounded-xl text-sm " placeholder="City and home adress" required="">
                  </div>

                  <div class="pb-2">
                      <label for="email" class="block mb-2 text-sm text-[#14452B]">Menu</label>
                      <input type="email" name="email" id="email" class="w-[380px] p-3  rounded-xl text-sm " placeholder="menu name" required="">
                  </div>
                  <div class="pb-2">
                      <label for="email" class="block mb-2 text-sm text-[#14452B]">person number</label>
                      <input type="email" name="email" id="email" class="w-[380px] p-3  rounded-xl text-sm" placeholder="number" required="">
                  </div>



                </div>
             
                  <button type="submit" class="w-full text-white bg-[#14452B] text-center py-2 hover:bg-[#FAF5EF] border-2 hover:text-[#14452B] hover:border-2 border-[#14452B] dur">Submit Order</button>
                
              </form>
          </div>


        


          
         
      </div>
 
</section>




<footer class="bg-white ">
    <div class="w-full max-w-screen-xl  p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="index.php" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
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

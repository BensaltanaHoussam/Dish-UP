
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title>Admin</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="./public/style/dach.css">
        <link rel="stylesheet" href="./dashboard.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>
        <input type="checkbox" id="menu-toggle">
        <div class="sidebar">
            <div class="side-header">
                <h3>M<span>odern</span></h3>
            </div>

            <div class="side-content">
                <div class="profile">
                    <div class="profile-img bg-img" style="background-image: url('./img/profile.jpeg')"></div>

               
                </div>

                <div class="side-menu">
                    <ul>
                        <li><a href="" class="active"><span class="las la-home"></span><small>Dashboard</small></a></li>
                        <li><a href="./ajouter.php"><span class="las la-clipboard-list"></span><small>Menu</small></a></li>
                        <li><a href=""><span class="las la-user-alt"></span><small>Profile</small></a></li>
                        <li><a href=""><span class="las la-envelope "></span><small>Projects</small></a></li>
                        <li><a href=""><span class="las la-shopping-cart"></span><small>Orders</small></a></li>
                        <li><a href=""><span class="las la-tasks"></span><small>Tasks</small></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-content">

            <header>
                <div class="header-content">
                    <label for="menu-toggle">
                        <span class="las la-bars"></span>
                    </label>

                    <div class="header-menu">
                        <label for=""><span class="las la-search"></span></label>

                        <div class="notify-icon">
                            <span class="las la-envelope"></span><span class="notify">4</span>
                        </div>

                        <div class="notify-icon">
                            <span class="las la-bell"></span><span class="notify">3</span>
                        </div>

                        <div class="user">
                            <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>
                            <span class="las la-power-off"></span><span>Logout</span>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                <div class="page-header">
                    <h1>Dashboard</h1>
                    <small>Home / Dashboard</small>
                </div>

                <div class="page-content">
                <div class="analytics">

<div class="card">
    <div class="card-head">
        <h2>107,200</h2>
        <span class="las la-user-friends"></span>
    </div>
    <div class="card-progress">
        <small>User activity this month</small>
        <div class="card-indicator">
            <div class="indicator one" style="width: 60%"></div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-head">
        <h2>340,230</h2>
        <span class="las la-eye"></span>
    </div>
    <div class="card-progress">
        <small>Page views</small>
        <div class="card-indicator">
            <div class="indicator two" style="width: 80%"></div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-head">
        <h2>$653,200</h2>
        <span class="las la-shopping-cart"></span>
    </div>
    <div class="card-progress">
        <small>Monthly revenue growth</small>
        <div class="card-indicator">
            <div class="indicator three" style="width: 65%"></div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-head">
        <h2>47,500</h2>
        <span class="las la-envelope"></span>
    </div>
    <div class="card-progress">
        <small>New E-mails received</small>
        <div class="card-indicator">
            <div class="indicator four" style="width: 90%"></div>
        </div>
    </div>
</div>

</div>
                    <div class="records table-responsive">

                        <div class="record-header">
                            <div class="add">
                                <span>Entries</span>
                                <select name="" id="">
                                    <option value="">ID</option>
                                </select>
                                <button>Add record</button>
                            </div>

                            <div class="browse">
                                <input type="search" placeholder="Search" class="record-search">
                                <select name="" id="">
                                    <option value="">Status</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span class="las la-sort"></span> CLIENT</th>
                                        <th><span class="las la-sort"></span> EMAIL</th>
                                        <th><span class="las la-sort"></span> TELEPHONE</th>
                                        <th><span class="las la-sort"></span> ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    while ($row = mysqli_fetch_assoc($result)) {
                                       
                                        if ($row['id_role'] == 2) {
                                    ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td>
                                                    <div class="client">
                                                        <div class="client-img bg-img" style="background-image: url(data:image/jpeg;base64,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)"></div>
                                                        <div class="client-info">
                                                            <h4><?= $row['name_utilisateur'] ?></h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?= $row['Email'] ?></td>
                                                <td><?= $row['telephone'] ?></td>
                                                <td>
                                                    <div class="flex justify-center gap-6">
                                                        <form action="" method="post">
                                                            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                            <button type="submit" name="supprimer">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </form>
                                                        <form action="#" method="get">
                                                            <input type="hidden" value="<?= $row['id']; ?>" name="id">
                                                            <button type="submit" name="modifecation" onclick="modification()" class="w-full text-center flex justify-center items-center px-3 py-2 text-sm font-medium bg-[#CDA55E] text-slate-50 rounded-lg">modifier</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </main>

        </div>
        <?php 
        if (isset($_POST['modifer'])) {
            $id = $qury['id'];
            $name_user  =  $_POST['name_user'];
            $Email = $_POST['Email'];
            $telephone = $_POST['telephone'];
            $password = $_POST['Password'];
            if (!empty($name_user) && !empty($Email) && !empty($telephone) && !empty($password)) {
                $quryee  = mysqli_query($connect," UPDATE utilisateur SET name_utilisateur = '$name_user' , Email = '$Email' , telephone = '$telephone' , password =' $password' WHERE id = '$id'");
            }
        }
        ?>
        <div id="box" class="login-box hidden">
            <h2 class=" font-sans text-md font-bold">modification</h2>
            <form method="post" action="">
                <div class="user-box">
                    <input type="text" value="<?= $qury['name_utilisateur'] ?>" name="name_user" required="">
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="text" value="<?= $qury['Email'] ?>" name="Email" required="">
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input type="tele" value="<?= $qury['telephone'] ?>" name="telephone" required="">
                    <label>telephone</label>
                </div>
                <div class="user-box">
                    <input type="password" value="<?= $qury['password'] ?>" name="Password" required="">
                    <label>Password</label>
                </div>
                    <button type="submit" id="sub" onclick="" name="modifer" class=" w-full h-11 bg-[#22BAA0] rounded-lg text-white font-sans">Submit</button>
            </form>
        </div>
        </div>
                                    <script src="./public/style/js/script.js"></script>
    </body>

    </html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Modern Admin Dashboard</title>
    <link rel="stylesheet" href="admin_page.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>M<span>odern</span></h3>
        </div>

        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(images/rohit.png)"></div>
                <h4>ROHIT RANGILE</h4>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="admin_page.php">
                            <span class="las la-user-alt"></span>
                            <small>Login_User</small>
                        </a>
                    </li>
                    <li>
                        <a href="admin_register_data.php">
                            <span class="las la-user-alt"></span>
                            <small>Register_User</small>
                        </a>
                    </li>
                    <li>
                        <a href="admin_contact_data.php" class="email_section">
                            <span class="las la-envelope"></span>
                            <small>Contact_User</small>
                        </a>
                    </li>
                    <li>
                        <a href="admin_feedback_data.php">
                            <span class="las la-clipboard-list"></span>
                            <small>User_Feedback</small>
                        </a>
                    </li>
                    <li>
                        <a href="admin_newsletter_data.php">
                            <span class="las la-envelope"></span>
                            <small>Our Newsletter</small>
                        </a>
                    </li>


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
                    <label for="">
                        <span class="las la-search"></span>
                    </label>

                    <div class="notify-icon">
                        <span class="las la-envelope"></span>
                        <span class="notify">4</span>
                        
                    </div>

                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <span class="notify">3</span>
                    </div>

                    <div class="user">
                        <div></div>
                        <span class="las la-power-off"></span>
                        <span><a class="get-started" href="../index.php">Logout</a></span>
                    </div>
                </div>
            </div>
        </header>


        <main>

            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home</small>
            </div>

            <div class="page-content">

                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2>02</h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>Login_User</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>32</h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>Register_User</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>65</h2>
                            <span class="las la-envelope"></span>
                        </div>
                        <div class="card-progress">
                            <small>User_Feedback</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>47</h2>
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
                        <div class="browse">
                            <input type="search" placeholder="Search" class="record-search">
                            <select name="" id="">
                                <option value="">Status</option>
                            </select>
                        </div>
                    </div>

                    <!-- table for displaying the data -->
                    <div>
                        <table width="100%">
                            <thead>
                                <tr style="background-color:#fff;">
                                    <th>#</th>
                                    <th><span class="las la-user-alt"></span> Email</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>
                                        <div class="client">                
                                         <div class="client-info">
                                                <h4></h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        tushar123@gmail.com
                                    </td>
                                    <td>
                                        
                                    <td>
                                        <div class="actions">
                                            <button class="btn">Edit</button>
                                            <button class="btn1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>02</td>
                                    <td>
                                        <div class="client">                
                                         <div class="client-info">
                                               
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        samirpatel95@gmail.com
                                    </td>
                                    <td>
                                    <td>
                                        <div class="actions">
                                            <button class="btn">Edit</button>
                                            <button class="btn1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>03</td>
                                    <td>
                                        <div class="client">                
                                         <div class="client-info">
                                             
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        rohitrangile81@gmail.com
                                    </td>
                                    <td>
                                     
                                    <td>
                                        <div class="actions">
                                            <button class="btn">Edit</button>
                                            <button class="btn1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>04</td>
                                    <td>
                                        <div class="client">                
                                         <div class="client-info">
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        sumitarjhare123@gmail.com
                                    </td>
                                    <td>
                                      
                                    <td>
                                        <div class="actions">
                                            <button class="btn">Edit</button>
                                            <button class="btn1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>05</td>
                                    <td>
                                        <div class="client">                
                                         <div class="client-info">
                                               
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        ankitkharte123@gmail.com
                                    </td>
                                    <td>
                                        
                                    <td>
                                        <div class="actions">
                                            <button class="btn">Edit</button>
                                            <button class="btn1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </main>

    </div>
</body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <!-- CSS -->
        <style type="text/css">
            .left    { text-align: left;}
            .right   { text-align: right;}
            .center  { text-align: center;}
            .justify { text-align: justify;}
            input[type=text] {
                background: #2E3339;
                color: none;
                padding: 10px;
                border: 2px solid #1072A1;
                height: 11px;
            }
            input[type=password] {
                background: #2E3339;
                color: none;
                padding: 10px;
                border: 2px solid #1072A1;
                height: 11px;
            }
            input[placeholder]{
                color:white;
            }
            #Teks {
                padding-top: 20px;
            }
         </style>
        <link rel="stylesheet" type="text/css" href="CSS/style.css"> 
    </head>
<body>
<?php
            if(isset($_GET['pesan']))
            {
                if($_GET['pesan']=='gagal')
                {
                    echo "Gagal login, periksa username dan password";
                }
                else if($_GET['pesan']=='logout')
                {
                    echo "Anda sudah logout";
                }
                else if($_GET['pesan']=='belumlogin')
                {
                    echo "Anda belum login, tidak dapat mengakses halaman admin";
                }
                else if($_GET['pesan']=='berhasil')
                {
                    echo "Anda berhasil daftar, Silahkan login y";
                }
            }
?>


<h1 align="center"><font color="black" size="7"><div id="Teks">T&nbsp;O&nbsp;K&nbsp;O&nbsp;&nbsp; A&nbsp;M&nbsp;A&nbsp;N&nbsp;A&nbsp;H</div></font></h1>
<div id="card"> <!-- Kotak Login -->
   <div class="center">
       <center>
       <div>
           <br><br><br>
         <form method="post" action="aksilogin.php">
         <table border="0">
            <tr height="80">
                <td colspan="2"><font size="15" face="arial" color="white"><center><b>Login</b></center></font></td></tr>
         </table><br>
         <table border="0"> <!-- Tabel -->
            <tr height="60" id="tabel"> <!-- Baris ke 1 -->
                 <td width="20%"><font color="white"><center><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="2.3em" height="2.3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2S7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z" fill="white"/></svg></center></font></td> <!-- Icon User -->
                 <td width="80%">
                    <input type="text" name="pengguna" size="22" maxlength="30" placeholder="Username" required /> <!-- Ini Username -->
                </td>
            </tr>
            <tr height="60" id="tabel"> <!-- Baris ke 2 -->
                <td width="25%"><font color="katakunci"><center><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="2.3em" height="2.3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M17 9V7c0-2.8-2.2-5-5-5S7 4.2 7 7v2c-1.7 0-3 1.3-3 3v7c0 1.7 1.3 3 3 3h10c1.7 0 3-1.3 3-3v-7c0-1.7-1.3-3-3-3zM9 7c0-1.7 1.3-3 3-3s3 1.3 3 3v2H9V7zm4.1 8.5l-.1.1V17c0 .6-.4 1-1 1s-1-.4-1-1v-1.4c-.6-.6-.7-1.5-.1-2.1c.6-.6 1.5-.7 2.1-.1c.6.5.7 1.5.1 2.1z" fill="white"/></svg></center></font></td> <!-- Icon Padlock/Gembok -->
                <td width="70%">
                   <input type="password" name="katakunci" size="22" maxlength="30" placeholder="Password" required /> <!-- Ini Password -->
               </td>
           </tr>
         </table>
      
         <center>
            <input id="submit-btn" type="submit" name="masuk" value="LOGIN" /><!-- LOGIN -->
            <a href="daftar.php"><font color="white" face="Raleway">&nbsp;&nbsp;<b class="ukuran"> SIGN UP </b></font></a><!-- DAFTAR -->
         </center>
        </form>
        </div>
       </center>
   </div>
</div>
<!--
<div class="center"><h3>Mochammad Gifari Amatullah</div>
<div class="center"><h3>XI-RPL-B</h3></div>
-->
</body>
</html>

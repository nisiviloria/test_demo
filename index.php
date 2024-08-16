<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>WEBDEV - LAB WORK 3</title>
    <style>
        a {
            font-size: 120%;
            color: #d2953f;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            border: 2px solid rgb(255, 253, 253); 
        }
        
        th, td {
            border: 1px solid rgb(255, 255, 255); 
            padding: 5px;
            text-align: center;
            border-bottom: 1px solid #7e7b7b;
            vertical-align: middle; 
        }
        th {
            background-color: #f2f2f2;
        } 
        table.enhypen-facts td {
            text-align: left;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }
        .text {
            color: #f9f9f9;
        }
        .container {
            display: flex;
        }

        .image {
            flex: 0 0 auto;
        }

        .en-image {
            width: 220%; 
            height: 90px;
        }
        .member-image {
            height: 150px;
            width: 150px;
            margin: 1px 0; 
            display: block; 
            margin-left: auto;
            margin-right: auto; 
        }
        
        .content h1 {
            font-family: 'Arial Black', sans-serif;
            font-size: 100px;
            color: #ffffff;
            font-weight: 600;
            transition: 0.5s;
            margin-bottom: 0px;
            margin-top: 0px;
        }
        
        .content h1:hover {
            -webkit-text-stroke: 2px #d2953f;
            color: transparent;
        }
        .frame {
            margin-left: 70px;
            margin-top: 70px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1 style="text-align:center;">ENHYPEN</h1>
    </div>
    <div class="container">
        <div class="image">
            <!-- Your existing content here -->
        </div>
        <div class="text">
            <h2 style="font-family: 'Verdana', serif">ABOUT ENHYPEN</h2>
            <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
            <!-- Your existing content here -->
            <table class="enhypen-facts" style="margin-top: 20px; color: white; width:95%">
                <tr>
                <th  style="color: black;">ENHYPEN FACTS</th>
            </tr>
            <tr>
                <td>ENHYPEN became the first boy band to debut under BELIFT LAB.</td>
            </tr>
            <tr>
            <td>The band was formed on a competition show called <i>I-LAND</i></td>
            </tr>    
            <tr>
                <td>HEESEUNG, JAY, SUNGHOON, AND JUNGWON are former BIGHIT MUSIC trainees.</td>
            </tr>
            <tr>
                <td>Their fandom name is ENGENE, which is derived from the words “engine” and “gene.” </td>
            </tr>
        </table>
        <div class="frame">
        <iframe width="470" height="315"
src="https://www.youtube.com/embed/iwBfCHvFzPU">
</iframe>
</div>
        </div>
        <div class="text">
            <h2 style="font-family: 'Verdana', serif">ABOUT ENHYPEN</h2>

            <p>ENHYPEN is a South Korean boy band formed by BE:LIFT Lab, a music label under HYBE corporation, through a survival competition 
            show I-Land. The group consist of seven multinational members JUNGWON, HEESEUNG, JAY, JAKE, SUNGHOON, SUNOO, and NI-KI.
            </p>
            <p>They officially debuted on November 30th, 2020 with the song “Given-Taken”. ENHYPEN are known for their dynamic and highly synchronized
            performances, which have garnered them international praise as the “4th Generation Hot Icons” and “Global K-pop Rising Stars.”They are the fastest K-pop boy group to become a million seller, and the first and only K-pop act in history to have all of 
            their albums RIAJ certified. 
            </p>
            <p>This webpage will direct you to the Album pictures of Enhypen.</p>
            <a href="album_of_enha.html"><b>Visit Album Pictures of Enhypen</b></a>
            <table width="1000%">
                   <tr>
                    <th colspan="3" style="color: black">ENHYPEN Members</th>
                </tr>
                <tr>
                    <td colspan="1"><img class="en-image" src="en.jpg" alt="EN-"></td><br>
                </tr> 
                <tr style="color: black;">
                    <th>Name</th>
                    <th>Birth Name</th>
                    <th>Birth Date</th>
                  </tr>
                <tbody>
                  <tr> 
                   <td><img class="member-image" src="hee.jpg" alt="HEESEUNG"><br>HEESEUNG (희승)</td>
                    <td>Lee Heeseung (이희승)</td>
                    <td>October 15, 2001</td>
                  </tr>
                  <tr>
                    <td><img class="member-image" src="jay.jpg" alt="JAY"><br>JAY (제이)</td>
                    <td>Jay Park (박종성)</td>
                    <td>April 20, 2002</td>
                  </tr>
                  <tr>
                    <td><img class="member-image" src="jake.jpg" alt="JAKE"><br>JAKE (제이크)</td>
                    <td>Jake Sim (심재윤)</td>
                    <td>November 15, 2002</td>
                  </tr>
                  <tr>
                    <td><img class="member-image" src="sunghoon.jpg" alt="SUNGHOON"><br>SUNGHOON (성훈)</td>
                    <td>Park Sung-hoon (박성훈)</td>
                    <td>December 8, 2002</td>
                  </tr>
                  <tr>
                    <td><img class="member-image" src="sunoo.jpg" alt="SUNOO"><br>SUNOO (선우)</td>
                    <td>Kim Sun-woo(김선우)</td>
                    <td>June 24, 2003</td>  
                  </tr>
                  <tr> 
                    <td><img class="member-image" src="jungwon.jpg" alt="JUNGWON"><br>JUNGWON (정원)</td>
                    <td>Yang Jung-won (양정원)</td>
                    <td>February 9, 2004</td>
                  </tr>
                  <tr>
                   <td><img class="member-image" src="niki.jpg" alt="NI-KI"><br>NI-KI (니키)</td>
                    <td>Nishimura Riki (西村力)</td>
                    <td>December 9, 2005</td>
                  </tr>
                </tbody>
              </table>
        </div> 
    </div> 
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/about.css">
    <script src="../js/common.js"></script>
</head>
<body>

    <nav>
        <a href="../index.php">Home</a>
        <a href="../public/linear.php" >Linear Queue</a>
        <a href="../public/circular.php">Circular Queue</a>
        <a href="../public/priority.php">Priority Queue</a>
        <a href="../public/DQueue.php">Double Ended Queue</a>
        <?php session_start(); require_once("../phpDB/menu.php"); ?>
    </nav>
    
    <div class="teamMember">
        <h1 class="concept">About Us</h1>

        
        <div class="cards">
        <!-- 1st -->
        <div class="card">
            <div class="cardImg">
                <img src="../images/apoorva.jpg" alt="">
            </div>
            <p>Name: Apoorva</p>
            <p>Branch: MCA</p>
            <div class="roleContainer">
                <table style="margin: 0 auto;">
                    <th colspan="2">Contribution</th>
                    <tr>
                        <td>FrontEnd</td>
                        <td>Content Structuring</td>
                    </tr>
                    <tr>
                        <td>BackEnd</td>
                        <td>JS</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- 2nd  -->
        <div class="card">
            <div class="cardImg">
                <img src="../images/chetan1.jpg" alt="">
            </div>
            <p>Name: Chetan</p>
            <p>Branch: MCA</p>
            <div class="roleContainer">
                <table style="margin: 0 auto;">
                    <th colspan="2">Contribution</th>
                    <tr>
                        <td>FrontEnd</td>
                        <td>HTML and CSS</td>
                    </tr>
                    <tr>
                        <td>BackEnd</td>
                        <td>JS</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- 3rd -->
        <div class="card">
            <div class="cardImg">
                <img src="../images/kiran.jpg" alt="">
            </div>
            <p>Name: Kiran</p>
            <p>Branch: MCA</p>
            <div class="roleContainer">
                <table style="margin: 0 auto 0 auto;">
                    <th colspan="2">Contribution</th>
                    <tr>
                        <td>FrontEnd</td>
                        <td>HTML and CSS</td>
                    </tr>
                    <tr>
                        <td>BackEnd</td>
                        <td>JS</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- 4th -->
        <div class="card">
            <div class="cardImg">
                <img src="../images/priyanka.jpg" alt="">
            </div>
            <p>Name: Priyanka</p>
            <p>Branch: MCA</p>
            <div class="roleContainer">
                <table style="margin: 0 auto;">
                    <th colspan="2">Contribution</th>
                    <tr>
                        <td>Designing</td>
                        <td>Via Balsamiq</td>
                    </tr>
                    <tr>
                        <td>BackEnd</td>
                        <td>JS</td>
                    </tr>
                </table>
            </div>
        </div>   
    </div>
</div>

    <div class="expertDiv">
        <h1 class="concept" style="font-size: 4rem;">Expert Faculty</h1>
            <img src="../images/veenaMam.jpg" alt="">
        <div class="info">
            <p>Name: Dr. Veena</p>
            <p>Dept: MCA</p>
        </div>
    </div>

    <div class="projectFaculty">
        <div class="leftHalf">
                <img src="../images/tamaldeySir.jpg" alt="">
            <div class="info">
                <p>Name: Tamal Dey</p>
                <p>Dept: MCA</p>
            </div>
        </div>
        <div class="rightHalf">
                <img src="../images/premlathaMam.jpg" alt="">
            <div class="info">
                <p>Name: Premalatha</p>
                <p>Dept: MCA</p>
            </div>
        </div>
    </div>
    
</body>
</html>
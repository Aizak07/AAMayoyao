<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exam</title>
<style>
    .body{
        font-family: Arial, sans-serif;
        background-color: #445069;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }
    .examTitle{
        background-color: #183D3D;
        color: white;
        padding: 80px;
        font-size: 40px;
        padding-left:33%;
        margin:0;
    }
    table {
        margin-top:30px;
        width: 50%;
        border-spacing: 30px;
        background-color:#5B9A8B;
        border-radius:30px;
        font-size:27px;
    }

    th, td {
        padding: 15px;
        text-align: center;
        border: 1px solid #ddd; 
        border-radius:20px;
        background-color:white;
    }

    th {
        background-color: #445069;
        color: white;
        font-weight: bold;
    }

    .easy:hover{
        background-color: #E8FFCE;
    }
    .int:hover{
        background-color: orange;
    }
    .hard:hover{
        background-color: red;
    }
    h2 {
        margin: 0;
    }
    a{text-decoration:none;
      color:black;
    }
</style>
<h1 class = "examTitle">Assuption Academy General Exam</h1>
</head>
<br>
<body>
    <div>            
    <center>
    <table>
     <tr>
        <td class = "easy">
            <a href = "easy.php"><h2>EASY<h2>
        </td>
    </tr>
    <tr>
        <td class = "int">
          <a href="intermediate.php">  <h2>INTERMEDIATE</h2>
        </td>
    </tr>
    <tr>
        <td class = "hard">
            <a href = "hard.php"><h2>HARD</h2>
        </td>
    </tr>
    </table> 
    </center>
    </div>        

</body>
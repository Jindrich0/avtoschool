<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdminPanel - instructors</title>
    <link href="adminpanel.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <header>
        <div class="headerItem logo">
            AdminPanel
        </div>
        <div class="headerItem">
            <a href="../..">ВЫЙТИ</a>
        </div>
    </header>

</div>

<nav>
    <a href="index.php">
        <div class="navItem" >пользователи</div>
    </a>
    <a href="rates.php">
        <div class="navItem">тарифы</div>
    </a>
    <a href="instructors.php" style="color: white; background-color: black;">
        <div class="navItem">инструкторы</div>
    </a>
    <a href="reviews.php">
        <div class="navItem">отзывы</div>
    </a>
    <a href="questions.php">
        <div class="navItem">вопросы</div>
    </a>
    <a href="callbacks.php">
        <div class="navItem">звонки</div>
    </a>
</nav>

<div class="container">

    <div class="tableForm">
        <table>
            <tr>
                <td style="width: 10%">id*</td>
                <td style="width: 30%">ФИО инструктора</td>
                <td style="width: 15%">Стаж вождения</td>
                <td style="width: 15%">Возраст</td>
                <td style="width: 20%">Фотография</td>
                <td style="width: 10%; text-align: center"> Действия</td>
            </tr>
        </table>

        <table>
            <?php
            include_once('../connect.php');

            $table=mysqli_query($connect, "SELECT * FROM `instructors`");
            while($row=mysqli_fetch_array($table)){
                $id=$row['id'];
                $instFIO=$row['instFIO'];
                $drivingExperience=$row['drivingExperience'];
                $age=$row['age'];
                $img=$row['img'];

                echo "<form action='views/instructorsRedirect.php' method='POST'>
                        <tr>
                            <td style='width: 10%'>$id</td>
                            <td style='width: 30%'> <input type='text' name='instFIO' value='$instFIO'> </td>
                            <td style='width: 15%'> <input type='number' name='drivingExperience' value='$drivingExperience'> </td>
                            <td style='width: 15%'> <input type='number' name='age' value='$age'> </td>
                            <td style='width: 20%'> <input type='text' name='img' value='$img'> </td>
                            <td style='width: 10%; text-align: center'>
                             <button class='tableBtn' name='btnInstructorUpdate' type='submit' value='$id'> <img src='img/change.svg' alt='update' style='width: 25px; padding-right: 10px'> </button>
                             <button class='tableBtn' name='btnInstructorDelete' type='submit' value='$id'> <img src='img/delete.svg' alt='delete' style='width: 25px'>  </button>
                             </td>
                          </tr></form>";
            }
            ?>
        </table>

        <table>
            <form action='views/instructorsRedirect.php' method='POST'>
                <tr>
                    <td style="width: 10%">Новый инструктор</td>
                    <td style="width: 30%"> <input type='text' name='instFIOAdd' placeholder="ФИО инструктора"></td>
                    <td style="width: 15%"> <input type='number' name='drivingExperience' placeholder="Стаж вождения" maxlength="2"></td>
                    <td style="width: 15%"> <input type='number' name='ageAdd' placeholder="Возраст" maxlength="2"></td>
                    <td style="width: 20%"> <input type='text' name='imgAdd' placeholder="Фотография"></td>
                    <td style="width: 10%; text-align: center">
                        <button class='tableBtn' name='btnInstructorAdd' type='submit'> <img src="img/plus.svg" alt="add" style="width: 25px"> </button>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laba 4</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<!-- Написать скрипт подсчета количества показов страницы.
Количество посещений хранить в текстовом файле.
Использовать функции для работы с файлами
(например fread, fwrite, fclose...). -->
<body>

    <?php
        include 'test.php';
    ?>

    <table width="500px" border="1">
        <tr>
            <td rowspan="2"><b>Периоды</b></td>
            <td rowspan="2"><b>Ряды</b></td>
            <td colspan="10" align="center"><b>Группы элементов</b></td>
        </tr>
        <tr align="center">
            <td>&#8544;</td>
            <td>&#8545;</td>
            <td>&#8546;</td>
            <td>&#8547;</td>
            <td>&#8548;</td>
            <td>&#8549;</td>
            <td>&#8550;</td>
            <td colspan="3">&#8551;</td>
        </tr>
      
        <tr>
            <td align="center">1</td>
            <td align="center">1</td>
            <td>Водород</td>
            <td colspan="6">переодическая система химический элементов д.менделеева </td>
            <td>Гелий</td>
            <td colspan="2" rowspan="3"></td>
        </tr>
      
        <tr>
            <td align="center">2</td>
            <td align="center">2</td>
            <td>Литий</td>
            <td>Бериллий</td>
            <td>Бор</td>
            <td>Углерод</td>
            <td>Азот</td>
            <td>Кислород</td>
            <td>Фтор</td>
            <td>Неон</td>     
        </tr>
      
        <tr>
            <td align="center">3</td>
            <td align="center">3</td>
            <td>Натрий</td>
            <td>Магний</td>
            <td>Алюминий</td>
            <td>Кремний</td>
            <td>Фосфор</td>
            <td>Сера</td>
            <td>Хлор</td>
            <td>Аргон</td>
        </tr>
      
        <tr>
            <td align="center" rowspan="2">4</td>
            <td align="center">4</td>
            <td>Калий</td>
            <td>Кальций</td>
            <td>Скандий</td>
            <td>Титан</td>
            <td>Ванадий</td>
            <td>Хром</td>
            <td>Марганей</td>
            <td>Железо</td>
            <td>Кобальт</td>
            <td>Никель</td>
        </tr>
      
        <tr>
            <td align="center">5</td>
            <td>Медь</td>
            <td>Цинк</td>
            <td>Галлий</td>
            <td>Германий</td>
            <td>Мышьяк</td>
            <td>Селен</td>
            <td>Бром</td>
            <td>Криптон</td>
            <td colspan="2"></td>
        </tr>
    </table>


</body>

</html>
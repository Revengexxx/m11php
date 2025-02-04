<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP HW</title>
    </head>
    <body>
        <header>
            <h1>Модуль 11. Введение в PHP<br>Практика</h1>
        </header>
        <div class="title"><h2>Задание 1.<br>Таблица истинности PHP</h2></div>
        <table>
        <thead>
            <tr>
                <th><strong>A</strong></th>
                <th><strong>B</strong></th>
                <th><strong>!A</strong></th>
                <th><strong>A || B</strong></th>
                <th><strong>A &amp;&amp; B</strong></th>
                <th><strong>A xor B</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong><?= $A = 0 ?></strong></td>
                <td><strong><?= $B = 0 ?></strong></td>
                <td><?= !$A       ?></td>
                <td><?= $A || $B  ?></td>
                <td><?= $A && $B  ?></td>
                <td><?= $A xor $B ?></td>
            </tr>
            <tr>
                <td><strong><?= $A = 0 ?></strong></td>
                <td><strong><?= $B = 1 ?></strong></td>
                <td><?= !$A       ?></td>
                <td><?= $A || $B  ?></td>
                <td><?= $A && $B  ?></td>
                <td><?= $A xor $B ?></td>
            </tr>
            <tr>
                <td><strong><?= $A = 1 ?></strong></td>
                <td><strong><?= $B = 0 ?></strong></td>
                <td><?= !$A       ?></td>
                <td><?= $A || $B  ?></td>
                <td><?= $A && $B  ?></td>
                <td><?= $A xor $B ?></td>
            </tr>
            <tr>
                <td><strong><?= $A = 1 ?></strong></td>
                <td><strong><?= $B = 1 ?></strong></td>
                <td><?= !$A       ?></td>
                <td><?= $A || $B  ?></td>
                <td><?= $A && $B  ?></td>
                <td><?= $A xor $B ?></td>
        </table>
        <body>
    <h1>Задание 2. Таблица сравнения</h1>
    <h2>Таблица гибкого сравнения с помощью "=="</h2>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>true </th>
                <th>false</th>
                <th>1 </th>
                <th>0 </th>
                <th>-1 </th>
                <th>"1" </th>
                <th>null </th>
                <th>"php"</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>true</strong></td> <?php $A = true ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>false</strong></td> <?php $A = false ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>1</strong></td> <?php $A = 1 ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>0</strong></td> <?php $A = 0 ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>-1</strong></td> <?php $A = -1 ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>"1"</strong></td> <?php $A = "1" ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>null</strong></td> <?php $A = null ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
            <tr>
                <td><strong>"php"</strong></td> <?php $A = "php" ?>
                <?php $B = true  ?><td><?= $A == $B ?></td>
                <?php $B = false ?><td><?= $A == $B ?></td>
                <?php $B = 1     ?><td><?= $A == $B ?></td>
                <?php $B = 0     ?><td><?= $A == $B ?></td>
                <?php $B = -1    ?><td><?= $A == $B ?></td>
                <?php $B = "1"   ?><td><?= $A == $B ?></td>
                <?php $B = null  ?><td><?= $A == $B ?></td>
                <?php $B = "php" ?><td><?= $A == $B ?></td>
            </tr>
        </tbody>
    </table>
    <h2>Таблица жесткого сравнения с помощью "==="</h2>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>true </th>
                <th>false</th>
                <th>1 </th>
                <th>0 </th>
                <th>-1 </th>
                <th>"1" </th>
                <th>null </th>
                <th>"php"</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>true</strong></td> <?php $A = true ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>false</strong></td> <?php $A = false ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>1</strong></td> <?php $A = 1 ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>0</strong></td> <?php $A = 0 ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>-1</strong></td> <?php $A = -1 ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>"1"</strong></td> <?php $A = "1" ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>null</strong></td> <?php $A = null ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
            <tr>
                <td><strong>"php"</strong></td> <?php $A = "php" ?>
                <?php $B = true  ?><td><?= $A === $B ?></td>
                <?php $B = false ?><td><?= $A === $B ?></td>
                <?php $B = 1     ?><td><?= $A === $B ?></td>
                <?php $B = 0     ?><td><?= $A === $B ?></td>
                <?php $B = -1    ?><td><?= $A === $B ?></td>
                <?php $B = "1"   ?><td><?= $A === $B ?></td>
                <?php $B = null  ?><td><?= $A === $B ?></td>
                <?php $B = "php" ?><td><?= $A === $B ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
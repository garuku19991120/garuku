<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--     <meta http-equiv="refresh" content="2; URL="> -->
    <link rel="stylesheet" href="./css/master.min.css">
    <link rel="stylesheet" href="./css/menu.min.css">
    <link rel="stylesheet" href="./css/gallery.min.css">
    <script src="./js/none.js"></script>
    <title>GALLERY/ギャラリー</title>
</head>

<body>

    <?php include('./php/menu.php'); ?>

    <div class="main_space">
        <table class="main_table">
            <tr class="main_tr">
                <td class="main_td_space"></td>
                <td class="main_td">
                    <?php include('./php/gallery.php'); ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
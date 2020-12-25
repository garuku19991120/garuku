<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--     <meta http-equiv="refresh" content="2; URL="> -->
    <link rel="stylesheet" href="./css/master.min.css">
    <link rel="stylesheet" href="./css/menu.min.css">
    <link rel="stylesheet" href="./css/gallery.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@500&family=Roboto:wght@900&display=swap" rel="stylesheet">
    <script src="./js/none.js"></script>
    <title>GALLERY/ギャラリー</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
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
<!-- <a href="./img/26082000635.jpg" data-lightbox="group"><img src="./img/26082000635.jpg" width="300"></a> -->

</html>
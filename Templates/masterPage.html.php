<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ex23</title>

    <link rel="stylesheet" href="/resources/assets/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/resources/assets/">


    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_editor.pkgd.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_style.min.css" rel="stylesheet"
          type="text/css"/>


</head>


<body>

<?php require_once "Templates/header.blade.php" ?>

<!--main    pagina inicial -->
<?php //require_once "Templates/start.blade.php"?>

<!--authors-->
<?php //  require_once "Templates/TemplateAuthorsList.html.php"?>
<?php // require_once "Templates/templateMyacc.blade.php"?>


<!--tutoriais -->
<?php //require_once "Templates/templateTutoriaisList.blade.php"?>
<?php //require_once "Templates/TemplateEditarTutorial.html.php"?>
<?php require_once "Templates/templateInserirTutorial.blade.php" ?>


<!-- login/regist -->
<?php require_once "Templates/templateLoginRegist.blade.php" ?>


<!-- footer -->
<?php require_once "Templates/footer.blade.php" ?>


<script src="/resources/assets/js/jquery.min.js"></script>
<script src="/public/js/app.js"></script>

<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/js/froala_editor.pkgd.min.js"></script>

</body>
</html>


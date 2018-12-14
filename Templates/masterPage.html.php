<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ex23</title>

    <link rel="stylesheet" href="resources/assets/bootstrap-4.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="resources/assets/css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_editor.pkgd.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_style.min.css" rel="stylesheet"
          type="text/css"/>


</head>


<body>

<?php require_once "Templates/TemplateHeader.html.php" ?>

<!--main    pagina inicial -->
<?php //require_once "Templates/default.html.php"?>

<!--authors-->
<?php //  require_once "Templates/TemplateAuthorsList.html.php"?>
<?php // require_once "Templates/TemplateMyacc.html.php"?>


<!--tutoriais -->
<?php //require_once "Templates/Tutoriais.html.php"?>
<?php //require_once "Templates/TemplateEditarTutorial.html.php"?>
<?php require_once "Templates/TemplateInserirTutorial.html.php" ?>


<!-- login/regist -->
<?php require_once "Templates/TemplateLogin" ?>


<!-- footer -->
<?php require_once "Templates/TemplateFooter.html.php" ?>


<script src="resources/assets/js/jquery.min.js"></script>
<script src="resources/assets/js/app.js"></script>

<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/js/froala_editor.pkgd.min.js"></script>

</body>
</html>


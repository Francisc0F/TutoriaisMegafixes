


var app = angular.module("myApp",[],function ($interpolateProvider){

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

});


app.controller("loginCtrl", function($scope) {



    $scope.resetForm = function (form) {

        form.$setPristine();

    }

});
//in progress



$(document).ready(function() {


    //page start
    RateMouseOverOut();
    //profile description top viewers
    authorDescription();

    //login register
    displaylogin();


    //toggle login sign in
    toggleloginRegist();


    //menu
    menuActive();



    //pagina tutoriais

    CategoriasActive();







// text area format
    $(function() {
        $('textarea#froala-editor').froalaEditor({
            toolbarButtons: ['undo', 'redo' , '|', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'outdent', 'indent', 'clearFormatting', 'insertTable', 'html'],
            toolbarButtonsXS: ['undo', 'redo' , '-', 'bold', 'italic', 'underline'],
            quickInsertTags:[],
            height: 300
        })
    });
});


//login forms
function toggleloginRegist() {
    $("#register").hide();

    $(".chooseForm").click(function () {

        if($(this).hasClass("notMember")){

            $("#login").fadeOut();
            $("#register").delay(400).fadeIn();

        }else if ($(this).hasClass("Member")){

            $("#register").fadeOut();
            $("#login").delay(400).fadeIn();


        }

    })

}
function displaylogin(){


    //login nav bar button
    $(".btn-login-signIn").click(function (event) {
        event.preventDefault();

        if($("#Grouplogin").css('display') == 'none'){
            $("#Grouplogin").fadeIn();
        }else{
            $("#Grouplogin").fadeOut();
        }

    });



    //button esconder
    $("button.close").click(function () {
        if($("#Grouplogin").css('display') == 'none'){
            $("#Grouplogin").fadeIn();
        }else{
            $("#Grouplogin").fadeOut();
        }

    });

}

//author functions
function authorDescription(){

    $("#topAutors > div > div.col-md-8 > div").eq(0).removeClass("hide");

    $("#topAutors > div > div.col-md-4 > ul li").click(function() {

        $elem = $("#topAutors > div > div.col-md-4 > ul li") ;

        $elem.removeClass("active");

        if($(this).hasClass("active")){
            $(this).removeClass("active");
        }else{
            $(this).addClass("active");
        }


        $elemDescription = $("#topAutors > div > div.col-md-8 > div");


        $($elemDescription).addClass("hide");



        if($(this).index()===0){

            $($elemDescription).eq(0).removeClass("hide");

        }else if($(this).index()===1){
            $($elemDescription).eq(1).removeClass("hide");

        }else{
            $($elemDescription).eq(2).removeClass("hide");

        }



        //  $("#topAutors > div > div.col-md-4 > ul > li.list-group-item.d-flex.justify-content-between.align-items-center").eq(1);




    });
}

//menu functions
function menuActive(){


    $("ul li.nav-item").click(function () {



        $(this).addClass("active");


    })


}

//scroll function


function showFooterScroll(){


            //verifica se ha scroll
        if ($(document).height() > $(window).height()) {



            //esconde e mostra
            $(window).on("scroll", function () {


                //verifica se esta no fim
                if ($(window).scrollTop() + $(window).height() > $(document).height() - 15) {

                    $("#footer").removeClass("hide");

                    $("#footer").fadeIn(160);

                } else {
                    $("#footer").fadeOut(160);
                }

            });

        }else{
            $("#footer").removeClass("hide");
        }



}

//pagina tutoriais
function CategoriasActive(){

    $elem= $("#tutoriais ul li.list-group-item.list-category");

    $elem.eq(0).addClass("active");

    $elem.click(function () {

        $elem.removeClass("active");

        $(this).addClass("active");

    });

}



//rate
function RateMouseOverOut(){

    $(".rate .fa.fa-star").on("mouseover",function () {

        $ThisElemParent=$(this).parent();


        $thisElemIndex=$(this).index();

        //childrens array
        $childrens=$ThisElemParent.find("span.fa.fa-star");

        $countInitialStars=0;

        for ($i = 0; $i < $childrens.length; $i++) {


            if($childrens.hasClass("checked")){
                $countInitialStars++;

            }

        }


        $childrens.removeClass("checked");

        for ( $i = 0; $i <$childrens.length ; $i++) {

            if($thisElemIndex>=$i){

                $childrens.eq($i).addClass("checked");

            }
        }



    });



    $(".rate .fa.fa-star").on("mouseout",function () {

        $ThisElemParent=$(this).parent();


        $thisElemIndex=$(this).index();

        //childrens array
        $childrens=$ThisElemParent.find("span.fa.fa-star");

        $countInitialStars=0;

        for ($i = 0; $i < $childrens.length; $i++) {


            if($childrens.hasClass("checked")){
                $countInitialStars++;

            }

        }

        $childrens.removeClass("checked");
    });




}

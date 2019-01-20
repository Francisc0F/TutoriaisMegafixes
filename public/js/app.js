//
//
//
// var app = angular.module("myApp",[],function ($interpolateProvider){
//
//     $interpolateProvider.startSymbol('<%');
//     $interpolateProvider.endSymbol('%>');
//
// });
//
//
// app.controller("loginCtrl", function($scope) {
//
//
//
//     $scope.resetForm = function (form) {
//
//         form.$setPristine();
//
//     }
//
// });
// app.controller("registerCtrl", function($scope) {
//
//
//
//     $scope.resetForm = function (form) {
//
//         form.$setPristine();
//
//     }
//
// });
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


    messageAlert();


    admin();



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


//Alert message

function messageAlert() {

    setTimeout(function (){
            $("#message").fadeOut();
        },4000);




}


Tabulator.prototype.extendModule("ajax", "defaultConfig", {
    type:"post",
    contentType : "application/json; charset=utf-8"
});

function admin() {





    function call(Url) {
        $.getJSON(Url, function(result){
            nestedData=result;
            console.log(nestedData);
        });

    }
   call("http://127.0.0.1:8000/getAuthors");


   // $("#ControllerAdmin-table").tabulator("nestedData","http://127.0.0.1:8000/getAuthors");

    var openButton = function(value, data, cell, row, formatterParams){ //plain text value
        var button = $("<a>Edit Row</a>");

        button.on("click", function(){
         console.log(data);
        });

        return button;
    };

    var table = new Tabulator("#ControllerAdmin",
        {
            ajaxURL: "http://127.0.0.1:8000/getAuthors",
            height: "auto",
            layout: "fitColumns",
            resizableColumns: true,

            columns: [
                {title: "Id", field: "id"},
                {title: "tipo_utilizador", field: "tipo_utilizador"},
                {title: "name", field: "name"},
                {title: "created_at", field: "created_at"},
                {title: "img_capa", field: "img_profile_utilizador"},
                {title: "cidade_utilizador", field: "cidade_utilizador"},
                {title: "pais_utilizador", field: "pais_utilizador"},
                {title:"Edit", field:"id", formatter:function(cell, formatterParams, onRendered){
                        //cell - the cell component
                        //formatterParams - parameters set for the column
                        //onRendered - function to call when the formatter has been rendered

                        hrf ='href="/acc/'+ cell.getValue() +'">Edit</a>';
                        link = '<a class="btn btn-success"';

                         result =  link.concat(hrf);
                        return result; //return the contents of the cell;
                    }}  ],



        });





}
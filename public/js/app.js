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
    $(function() {
        $('textarea#froala-editor').froalaEditor({
            toolbarButtons: ['undo', 'redo' , '|', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'outdent', 'indent', 'clearFormatting', 'insertTable', 'html'],
            toolbarButtonsXS: ['undo', 'redo' , '-', 'bold', 'italic', 'underline'],
            quickInsertTags:[],
            height: 300
        })
    });

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

    confirmDelete();


    //tem de ser a ultima
    admin();



// text area format

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

function confirmDelete(){


    $(".apagar-tutorial").click(function() {
        return confirm("Deseja prosseguir com o delete?");
    });

    $(".apagar").click(function() {
        return confirm("Deseja prosseguir com o delete?");
    });


}



Tabulator.prototype.extendModule("ajax", "defaultConfig", {
    type:"post",
    contentType : "application/json; charset=utf-8"
});

function admin() {




    //
    //  function call(Url) {
    //      $.getJSON(Url, function(result){
    //          nestedData=result;
    //          console.log(nestedData);
    //      });
    //
    //  }
    // call("http://127.0.0.1:8000/getAuthors");


    // $("#ControllerAdmin-table").tabulator("nestedData","http://127.0.0.1:8000/getAuthors");



    var table = new Tabulator("#ControllerAdmin",
        {
            ajaxURL: "http://127.0.0.1:8000/getAuthors",
            height: "auto",
            layout: "fitColumns",
            resizableColumns: true,

            columns: [

                {title: "tipo_utilizador", field: "tipo_utilizador"},
                {title: "name", field: "name"},
                {title: "email", field: "email"},
                {title: "created_at", field: "created_at"},
                {title: "profile pic",field:"img_profile_utilizador", formatter:function(cell, formatterParams, onRendered){
                        //cell - the cell component
                        //formatterParams - parameters set for the column
                        //onRendered - function to call when the formatter has been rendered
                        link ="/storage/Fotos_utilizadores/";

                        img ='<img class="" src="'+link+cell.getValue()+'';
                        img2 ='" >';

                        result =  img.concat(img2);
                        return result; //return the contents of the cell;
                    }},
                {title: "cidade_utilizador", field: "cidade_utilizador"},
                {title: "pais_utilizador", field: "pais_utilizador"},
                {title:"Edit", field:"id", formatter:function(cell, formatterParams, onRendered){
                        //cell - the cell component
                        //formatterParams - parameters set for the column
                        //onRendered - function to call when the formatter has been rendered

                        edit2 ='href="/acc/'+ cell.getValue() +'">Edit</a>';
                        edit1 = '<a class="btn btn-success"';

                        apagar2 ='href="/utilizador/destroy/'+ cell.getValue() +'">Apagar</a>';
                        apagar1 = '<a class="ml-2 btn btn-success apagar"';

                        result =  edit1.concat(edit2) + apagar1.concat(apagar2);
                        return result; //return the contents of the cell;
                    }}  ],
            // rowFormatter:function(row){
            //     //create and style holder elements
            //     var holderEl = document.createElement("div");
            //     var tableEl = document.createElement("div");
            //
            //
            //
            //     holderEl.appendChild(tableEl);
            //
            //     row.getElement().appendChild(holderEl);
            //
            //     var subTable = new Tabulator(tableEl, {
            //         layout:"fitColumns",
            //         data:row.getData().tutoriais,
            //         columns:[
            //             {title:"id", field:"id", sorter:"id"},
            //             {title:"id_categoria", field:"id_categoria"},
            //             {title:"id_utilizador", field:"id_utilizador"},
            //             {title:"titulo", field:"titulo", sorter:"titulo"},
            //             {title:"descricao", field:"descricao"},
            //             {title:"img_capa", field:"img_capa"},
            //             {title:"num_views", field:"num_views"},
            //             {title:"dificuldade", field:"dificuldade"},
            //             {title:"Edit", field:"id", formatter:function(cell, formatterParams, onRendered){
            //                     //cell - the cell component
            //                     //formatterParams - parameters set for the column
            //                     //onRendered - function to call when the formatter has been rendered
            //
            //                     edit2 ='href="/acc/'+ cell.getValue() +'">Edit</a>';
            //                     edit1 = '<a class="btn btn-success"';
            //
            //                     apagar2 ='href="/acc/'+ cell.getValue() +'">Apagar</a>';
            //                     apagar1 = '<a class="ml-2 btn btn-success"';
            //
            //                     result =  edit1.concat(edit2) + apagar1.concat(apagar2);
            //                     return result; //return the contents of the cell;
            //                 }}
            //         ]
            //     })
            // }
            //
            //

        });





}
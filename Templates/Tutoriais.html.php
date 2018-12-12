

<!--  bread crump -->

<!---->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col">-->
<!--            <nav aria-label="breadcrumb">-->
<!--                <ol class="breadcrumb">-->
<!--                    <li class="breadcrumb-item"><a href="">Home</a></li>-->
<!--                    <li class="breadcrumb-item"><a href="">Category</a></li>-->
<!--                    <li class="breadcrumb-item active" >Sub-category</li>-->
<!--                </ol>-->
<!--            </nav>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->


<div id="tutoriais" class="container mt-3">
    <div class="row">
        <!-- categories list -->
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                <ul class="list-group">
                    <li class="list-group-item list-category"><a href="">Cras justo odio</a></li>
                    <li class="list-group-item list-category" ><a href="">Dapibus ac facilisis in</a></li>
                    <li class="list-group-item list-category"><a href="">Morbi leo risus</a></li>
                    <li class="list-group-item list-category"><a href="">Porta ac consectetur ac</a></li>
                    <li class="list-group-item list-category"><a href="">Vestibulum at eros</a></li>
                </ul>
            </div>

         <!-- most relevant item-->
<!--            <div class="card bg-light mb-3">-->
<!--                <div class="card-header bg-success text-white text-uppercase">Last product</div>-->
<!--                <div class="card-body">-->
<!--                    <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />-->
<!--                    <h5 class="card-title">Product title</h5>-->
<!--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--                    <p class="bloc_left_price">99.00 $</p>-->
<!--                </div>-->
<!--            </div>-->

        </div>


        <!-- items by categories -->
        <div class="col">
            <div class="row ">

                <?php for($i = 0 ; $i<6;$i++) { ?>
                <div class="col-12 col-md-6 col-lg-4 <?php if($i > 2) echo "mt-3" ?>">
                    <div class="card">
                        <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="" title="View Product">Product title</a> <small>3 days ago</small></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">99.00 $</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>

                <!-- pagination -->
                <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>

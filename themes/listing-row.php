<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="content">

                <div class="document-title">
                    <h1>Row Version</h1>

                    <ul class="breadcrumb">
                        <li><a href="#">Superlist</a></li>
                        <li><a href="#">Listing</a></li>
                    </ul>
                </div><!-- /.document-title -->

                <form class="filter" method="post" action="?">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <input type="text" placeholder="Keyword" class="form-control">
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->

                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" title="Select Location">
                                    <option>Bronx</option>
                                    <option>Brooklyn</option>
                                    <option>Manhattan</option>
                                    <option>Staten Island</option>
                                    <option>Queens</option>
                                </select>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->

                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" title="Select Category">
                                    <option value="">Automotive</option>
                                    <option value="">Jobs</option>
                                    <option value="">Nightlife</option>
                                    <option value="">Services</option>
                                </select>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->

                    <hr>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="filter-actions">
                                <a href="#"><i class="fa fa-close"></i> Reset Filter</a>
                                <a href="#"><i class="fa fa-save"></i> Save Search</a>
                            </div><!-- /.filter-actions -->
                        </div><!-- /.col-* -->

                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">Redefine Search Result</button>
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->
                </form>

                <h2 class="page-title">
                   results matching your query

                    <form method="get" action="?" class="filter-sort">
                        <div class="form-group">
                            <select title="Sort by">
                                <option name="price">Price</option>
                                <option name="rating">Rating</option>
                                <option name="title">Title</option>
                            </select>
                        </div><!-- /.form-group -->
                        
                        <div class="form-group">
                            <select title="Order">
                                <option name="ASC">Asc</option>
                                <option name="DESC">Desc</option>
                            </select>
                        </div><!-- /.form-group -->
                    </form>
                </h2><!-- /.page-title -->

                <!-- show submission list page -->
                <div class="cards-row">
                    <?php 
                    $result=mysqli_query($conn,"SELECT * FROM db_listing WHERE listing_stat<>'3'"); 
                    while($row=mysqli_fetch_array($result))  
                    {?>
                        <div class="card-row">
                            <div class="card-row-inner">
                                <div class="card-row-image" data-background-image="assets/img/tmp/product-1.jpg">
                                    <div class="card-row-label"><?=$row["list_category"]?></div><!-- /.card-row-label -->
                                    <div class="card-row-price"><a href="/?page=listing-details&id=<?=$row['submission_list_id']?>">View Details</div></a>

                                </div><!-- /.card-row-image -->

                                <div class="card-row-body">
                                    <p style="color: white;"> <h2  class="card-row-title"><a href="/?page=listing-details&id=<?=$row['submission_list_id']?>"><?=$row['list_title']?></a></h2></p>
                                    <div class="card-row-content"><?=$row["list_description"]?>

                                    </div><!-- /.card-row-content -->
                                </div><!-- /.card-row-body -->

                            </div><!-- /.card-row-inner -->
                        </div><!-- /.card-row -->
                    <?php }?>
                </div><!-- /col-12-->

            <div class="pager">
                <ul>
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">5</a></li>
                    <li class="active"><a>6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div><!-- /.pagination -->


            </div><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->
<br>
<br>
<br>
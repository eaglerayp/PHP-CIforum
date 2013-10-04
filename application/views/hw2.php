<?php include("_caroheader.php"); ?> 
<div class="container home">
<?php include("_navbar.php"); ?> 
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?=base_url("/img/examples/slide-01.jpg")?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>SDM Hw2.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?=base_url("/img/examples/slide-02.jpg")?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?=base_url("/img/examples/slide-03.jpg")?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->

    <div class="content">  
        <div>  
            <?php if(count($newArticles) == 0 ){ ?>  
                很抱歉，目前尚無文章  
            <?php }else{ ?>  
            <h1>最新文章</h1>  
            <table class="table">   
                <tr>  
                    <td>標題</td>  
                    <td>作者</td>  
                    <td>點閱次數</td>  
                </tr>  
                <?php foreach ($newArticles as $article) {   ?>  
                <tr>  
                    <td>  
                        <a href="<?=site_url("article/view/".$article->PostID)?>">  
                            <?=htmlspecialchars($article->Title)?>  
                        </a>  
                    </td>  
                    <td>  
                        <?=htmlspecialchars($article->UserID)?>  
                    </td>  
                    <td>  
                        <?=htmlspecialchars($article->views)?>  
                    </td>
                    <td>  
                        <?=htmlspecialchars($article->Timestamp)?>  
                    </td>    
                <?php } ?>  
            </table>  
            <?php }   ?>  
              
        </div>  
    


    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="../assets/js/holder/holder.js"></script>

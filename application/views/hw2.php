<?php include("_caroheader.php"); ?> 
<?php include("_navbar.php"); ?> 
<?php include("_carosoul.php"); ?> 

    <div class="container home"> 
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
                    <td>發表時間</td>   
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
    <script src="<?=base_url("/js/jquery.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-transition.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-alert.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-modal.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-dropdown.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-scrollspy.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-tab.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-tooltip.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-popover.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-button.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-collapse.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-carousel.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-typeahead.js")?>"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="../assets/js/holder/holder.js"></script>
<?php include("_footer.php"); ?> 
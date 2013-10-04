    <?php include("_header.php"); ?> 

    <p>This is a paragraph.</p>
    <div class="container article-view">  
        <?php include("_navbar.php") ?>    
        <!-- content -->  
        <div class="content">  
            <table class="table table-bordered"> 
            <!-- for AJAX  the PostID --> 
                <tr>  
                    <td>文章編號</td>  
                    <td id="PostID"><?=htmlspecialchars($Post->PostID)?></td>  
                </tr>  
                <tr>  
                    <td>作者</td>  
                    <td id="UserID"><?=htmlspecialchars($Post->UserID)?></td>  
                </tr>  
                <tr>  
                    <td>標題</td>  
                    <td id="title"><?=htmlspecialchars($Post->Title)?></td>  
                </tr>  
                <tr>  
                    <td > 發表時間 </td>    
                    <td><?=htmlspecialchars($Post->Timestamp)?></td>   
                </tr>  
            </table>  
            <legend>Content</legend>
            <pre><?=nl2br(htmlspecialchars($Post->Content));?></pre>

            <legend>Reply</legend>

            <table id="Replies" class="table table-bordered">  
            </table>  

            <input class="input-block-level" type="text" id="Reply" placeholder="Reply">  
            <button id="submitreply" class="btn " type="button" onclick="AjaxReply();">確認</button>

        </div>  
    </div>  
    
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
<?php

$data =json_decode('{"UserID":1,"reply":"asda","PostID":3}',true);
print_r ($data);
echo ($data['UserID']);
//echo (($data['UserID']+";"+$data['reply']+";"+$data['PostID']));
?>

<script type="text/javascript">
    console.log("123");
    var URLS= 'http://localhost/cihw2/index.php/article/reply';
    var Reply= $("#Reply").val();
    var UserID= $('#UserID').text();
    var PostID =$("#PostID").text();
    var jsdata= {"UserID":UserID,"reply":Reply,"PostID":+PostID}; 
    //console.log("js:"+jsdata);
    //console.log(jsdata.UserID);
    


    function AjaxReply() {   
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: URLS,
            data: jsdata,
            success: function(data) { 
                $('#Replies').append("<td>"+data.Author+":"+data.Content+"   "+data.Timestamp+"</td>");
            },
            error : function(data) { 
                console.log("F"+data); 
            }
        });
    }//end AjaxReply
    //[22:09:28.261] "T        {"ReplyID":"14","Author":"1","Content":"asda","Timestamp":"2013-10-04 22:09:28","PostID":"3"}null"
</script>

    <?php include("_footer.php"); ?>  
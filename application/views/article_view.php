    <?php include("_header.php"); ?> 
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
                <tr>
                    <td class="span2">回應者</td>
                    <td class="span8">回應內容</td>
                    <td class="span2">回應時間</td>
                </tr> 
            <?php
                
                foreach ($Replies as $row)
                { 
                   echo ("<tr>");
                   echo '<td class="span2">';
                   echo ($row["Author"]);
                   echo "</td>";
                   echo '<td class="span8">';
                   echo ($row["Content"]);
                   echo "</td>";
                   echo '<td class="span2">';;
                   echo ($row["Timestamp"]);
                   echo "</td>";
                   echo ("</tr>");
                }
            ?>
            </table>  

            <input class="input-block-level" type="text" id="ReplyContent" placeholder="Reply">  
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

<script type="text/javascript">
    var URLS= 'http://localhost/cihw2/index.php/article/reply';
    var Reply= $('#ReplyContent').val();
    var UserID= $('#UserID').text();
    var PostID =$("#PostID").text();
    console.log(Reply);
    var jsdata= {"UserID":UserID,"reply":Reply,"PostID":+PostID}; 

    function AjaxReply() {   
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: URLS,
            data: jsdata,
            success: function(data) { 
                $('#Replies').append("<tr><td class='span2'>"+data.Author+"</td><td class='span8'>"+data.Content+" </td><td class='span2'> "+data.Timestamp+"</td></tr>");
            },
            error : function(data) { 
                alert("error!"); 
            }
        });
    }//end AjaxReply
    //[22:09:28.261] "T        {"ReplyID":"14","Author":"1","Content":"asda","Timestamp":"2013-10-04 22:09:28","PostID":"3"}null"
</script>

    <?php include("_footer.php"); ?>  
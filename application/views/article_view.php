    <?php include("_header.php"); ?>  
    <div class="container article-view">  
        <?php include("_navbar.php") ?>    
        <!-- content -->  
        <div class="content">  
            <table class="table table-bordered">  
                <tr>  
                    <td>作者</td>  
                    <td><?=htmlspecialchars($Post->UserID)?></td>  
                </tr>  
                <tr>  
                    <td>標題</td>  
                    <td><?=htmlspecialchars($Post->Title)?></td>  
                </tr>  
                <tr>  
                    <td> 內容 </td>  
                    <td><?=nl2br(htmlspecialchars($Post->Content))?></td>  
                </tr>  
            </table>  
        </div>  
    </div>  
    <?php include("_footer.php"); ?>  
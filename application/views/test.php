<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="<?=base_url("/js/jquery.js")?>"></script> 
<title></title>
</head>
<body>
    <?php

    ?>
    <script type="text/javascript">
    //<![CDATA[
    var URLS='http://localhost/cihw2/index.php/TestAjax/testPost'
    var jsdata= {"UserID":1,"reply":"asda","PostID":3}; 
    //console.log("js:"+jsdata);
    var obj = JSON.parse(jsdata); 
    function testAjaxPost() {   
        $.ajax({
            type: 'POST',
            url: URLS,
            data: jsdata,
            success: function(data) { 
                console.log("T"+data); 
            },
            error : function(data) { 
                console.log("F"+data); 
            },
                //dataType: 'json'
        });
    }//end AjaxReply
    </script>
 <p></p>
<form id='frm1' method='post'>
<table border="0">
<tr>
<td>
<input type='button' id='btnTestPost' value='Post' onclick='testAjaxPost();' />
<input type='button' id='btnTestPara' value='Para' onclick='testAjaxPara();' />
</td>
</tr>
</table>
</form>    
</body>
</html>
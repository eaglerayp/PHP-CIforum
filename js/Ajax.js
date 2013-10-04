function showReply(e) {
            document.write("INSHOW");
            $(e.target).attr('disabled', true);
            $.ajax({
            url: '/index.php/article/reply',
            data: {UserID:$('UserID').val(),reply:$('#Reply').val(),postID::$('#PostID').val()},
            dataType: 'json'
            error: function(xhr) {
                alert('Ajax request 發生錯誤');
                $(e.target).attr('disabled', false);
            },success: function(response) {
                $('#Replies').append("<td>Appended item"+html(response.UserID)+html(response.Content)+html(response.Timestamp)+"</td>");
                setTimeout(function(){
                    $(e.target).attr('disabled', false);
                }, 3000);
              }
            });
}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
</head>
<body>
<label>Rno</label>  
 <input type="text" name="rno"><br>
 <label>Name</label>  
 <input type="text" name="name"><br>
 <label>Subject</label>  
 <input type="text" name="subject"><br>
 <label>Title</label>  
 <input type="text" name="title"><br>
 <label>Date</label>  
 <input type="date" name="date"><br>
 <label>Percent</label>  
 <input type="text" name="percent"><br>
 <button onclick="editPost() ">Edit</button>

    <script>
        var postId = window.location.pathname.split('/')[2];
        $.ajax({
        url: "/api/post/" + postId,
        type: 'GET',
        dataType: 'json', // added data type
            success: function(res) {
                $('[name=rno]').val(res.rno);
                $('[name=name]').val(res.name);
                $('[name=subject]').val(res.Subject);
                $('[name=title]').val(res.title);
                $('[name=date]').val(res.date);
                $('[name=percent]').val(res.percent);

            }
        });
        function editPost(){
            var editedData = {
                rno: $('[name=rno]').val(),
                name: $('[name=name]').val(),
                Subject:$('[name=subject]').val(),
                title:$('[name=title]').val(),
                date:$('[name=date]').val(),
                percent:$('[name=percent]').val(),

            }
            $.ajax({
            url: "/api/dataupdate" + postId,
            type: 'POST',
            data: editedData,
            dataType: 'json', // added data type
                success: function(res) {
                    window.location.replace("/api/list");
                }
            });

}
        
    </script>
</body>
</html>
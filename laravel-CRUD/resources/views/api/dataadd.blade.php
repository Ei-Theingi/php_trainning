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
 <button onclick="createPost()">Save</button>

 <script>
        function createPost() {
            var createdData = {
                rno: $('[name=rno]').val(),
                name: $('[name=name]').val(),
                Subject:$('[name=subject]').val(),
                title:$('[name=title]').val(),
                data:$('[name=date]').val(),
                percent:$('[name=percent]').val(),
            }
            $.ajax({
            url: "/api/datacreate",
            type: 'POST',
            data: createdData,
            dataType: 'json', // added data type
                success: function(res) {
                    console.log("hey");
                    window.location.replace("/api/list");
                    
                }
            });
        }
</script>
</body>
</html>
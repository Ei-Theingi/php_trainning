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
<a href="/api/adddata">Create</a>
<table>
    <thread>
        <th>ID</th>
        <th>Rno</th>
        <th>Name</th>
        <th>Subject</th>
        <th>Title</th>
        <th>Date</th>
        <th>Percent</th>
        <th>Action</th>
    </thread>
     <tbody>
      
     </tbody>   
</table>
<script>
 $.ajax({
        url: "/api/datalist",
        type: 'GET',
        dataType: 'json', // added data type
            success: function(res) {
                res.forEach(data => {
                    $('tbody').append(
                  `<tr>
                  <td>${data.id}</td>
                  <td>${data.rno}</td>
                 <td>${data.name}</td>
                  <td>${data.Subject}</td>
                  <td>${data.title}</td>
                 <td>${data.date}</td>
                  <td>${data.percent}</td>
                  <td><a href="/api/edit/${data.id}"><button>Edit</button></a></td>
                 <td><button onclick="deletePost(${data.id})">Delete</button>
                 </tr>`
                );
                });
            }
        });
        function deletePost(id) {
            alert(id);

            $.ajax({
            url: `/api/datadelete/${id}`,
            type: 'DELETE',
            success: function(result) {
                alert("success");
                location.reload();
            },
            error: function(result) {
                alert("fail");
            }
            });
        }
    </script>

</body>
</html>


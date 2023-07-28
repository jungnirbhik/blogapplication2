<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>List post</title>
  </head>
  <body>
    <div class ="container mt-5">
        <div class = "row">
            <div class ="col-md-12">
                <div class="card-header">
                    <h4>Listing of the Post</h4>
                    <div class="card-body">
                       
                        <table class ="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class ="listingpost">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
         $(document).ready(function(){
           getdata();
        });
        function getdata()
        {
            $.ajax({
                type:"GET",
                url:"listing process.php",
                success: function(response){
              // console.log(response);
              $.each(response,function (key,value){
                    //console.log(value['username']);
                    $('.listingpost').append('<tr>'+
                                '<td>'+value['username']+'</td>\
                                <td>'+value['email']+'@gmail.com</td>\
                                <td>'+value['title']+'</td>\
                                <td>'+value['description']+'</td>\
                                <td>'+value['image']+'<img class="src" src="path_to_image.jpg" alt="Image"></td>\
                                <td>\
                                    <a href="" class="badge btn-info">View</a>\
                                    <a href="" class="badge btn-primary">Edit</a>\
                                    <a href="" class="badge btn-danger">Delete</a>\
                                </td>\
                                </tr>');
              });
                   }
                });
                   
        }
        </script>
  </body>
</html>
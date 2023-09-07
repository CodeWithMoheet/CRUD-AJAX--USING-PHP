<!-- HTML STARTS FROM HERE -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD Operations Using Ajax</title>
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-danger text-center">CRUD USING AJAX</h1>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Open modal
            </button>
        </div>
        <h2 class="text-success">All Records</h2>
        <div id="records_contant">

        </div>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">CRUD USING AJAX</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Firstname:</label>
                            <input type="text" name="" id="firstname" class="form-control" placeholder="Firstname">
                        </div>
                        <div class="form-group">
                            <label>Lastname:</label>
                            <input type="text" name="" id="lastname" class="form-control" placeholder="lastname">
                        </div>
                        <div class="form-group">
                            <label>Email ID:</label>
                            <input type="email" name="" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>phone number:</label>
                            <input type="text" name="" id="mobile" class="form-control" placeholder="Phone number">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"
                            onclick="addRecord()">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   

    <!-- <script>function readRecords(){
        var readRecord = "readrecord";
        $.ajax({
            url:"backend1.php",
            type:"post",
            data:{readrecord:readrecord },
            success:function(data,status){
                $('#records_contant').html(data);
            }
        });
    }</script> -->
   <script >
        function addRecord() {
            var firstname = $('#firstname').val();//$ means we are using the jquery 
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();

            alert("Hello");

            //now using ajax send values on backend
            //the parameters specifies one and more name value pairs for the AJAX request
            $.ajax({
                url: "backend1.php", //where we are sending the data
                type: 'post',//using post to send the data
                data: { 
                    firstname : firstname,
                    lastname : lastname,
                    email : email,
                    mobile : mobile
                },//sending the data or specifices the data to be send on the server
                dataType:'json',
                success : function(data) {              
                    alert('Data: '+data);
                },
                error : function(request,error)
                {
                    alert("Request: "+JSON.stringify(request));
                }
            });
        }
    </script>

   
</body>

</html>
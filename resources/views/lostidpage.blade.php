<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href="lostform/fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="lostform/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="lostform/css/style.css">

    <title>Lost and found form</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
              
              <h3 class="heading mb-4">Lets find the owner #KenyansForKenyans</h3>
              <p>Report a lost and found National ID</p>

              <p><img src="lostform/images/find.jpg" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              
            <form class="mb-5" method="post" id="contactForm" name="contactForm" enctype="multipart/form-data" action="{{ route('lostdocument.store') }}"> 
                @csrf
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="firstname_on_id" id="firstname_on_id" placeholder="First name on ID" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="lastname_on_id" id="lastname_on_id" placeholder="Last name on ID" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="id_number" id="id_number" placeholder="Enter the ID Number" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <select class="form-control" name="sex" id="sex" required>
                            <option value="" disabled selected>Select Sex</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <textarea class="form-control" name="location_description" id="location_description" cols="30" rows="3" placeholder="Brief description of the location where the Document was found" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <select class="form-control" name="county" id="county" required>
                            <option value="" disabled selected>Select County</option>
                            <option value="Nairobi">Nairobi</option>
                            <option value="Mombasa">Mombasa</option>
                            <option value="Kisumu">Kisumu</option>
                            <option value="Nakuru">Nakuru</option>
                            <option value="Uasin Gishu">Uasin Gishu</option>
                            <!-- Add more counties as necessary -->
                        </select>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="document_image">Upload Image of Lost Document</label>
                        <input type="file" class="form-control" name="document_image" id="document_image" accept="image/*" required>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success rounded-0 py-2 px-4">
                            <i class="fas fa-upload"></i> Submit Document
                        </button>
                        <span class="submitting"></span>
                    </div>
                </div> 

            </form>



              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="lostform/js/jquery-3.3.1.min.js"></script>
    <script src="lostform/js/popper.min.js"></script>
    <script src="lostform/js/bootstrap.min.js"></script>
    <script src="lostform/js/main.js"></script>

  </body>
</html>
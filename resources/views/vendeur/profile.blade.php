
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>venduer profile </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'><link rel="stylesheet" href="./style.css">

    <style>
                body {
        padding: 0;
        margin: 0;
        font-family: "Lato", sans-serif;
        color: #000;
        }

        /*user-profile*/
        .user-profile .cardprofile {
        border-radius: 10px;
        }
        .user-profile .cardprofile h3 {
        font-size: 20px;
        font-weight: 700;
        }
        .user-profile .cardprofile .cardprofile-header .profile_img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin: 10px auto;
        border: 10px solid #ccc;
        border-radius: 50%;
        }
        .user-profile .cardprofile .cardprofile-body .side-menu .nav-link {
        font-size: 16px;
        color: #222;
        }
    </style>

</head>
<body>
<!-- partial:index.partial.html -->
<!-- User Profile -->
    <div class="user-profile py-4">
    <div class="container">
        <div class="row">
        <div class="col-lg-2">
            <div class="cardprofile shadow-sm">
            <div class="cardprofile-header bg-transparent text-center">
                <img class="profile_img" src="/images/notavialable.jpg" alt="">
                <h3 class="mt-3 mb-3">{{ $vendeur->username }}<span class="badge badge-primary ml-3"><i class="zmdi zmdi-star-circle"></i> Platinum</span></h3>
            </div>

            <div class="cardprofile-body">
                <div class="cardprofile cardprofile-body shadow-sm bg-primary border-0 mb-3">
                <h3 class="text-light text-center mb-0">nbr Total des produit : <big class="text-warning">{{ count($vendeur->produits) }}</big></h3>
                </div>
                <ul class="nav flex-column side-menu">

                <li class="nav-item">
                    <a href="/home" class="nav-link">home</a>
                </li>
                </ul>
            </div>
            </div>
        </div>


        <div class="col-lg-10">
            <div class="cardprofile shadow-sm mb-4">
            <div class="cardprofile-header bg-transparent border-0">
                <h3 class="mb-3"><i class="far fa-clone pr-1"></i>Shoping Status</h3>
            </div>

            <div class="cardprofile-body pt-0 ">
                <table class="table table-bordered">
                <tr class="bg-light">
                    <th>Image</th>
                    <th>Date</th>
                    <th>Libele</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Prix</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>

                @foreach ($vendeur->produits as $produit)
                <tr>
                    <td style="width: 20px;"><img class=" w-100" src="/storage/{{ $produit->image }}" alt="" srcset=""></td>
                    <td>{{ $produit->created_at }}</td>
                    <td>{{ $produit->libele }}</td>
                    <td>{{ $produit->description }}</td>
                    <td>{{ $produit->quantite }}</td>
                    <td>{{ $produit->prix }}</td>
                    <td>{{ $produit->category }}</td>
                    <td class=" pl-3 pr-0 ">
                    <a href="/vendeur/{{ $vendeur->id }}/{{ $produit->id }}">
                    <button type="button" class="btn btn-sm btn-danger">Remove</button></a>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
            </div>
            <div class="cardprofile shadow-sm mb-3">



            <div class="cardprofile shadow-sm mt-5">
            <div class="cardprofile-header bg-transparent border-0">
                <h3 class="mb-2"><i class="far fa-clone pr-1"></i>Ajouter Produit</h3>
            </div>
            <div class="cardprofile-body pt-0 border p-4">
                <form action="/add/{{ $vendeur->id }}/p" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Choose an image for your product</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class=" mb-1">libele</label>
                        <input type="text" class="form-control" id="name" aria-describedby="title" name="libele">
                    </div>
                    <div class="form-group">
                        <label class=" mb-1" for="description">description</label>
                        <input type="aria" class="form-control" id="description" aria-describedby="description" name="description">
                    </div>
                    <div class="form-group">
                        <label class=" mb-1" for="prix">prix</label>
                        <input type="number" class="form-control" id="prix" aria-describedby="prix" name="prix">
                    </div>
                    <div class="form-group">
                        <label class=" mb-1" for="Quantite">Quantite</label>
                        <input type="number" class="form-control" id="Quantite" aria-describedby="Quantite" name="quantite">
                    </div>
                    <div class="form-group">
                        <label for="Categories">Choose a Category :</label>
                        <select name="Categories" id="Categories">
                        <option value="shoe">shoe</option>
                        <option value="tshirt">T-shirt</option>
                        <option value="Other">Other</option>
                        </select>
                    </div>
                    <button type="submit" class=" btn-primary rounded">Add Product</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- /User Profile -->
<!-- partial -->

</body>
</html>

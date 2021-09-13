<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Panier</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/panier.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrap cf">
  <h1 class="projTitle">check out your <span>-products</span> in panier</h1>
  <div class="heading cf">
    <h1>My Cart</h1>
    <a href="/home" class="continue">Continue Shopping</a>
  </div>
  <div class="cart">
    <!--    <ul class="tableHead">
        <li class="prodHeader">Product</li>
        <li>Quantity</li>
        <li>Total</li>
        <li>Remove</li>
        </ul>-->
        <ul class="cartWrap">

            @foreach ($panier->produits as $produit )
            <?php $pQte = DB::table('panier_produit')->where('panier_id',$panier->id)->where('produit_id',$produit->id)->get('Qte');
            ?>


            <li class="items odd">
                <div class="infoWrap">
                    <div class="cartSection">
                    <img src="/storage/{{ $produit->image }}" alt="" class="itemImg" />
                    <p class="itemNumber">#QUE-007544-00{{ $produit->id }}</p>
                    <h3>{{ $produit->libele }}</h3>
                    <p> <input style="width: 26px;" type="text"  class="qty" placeholder="{{$pQte[0]->Qte}}" disabled/></p>
                    <p class="stockStatus">selected</p>
                    <p style="width:42px;"> </p>
                    <p> <input type="text"  class="qty" placeholder="{{ $produit->quantite }}" disabled/></p>
                    <p class="stockStatus"> In Stock</p>
                    </div>
                    <div class="prodTotal cartSection">
                    <p>${{ $produit->prix }}</p>
                    </div>
                        <div class="cartSection removeWrap">
                    <a href="/removep/{{ $panier->id }}/{{ $produit->id }}" class="remove">x</a>
                    </div>
                </div>
            </li>

            @endforeach
        </ul>
  </div>


  <div class="subtotal cf">
    <ul>
      <li class="totalRow"><span class="label">Subtotal</span><span class="value">${{ $prixtotal}}</span></li>

          <li class="totalRow"><span class="label">Shipping</span><span class="value">$5.00</span></li>

            <li class="totalRow"><span class="label">Tax</span><span class="value">$4.00</span></li>
            <li class="totalRow final"><span class="label">Total</span><span class="value">${{ $prixtotal + 9 }}</span></li>
      <li class="totalRow"><a href="/pay" class="btn continue">Checkout</a></li>
    </ul>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Home</title>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.css">
	<script src="bootstrap-3.3.4-dist/js/jquery-1.11.3.min.js"></script>
	<script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed navbar-default" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href='#'><span class="glyphicon glyphicon glyphicon-shopping-cart"><span> Rp. 31.360.000</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-left">
                <input type="text" class="form-control" style="width:100%;"placeholder="Search...">
            </form>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Best Produk</a></li>
            <li><a href="#contact">How to buy</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="profile.php">Profile</a></li>
                <li><a href="login.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </nav>
    <div class="container">
      <div class='row'>
        <div class='col-sm-12'>
          <br>
          <br>
          <br>
          <img src="sprpart.png" >
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading"><span class="glyphicon glyphicon-star-empty"></span> Our Produk !</div>
                <div class="panel-body">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                    </ul>   
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/1.jpg">
                            <div class="carousel-caption">
                              <h3>auah </h3>
                              <p>Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/2.jpg">
                            <div class="carousel-caption">
                              <h3>auah</h3>
                              <p>Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/3.jpg">
                            <div class="carousel-caption">
                              <h3>auah</h3>
                              <p>Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              </p>
                            </div>
                        </div>
                         <div class="item">
                            <img src="img/4.jpg">
                            <div class="carousel-caption">
                              <h3>auah</h3>
                              <p>Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              </p>
                            </div>
                        </div>
                         <div class="item">
                            <img src="img/5.jpg">
                            <div class="carousel-caption">
                              <h3>auah</h3>
                              <p>Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              Lorem ipsum dolor sit amet consectetur…
                              </p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
        <div class="panel panel-success">
                <div class="panel-heading"><span class="glyphicon glyphicon-shopping-cart"></span> Cart !</div>
                <div class="panel-body"> 
                    <table class="table">
                        <tr class="success">
                            <th>Barang </th>
                            <th>Jumlah </th>
                        </tr>
                        <tr>
                            <td>Ban</td>
                            <td><span class="badge badge-success">10</span></td>
                        </tr>
                        <tr>
                            <td>Pintu</td>
                            <td><span class="badge badge-success">8</span></td>
                        </tr>
                        <tr>
                            <td>Kursi</td>
                            <td><span class="badge badge-success">100</span></td>
                        </tr>
                        <tr>  
                            <td class="sukses"></td>
                            <td class="sukses"><span class="label label-sukses">Rp. 1.000.000 </span></td>
                        </tr>
                    </table>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal"> View Cart </button>
                    <button type="button" class="btn btn-success btn-sm"  >Chek Out </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row"> 
    <div class="col-xs-6 col-sm-3">   
    <div  id="hover-cap-4col">
      <div class="thumbnail">
        <div class="caption">
            <h4><b>Tang</b></h4>
            <p>Tang is balblablalbalba blalbalbalba balblablaba balbalbla</p>
            </p>
        </div>
        <img src="img/1.jpg" class='img-responsive'>
        <br>
        <br>
        <br>
        <br>
        <b><font color=blue>Rp. 2.000 </color> </b>
          <br>          
            <button type="button" class="btn btn-warning btn-sm notif">Tambah ke keranjang</button>
            <button type="button" class="btn  btn-success btn-sm">Detail</button>
      </div>
    </div>
    </div>
    <div class="col-xs-6 col-sm-3">  
    <div  id="hover-cap-4col">
      <div class="thumbnail">
        <div class="caption">
            <h4><b>Mur</b></h4>
            <p>Mur balblablalbalba blalbalbalba balblablaba balbalbla</p>
            </p>
        </div>
        <img src="img/2.jpg" class='img-responsive'>
        <br>
        <b><font color=blue>Rp. 1.000 </color> </b>
        <br>
          <button type="button" class="btn btn-warning btn-sm notif">Tambah ke keranjang</button>
          <button type="button" class="btn btn-success btn-sm">Detail</button>
      </div>
    </div>
    </div>
    <div class="col-xs-6 col-sm-3">  
    <div  id="hover-cap-4col">
      <div class="thumbnail">
        <div class="caption">
            <h4><b>Kursi</b></h4>
            <p>Kursi balblablalbalba blalbalbalba balblablaba balbalbla</p>
            </p>
            </div>
        <img src="img/3.jpg" class='img-responsive'>
        <br>
        <br>
        <br>
        <br>
        <b><font color=blue>Rp. 300.000</color> </b>
        <br>
          <button type="button" class="btn btn-warning btn-sm notif">Tambah ke keranjang</button>
          <button type="button" class="btn btn-success btn-sm">Detail</button>
      </div>
    </div>
    </div>
    <div class="col-xs-6 col-sm-3">  
    <div  id="hover-cap-4col">
      <div class="thumbnail">
        <div class="caption">
            <h4><b>Kursi type 2</b></h4>
            <p>kursi type 2 balblablalbalba blalbalbalba balblablaba balbalbla</p>
            </p>
        </div>
        <img src="img/4.jpg" class='img-responsive'>
        <br>
        <br>
        <b><font color=blue>Rp. 500.000 </color> </b>
        <br>
          <button type="button" class="btn btn-warning btn-sm notif">Tambah ke keranjang</button>
          <button type="button" class="btn btn-success btn-sm">Detail</button>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-3">   
        <div  id="hover-cap-4col">
          <div class="thumbnail">
            <div class="caption">
              <h4><b>Baud</b></h4>
                <p>Baud balblablalbalba blalbalbalba balblablaba balbalbla</p>
                </p>
            </div>
            <img src="img/5.jpg" class='img-responsive'>
            <br>
            <br>
            <b><font color=blue>Rp. 5.000 </color> </b>
            <br>
              <button type="button" class="btn btn-warning btn-sm notif">Tambah ke keranjang</button>
              <button type="button" class="btn  btn-success btn-sm">Detail</button>
          </div>
        </div>
        </div>
        <div class="col-xs-6 col-sm-3">  
        <div  id="hover-cap-4col">
          <div class="thumbnail">
            <div class="caption">
                <h4><b>Ban</b></h4>
                <p>Ban balblablalbalba blalbalbalba balblablaba balbalbla</p>
                </p>
            </div>
            <img src="img/6.jpg" class='img-responsive'>
            <br>
            <b><font color=blue>Rp. 100.000 </color> </b>
            <br>
              <button type="button" class="btn btn-warning btn-sm notif">Tambah ke keranjang</button>
              <button type="button" class="btn btn-success btn-sm">Detail</button>
          </div>
        </div>
        </div>
        <div class="col-xs-6 col-sm-3">  
        <div  id="hover-cap-4col">
          <div class="thumbnail">
            <div class="caption">
              <h4><b>Pintu</b></h4>
              <p>Ventilasi balblablalbalba blalbalbalba balblablaba balbalbla </p>
              </p>
            </div>
            <img src="img/7.jpg" class='img-responsive'>
            <br>
            <br>
            <b><font color=blue>Rp. 45.000 </color> </b>
            <br>
              <button type="button" class="btn btn-warning btn-sm notif">Tambah ke keranjang</button>
              <button type="button" class="btn btn-success btn-sm">Detail</button>
          </div>
        </div>
        </div>
        <div class="col-xs-6 col-sm-3">  
        <div  id="hover-cap-4col">
          <div class="thumbnail">
            <div class="caption">
              <h4><b>Gerbong</b></h4>
              <p>Gerbong is balblablalbalba blalbalbalba balblablaba balbalbla </p>
              </p>
            </div>
            <img src="img/8.jpg" class='img-responsive'>
            <br>
            <b><font color=blue>Rp. 2.000.000</color> </b>
            <br>
              <button type="button" class="btn btn-warning btn-sm notif">Tambah ke keranjang</button>
              <button type="button" class="btn btn-success btn-sm">Detail</button>
          </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-success">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Keranjang Belanja Anda !</h4>
            </div>
            <div class="modal-body">          
      <table class="table">
        <thead>
          <tr>
            <th>Barang</th>
            <th>Harga </th>
            <th>Jumlah </th>
            <th>Optional</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ban</td>
            <td>1.00.000</td>
            <td>10</td>
            <td>
                <a href="#">
                <span class="glyphicon glyphicon-plus-sign"></span>
                </a>
                <a href="#">
                <span class="glyphicon glyphicon-minus-sign"></span>
                </a>
                <a href="#">
                <span class="glyphicon glyphicon-remove-sign"></span>
                </a>
            </td>
          </tr>
          <tr>
            <td>Pintu</td>
            <td>360.000</td>
            <td>8</td>
            <td>
                <a href="#">
                <span class="glyphicon glyphicon-plus-sign"></span>
                </a>
                <a href="#">
                <span class="glyphicon glyphicon-minus-sign"></span>
                </a>
                <a href="#">
                <span class="glyphicon glyphicon-remove-sign"></span>
                </a>
            </td>
          </tr>
          <tr>
             <td>Kursi</td>
            <td>30.000.000</td>
            <td>100</td>
            <td>
                <a href="#">
                <span class="glyphicon glyphicon-plus-sign"></span>
                </a>
                <a href="#">
                <span class="glyphicon glyphicon-minus-sign"></span>
                </a>
                <a href="#">
                <span class="glyphicon glyphicon-remove-sign"></span>
                </a>
            </td>
          </tr>
          <tr>
             <th>Total</th>
            <th>31.360.000</th>
            <th>118</th>
            <td>
            </td>
          </tr>
        </tbody>
      </table>
            </div>
            <div class="modal-footer bg-success">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Check Out</button> 
            </div>
          </div> 
        </div>
      </div>
      </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <footer>
            <p style="font-size: 12px; text-align: center;">&#169; 2018 - All Right reserved • Design by <a class="create-by" href="">SPAREPART TRAIN</a></p>
          </footer>


 
</body>
</html>
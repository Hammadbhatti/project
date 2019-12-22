<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Home Page</title>
    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- bootstrap end -->
 <!-- table start -->
    <!-- links of data table -->
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <!-- end links of data table -->
    <!-- table end -->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand h2change" href="#">Laraib Mobile Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown navani">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Brands
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="iphone">IPHONE</a>
                <a class="dropdown-item" href="samsung">SAMSUNG</a>
                <a class="dropdown-item" href="huawei">HUAWAI</a>
              </div>
            </li>

              <li class="nav-item">
                <a class="nav-link navani" href="#contactsection">Contact</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <h6 class="mt-2">Welcome: {{Auth::user()->name}}</h6>
          </form>
        </div>
      </nav>
    <!-- navbar end -->

    <!-- slider -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/apple.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/sam.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/h2.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <!-- slider end -->

    <!-- section1 -->
    <div id="iphonesection">
    <div class="container-fluid bg-light" >
        <div class="container text-center">
            <div class="row">
            <div class="col-md-12 mt-5">
                <h2 class="h2change mainani">Most Sales Mobiles</h2>
            </div>
            <!-- md 12 end -->
            </div>
            <!-- row -->
        </div>
        <!-- container end -->
        <div class="container pb-5">
            <div class="row mt-5">
            <div class="col-md-4">
                    <div class="card card1" style="width: 18rem;">
                            <img class="imgchange" src="" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Iphoen11 Pro</h5>
                              <p class="card-text">Price $40</p>

                            </div>
                          </div>
            </div>
            <!-- md-4 end  -->
            <div class="col-md-4">
                    <div class="card card2" style="width: 18rem;">
                            <img class="imgchange" src="images/x.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Iphone X</h5>
                              <p class="card-text">Price $2000</p>

                            </div>
                          </div>

            </div>
            <!-- md-4 end -->
            <div class="col-md-4">
                    <div class="card card3" style="width: 18rem;">
                            <img class="imgchange" src="images/ip8.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Iphone 8</h5>
                              <p class="card-text">Price $1000</p>


                            </div>
                          </div>
            </div>
            <!-- md 4 end -->
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </div>
  </div>
    <!-- section1 end -->
<!-- section6 -->
<div class="conatiner-fluid p5" style="background-image: url('images/ix.png');">
    <div class="container">
    <div class="row">
    <div class="col-md-12 mt-5 text-right text-white">
    <br><br><br><br>
    <h1 class="mainani">Success is the Journey Not a Destination.!</h1>
    <br><br><br><br><br><br><br><br><br><br><br>
    </div>
    </div>
    <!-- row end -->
    </div>
    <!-- container end -->
        </div>
    <!-- section6 -->
<!-- table data all -->

    <!-- table pagination start -->
    <div class="container-fluid bg-light">
      <div class="container">
        <div class="col-md-12 text-center mt-3">
          <h2 class="h2change">Searh availability of Mobile</h2>
        </div>
      </div>
      <!-- heading container end -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
      <br>
      <table id="example" class="display nowrap" style="width:100%;">
          <thead class="mt-4">
          <!-- some upper change -->

          <!-- end upper change -->

          <tr class="text-center bg-light headtable" >

              <th class="bg-info">Mobile Name</th>
              <th class="bg-info">Ram</th>
              <th class="bg-info">Price</th>
              <th class="bg-info">Picture</th>

          </tr>
          </thead>

          <tbody>
          @foreach($files as $uma)
          <tr class="text-center bg-light">

              <td>{{$uma->name}}</td>
              <td>{{$uma->f1}}</td>
              <td>{{$uma->price}}</td>
              <td><img src="{{$uma->pic_url}}" width="70px" height="80px" alt=""></td>


          </tr>
          @endforeach

       </tbody>

      </table>

  </div>
</div>
  <!-- table pagination end -->

</div>
<!-- section2 -->
<!--table end-->
<!-- table data end -->
     <!-- section2 -->
     <div id="samsungsection">
     <div class="container-fluid rowsecond">

            <div class="container pb-5">
                <div class="row ">
                <div class="col-md-4 mt-5">
                        <div class="card card1 secrow" style="width: 18rem;">
                                <img class="imgchange" src="images/11.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Iphoen11 Pro</h5>
                                  <p class="card-text">Price $40</p>

                                </div>
                              </div>
                </div>
                <!-- md-4 end  -->
                <div class="col-md-4 mt-5">
                        <div class="card card2 secrow" style="width: 18rem;">
                                <img class="imgchange" src="images/x.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Iphone X</h5>
                                  <p class="card-text">Price $2000</p>

                                </div>
                              </div>

                </div>
                <!-- md-4 end -->
                <div class="col-md-4 mt-5">
                        <div class="card card3 secrow" style="width: 18rem;">
                                <img class="imgchange" src="images/ip8.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Iphone 8</h5>
                                  <p class="card-text">Price $1000</p>


                                </div>
                              </div>
                </div>
                <!-- md 4 end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
      </div>
        <!-- section2 end -->
<!-- section5 -->
<div class="conatiner-fluid p5" style="background-image: url('images/h3.jpg');">
    <div class="container">
    <div class="row">
    <div class="col-md-12 mt-5 text-right text-white">
    <br><br><br><br><br><br><br><br><br><br><br>
    <h1 class="mainani">Give me one friend Just one.!</h1>
    <br><br><br><br>
    </div>
    </div>
    <!-- row end -->
    </div>
    <!-- container end -->
        </div>
    <!-- section5 -->

<!-- section3 -->
<div id="huaweisection">
<div class="container-fluid bg-light">

        <div class="container pb-5">
            <div class="row">
            <div class="col-md-4 mt-5">
                    <div class="card card1" style="width: 18rem;">
                            <img class="imgchange" src="images/11.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Iphoen11 Pro</h5>
                              <p class="card-text">Price $40</p>

                            </div>
                          </div>
            </div>
            <!-- md-4 end  -->
            <div class="col-md-4 mt-5">
                    <div class="card card2" style="width: 18rem;">
                            <img class="imgchange" src="images/x.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Iphone X</h5>
                              <p class="card-text">Price $2000</p>

                            </div>
                          </div>

            </div>
            <!-- md-4 end -->
            <div class="col-md-4 mt-5">
                    <div class="card card3" style="width: 18rem;">
                            <img class="imgchange" src="images/ip8.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Iphone 8</h5>
                              <p class="card-text">Price $1000</p>


                            </div>
                          </div>
            </div>
            <!-- md 4 end -->
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </div>
  </div>
    <!-- section3 end -->

<!-- section4 -->
    <div class="conatiner-fluid p5" style="background-image: url('images/s10.jpg');">
<div class="container">
<div class="row">
<div class="col-md-12 mt-5 text-right text-white">
<br><br><br><br><br><br><br>
<h1 class="mainani">The most Powerful is Alive.!</h1>
<br><br><br><br><br><br><br>
</div>
</div>
<!-- row end -->
</div>
<!-- container end -->
    </div>
<!-- section4 -->


<!-- section7 -->
<div id="contactsection">
<footer>
        <div class="footer text-white" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 location card1">
                            <h4> Laraib Mobile Store </h4>
                            <a href="#" class="fa fa-facebook"></a>&nbsp;&nbsp;
                            <a href="#" class="fa fa-twitter"></a>&nbsp;&nbsp;
                            <a href="#" class="fa fa-google"></a>&nbsp;&nbsp;
                            <a href="#" class="fa fa-youtube"></a>&nbsp;&nbsp;
                            <a href="#" class="fa fa-instagram"></a>&nbsp;&nbsp;
                        </div>
                        <div class="col-lg-3 col-sm-2 col-xs-3 text-white mt-4 card2">
                          <h5>Feedback</h5>
                          <div class="form-group contact text-white">
                                <input type="email" placeholder="Enter Email" class="form-control">
                            </div>
                            <div class="form-group">

                         <textarea class="form-control" rows="2" id="comment" placeholder="Message"></textarea>
                                  </div>
                                  <button type="button" class="btn btn-info">Send</button>
                        </div>
                        <div class="col-lg-3 col-sm-2 col-xs-3 text-white location card3">
                                <h4 class="mt-lg-0 mt-sm-4">Location</h4>
                                <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
                                <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
                                <p><i class="fa fa-envelope mr-3"></i>info@hsdf.com</p>
                        </div>

                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
            <!--/.footer-->

           <div class="footer-bottom fani">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12 text-center text-white">
<p>© 2019. All Rights Reserved.</p>
                       </div>
                   </div>
               </div>
           </div>
            <!--/.footer-bottom-->

</footer>
</div>
<!-- section7 -->
</body>

<!-- animation  -->
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script>
window.sr = ScrollReveal( {
    duration : 3500
});
sr.reveal('.navani');
sr.reveal('.mainani');

sr.reveal('.card1');

</script>
<script>
window.sr = ScrollReveal( {
  duration :8000
});
sr.reveal('.card2');
</script>

<script>
  window.sr = ScrollReveal( {
    duration :12000
  });
  sr.reveal('.card3');
  </script>


<script>
  window.sr = ScrollReveal( {
    duration :14000
  });
  sr.reveal('.fani');
  </script>
<!-- animation -->

<!-- table data -->
<!--script-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<!--script end-->

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {

            "iDisplayLength": 3,
            "lengthMenu": [[3,5,7,10], [3,5,7,10]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script>
<!-- table data end -->

</html>

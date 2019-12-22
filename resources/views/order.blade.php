<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Order</title>
     <!-- bootstrap cdn  -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

     <!-- bootstrap end -->



   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/ordercss.css">
     <!-- table start -->
     <!-- links of data table -->
<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <!-- end links of data table -->
     <!-- table end -->
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
                <li class="nav-item">
                  <a class="nav-link" href="index.blade.php">Home </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">My Order<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#reviewsection">Review</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#footersection">Contact</a>
                  </li>
              </ul>
{{--              <form class="form-inline my-2 my-lg-0">--}}
{{--                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
{{--              </form>--}}
            </div>
          </nav>
        <!-- navbar end -->

<!-- section 1 -->
<div class="container-fluid imga" style="background-image: url('images/aa.jpg');">
    <div class="container h2change">
  <br><br><br><br><br><br><br><br><br><br><br>

  <br><br><br><br><br><br><br><br>
  <h4 class="text-right text-white">If not now When?</h4>
  <br><br><br>
</div>
</div>
<!-- section1 end -->


<!-- section 2 -->
<div class="conatiner-fluid bco pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                    <h2 style="color: black;">My Order</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
        <!-- container end -->


              <!-- table pagination start -->
              <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
                    <br>

                    <table id="example" class="display nowrap" style="width:100%;">
                        <thead class="mt-4">
                          <!-- some upper change -->

                          <!-- end upper change -->

                          <tr class="text-center bg-light headtable" >

                            <th class="bg-info">#</th>
                            <th class="bg-info">Mobile Name</th>
                            <th class="bg-info">Price</th>
                            <th class="bg-info">Review</th>

                          </tr>
                        </thead>

                        <tbody>
                        @foreach($pages as $page)

                            <tr class="text-center bg-light">

                              <td>{{$page->id}}</td>
                              <td>{{$page->name}}</td>
                              <td>{{$page->price}}</td>

                            <td><a href="{{url('/up'.$page->id)}}"><button class="btn btn-primary">Review</button> </a></td>
 
                            </tr>

                          @endforeach 





                        </tbody>

                      </table>


                  </div>
                  <!-- table pagination end -->

</div>
<!-- section2 -->

<!-- section3 -->
<div id="reviewsection">
<div class="container-fluid" style="background-image: url('images/ip.jpg');">

<br><br><br><br><br><br><br><br><br><br>
<div class="container text-white text-right">


<br><br><br><br>
<br><br><br><br><br><br>
<a href="review" style="text-decoration: none;" class="h2change linksa"><h1>You want to Give Review?</h1></a>
<br><br>
</div>
</div>
</div>
<!-- section3 end -->



<!-- section7 -->
<div id="footersection">
<footer>
        <div class="footer" id="footer text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 location">
                            <h4> Laraib Mobile Store </h4>
                            <a href="#" class="fa fa-facebook"></a>&nbsp;&nbsp;
                            <a href="#" class="fa fa-twitter"></a>&nbsp;&nbsp;
                            <a href="#" class="fa fa-google"></a>&nbsp;&nbsp;
                            <a href="#" class="fa fa-youtube"></a>&nbsp;&nbsp;
                            <a href="#" class="fa fa-instagram"></a>&nbsp;&nbsp;
                        </div>
                        <div class="col-lg-3 col-sm-2 col-xs-3 text-white mt-4">
                          <h5>Feedback</h5>
                          <div class="form-group contact text-white">
                                <input type="email" placeholder="Enter Email" class="form-control">
                            </div>
                            <div class="form-group">

                         <textarea class="form-control" rows="2" id="comment" placeholder="Message"></textarea>
                                  </div>
                                  <button type="button" class="btn btn-info">Send</button>
                        </div>
                        <div class="col-lg-3 col-sm-2 col-xs-3 text-white location">
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

           <div class="footer-bottom">
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




<!-- script link -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {

      "iDisplayLength": 3,
      "lengthMenu": [[3], [3]],
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );

</script>
<!-- script end -->
</body>


</html>

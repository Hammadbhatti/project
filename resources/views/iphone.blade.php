<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iphone</title>
     <!-- bootstrap cdn  -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

     <!-- bootstrap end -->

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
          <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
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
<!-- all mobiles -->
<div class="container-fluid allmobile">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-white text-center">
                <h1 class="h2change mt-5">IPHONE MOBILES</h1>
            </div>
        </div>
    </div>
<!-- end container -->
    <div class="container">
        @foreach($users as $page)
    <div class="row">
        <div class="col-md-4 mt-5 mb-5">
            <div class="card whitecol card3" style="width: 18rem;">
                    <img class="imgchange" src="{{$page->pic_url}} " height="300" width="286" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$page->name}}</h5>
                      <p class="card-text">{{$page->price}}</p>

                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#view_{{$page->id}}">Detail</a>
                        <!-- modal start -->





                                <!-- The Modal -->
                                <div class="modal" id="view_{{$page->id}}" data-backdrop="false">
                                        <div class="modal-dialog">
                                          <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header mbody">
                                              <h4 class="modal-title" >Laraib Mobile Store</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body mb">
                                             <div class="container">
                                                <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="imgchange" src="{{$page->pic_url}}" width="300px" height="250px" alt="">
                                                        </div>
                                                </div>
                                                <!-- row end -->
                                             </div>
                                             <h3>&nbsp;Check Features</h3>
                                                <form action="{{url('/check')}}" method="POST">
                                                    {{csrf_field()}}
                                                    <input type="hidden"  name="user_id" value="{{$page->user_id}}" >
                                                    <input type="hidden"  name="price" value="{{$page->price}}" >
                                                    <input type="hidden"  name="name" value="{{$page->name}}" >

                                                    <input type="text" name="f1" class="form-control" style="background-color:white; border:0;" value="{{$page->f1}}" readonly>


                                                    <input type="text" class="form-control" style="background-color:white; border:0;" name="f2" value="{{$page->f2}}" readonly>

                                                    <input type="text" class="form-control" style="background-color:white; border:0;" name="f3" value="{{$page->f3}}" readonly>
                                                    <input type="text" class="form-control" style="background-color:white; border:0;" name="f4" value="{{$page->f4}}" readonly>
                                                    <input type="text" class="form-control" style="background-color:white; border:0;" name="f5" value="{{$page->f5}}" readonly>
                                                    <input type="submit" value="Buy" class="btn btn-success ml-3" >
{{--                                                    <a class="btn btn-success ml-3" href="order">&nbsp; Buy &nbsp;</a>--}}
                                                </form>
{{--                                             <ul>--}}
{{--                                                 <li>{{$page->f1}}</li>--}}
{{--                                                 <li>{{$page->f2}}</li>--}}
{{--                                                 <li>{{$page->f3}}</li>--}}
{{--                                                 <li>{{$page->f4}}</li>--}}
{{--                                                 <li>{{$page->f5}}</li>--}}
{{--                                             </ul>--}}

{{--                                                <a class="btn btn-success ml-3" href="order">&nbsp; Buy &nbsp;</a>--}}
                                             <!-- conainer end -->
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer mbody">
                                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                          </div>
                                        </div>
                                      </div>
                                      <!-- modal end -->
                    </div>
                  </div>
            @endforeach
    </div>
    <!-- md 4 end -->
    </div>
</div>
</div>
<!-- all mobiles end -->



<footer>
    <div class="footer text-white" style="background: #07458b;" id="footer">
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

</body>
</html>

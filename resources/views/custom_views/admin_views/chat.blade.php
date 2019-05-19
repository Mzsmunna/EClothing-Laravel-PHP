<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="csrf_token" content="{{ csrf_token() }}">
   <title>Clothing -> Messaging</title>
   <!-- Bootstrap core CSS -->
   <link href="{{asset('custom_public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

   <!-- Custom fonts for this template-->
   <link href="{{asset('custom_public/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
   <link href="{{asset('custom_public/css/chatroom.css')}}" rel="stylesheet">

   <style>
      body {
          background: url(../../../custom_public/images/3.jpg) no-repeat 0px 0px;
          background-size: cover;
          font-family: "Roboto", sans-serif;
      }

  </style>

   <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
   <!------ Include the above in your HEAD tag ---------->

</head>
<body>
   <!-- Navigation -->
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
         <div class="container position-relative">
             <a class="navbar-brand" href="/admin"> Clothing </a>
             <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
                 
                 <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Clothes & Dresses
                 </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                     <a class="dropdown-item" href="/allclothings">All Clothings</a>
                     <a class="dropdown-item" href="/mensclothing">Men's Clothing</a>
                     <a class="dropdown-item" href="/womensclothing">Women's Clothing</a>
                     <a class="dropdown-item" href="/childsclothing">Child's Clothing</a>
                 </div>
                 </li>
                 <li class="nav-item">
                 <a class="nav-link" href="/about">About</a>
                 </li>
                 <li class="nav-item">
                 <a class="nav-link" href="/services">Services</a>
                 </li>
                 <li class="nav-item">
                 <a class="nav-link" href="/contact">Contact Us</a>
                 </li>
                 @if(Session::has('admin'))
                 <li class="nav-item">
                 <a class="nav-link" href="/admin">{{ Session::get('user')}}</a>
                 </li>
                 <li class="nav-item">
                 <a class="nav-link" href="/logout">logout</a>
                 </li>
                 @elseif(Session::has('user'))
                 <li class="nav-item">
                 <a class="nav-link" href="/user-profile">{{ Session::get('user')}}</a>
                 </li>
                 <li class="nav-item">
                 <a class="nav-link" href="/logout">logout</a>
                 </li>
                 @else
                 <li class="nav-item">
                     <a class="nav-link" href="/login">login</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/register">Register</a>
                 </li>
                 @endif
             </ul>
             </div>
         </div>
      </nav>
<div class="container" style="padding-top: 70px;">
    @if($errors->has('oops'))
    <div class="alert alert-danger text-center mzs-alert-div">
        <strong>{{ $errors->first('oops') }}</strong>
    </div>
    @endif
<h4 class=" text-center text-white">Messaging with User : <a href="/user-profile/{{$user}}">{{$user}}</a></h4>
<div class="messaging">
      <div class="inbox_msg row">
        <div class="mesgs col"  id="messages">
          <div class="msg_history">
            {{-- <div class="msg_history"> --}}
            @if($allMessages!=null)
            @foreach($allMessages as $message)
                @if($message->msg_from != "Admin")
                <div class="incoming_msg mb-3">
                    <div class="incoming_msg_img"> <img src="/custom_public/uploads/users/{{$message->msg_from}}/profilepic/{{$message->msg_from}}.jpg" onerror="this.src = '/custom_public/images/user.png'" alt="sunil"> </div>
                    <div class="received_msg">
                    <div class="received_withd_msg">
                        <p>{{$message->message}}</p>
                        <span class="time_date text-white"> {{$message->send_time}}    |    {{$message->send_date}}</span></div>
                    </div>
                </div>
                @endif
                @if($message->msg_from == 'Admin')
                <div class="outgoing_msg">
                    <div class="sent_msg">
                    <p>{{$message->message}}</p>
                    <span class="time_date text-white"> {{$message->send_time}}   |    {{$message->send_date}}</span> </div>
                </div>
                @endif
            @endforeach
            @endif
            {{-- </div> --}}
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
                <input type="text" class="write_msg" placeholder="Type a message" name="message" id="message" style="color: white;" />
                <input type="hidden"
                id="sendto" name="sendto" value="{{$user}}"/>
                <input type="hidden" id="csrf" name="_token" value="{{csrf_token()}}">
                <button id="send-msg" class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>
      
    </div></div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
         <div class="container">
             <p class="m-0 text-center text-white">Copyright &copy; Clothing.com 2018</p>
         </div>
     <!-- /.container -->
     </footer>
    
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('custom_public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('custom_public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}
    "></script>
    <script src="{{asset('custom_public/send-msg.js')}}"></script>
    <script type="text/javascript">
        setTimeout(function() {
            $('.mzs-alert-div').fadeOut('slow'); //fast
        }, 5000);
      </script>
    </body>
    </html>
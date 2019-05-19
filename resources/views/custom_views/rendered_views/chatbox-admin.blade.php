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
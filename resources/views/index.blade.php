@include('layouts.header')
@include('layouts.topPage')
@include('layouts.menu')
<script src="{{asset('js/add.js')}}"></script>
<script src="{{asset('js/connexion.js')}}"></script>
  <!-- Content Wrapper. Contains page content -->


  <div class="content-wrapper" id="t">
       <h1>&nbsp; WELCOME TO YOUR STORE ...</h1>

       @if (isset($Post))
         {!! $Post !!}
      @endif
       @if (isset($status))
     <div class="alert alert-success" style="z-index=100">
         {{ $status }}
     </div>

       @endif

       <ul id='list'>

       </ul>
  </div>
   <script type="text/javascript">
     readPosts();
   </script>
  <!-- /.content-wrapper -->
  @include('layouts.footer')

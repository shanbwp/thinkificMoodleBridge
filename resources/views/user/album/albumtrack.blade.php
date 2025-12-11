@extends('layouts.usermaster')
@section('title')
Dashboard ACR__Helper
@endsection
@section('content')
<style>
   .redbg {
      background-color: black !important;
   }
</style>
<div class="row">
   <div class="col-md-12">
      <h4 class="card-title" style="border-bottom-style: solid">submitted Submissions</h4>
   </div>
</div>
<div class="row">
   <div class="col-md-12  ">
      <div class="card redbg ">
         <div class="card-header redbg">
            </div>
            <br><br>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="table mb-0" id="tableId">
                     <thead>
                        <tr> 
                           <th> File Name</th>
                           <th>Status</th>
                           <th>Duration</th>
                           <th>Submitted At</th> 

                        </tr>
                     </thead>
                     <tbody>
                        @foreach($results as $key)
                        <tr> 
                           <td> {{$key->voice}}</td>
                           <td> {{$key->genre==null?'Missing Info':'complete'}}</td>
                           <td> {{$key->description}} <span id="{{$key->id}}" class="duration" onclick="getDuration('{{asset("assets/images/track/".$key->voice)}}','{{$key->id}}')"></span></td>
                           <td> {{$key->submitted_at}}</td> 
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>

   </div>

   @endsection
   @section('scripts')
   <script>
    function getDuration(voice, id) {
        //  alert(voice);
        var au = document.createElement('audio');
        // var ausrc =  {{asset('assets/images/track')}}/+voice;
        au.src = "" + voice;
        au.addEventListener('loadedmetadata', function() {
            var duration = au.duration;
             
            console.log("The duration of the song is of: " + duration + " seconds");
            $("#" + id).text(parseInt(duration) + "seconds");
            // $("#submittername").text("testing");
            // parseInt(duration) 
        }, false);
    }


    $(document).ready(function() {


        $(function() {
            setTimeout(function() {
                console.log('yess');
                $(".duration").click();
            }, 5000);
        });
    });
    </script>
   @endsection
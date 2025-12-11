@extends('layouts.master')
@section('content')

<main class="xl:ml-52 px-4 py-16 pb-4 xl:p-10 flex flex-col min-h-screen">
    <div class="flex flex-wrap items-end">
        <h1 class="flex-grow my-5 pr-2 text-gray-900 text-2xl xl:text-4xl" style="border-bottom-style: solid">Your Album /<span class="font-medium text-secondary" style="color:#00b9f2!important">Collection</span>
        </h1>
    </div>
    <div class="h-0.5 bg-primary mt-1.5 div "></div>
    <div class="mt-7 flex flex-wrap -mx-4 -mb-4">
        <div class="row">
         @foreach($results as $key1)
            <div class="w-full md:w-4/12  mb-4 col-md-6">
                <div class="rounded-3xl p-5 bg-white shadow-lg h-full" style="border-radius: 1.5rem">
                    <div class="border-b border-gray-900 pb-2 flex items-center justify-between">
                        
                    </div><br>
                    <div class="cz-preview-item" id="pimg{{$key1->id}}">
                        <img class="cz-image-zoom" src="{{asset('assets/images/submit/' . $key1->image)}}" alt="Product image" style="width:100%">
                        <div class="cz-image-zoom-pane"></div>
                    </div>
                     <div class="row">
                     <div class="form-group col-md-12">
                        <label for="album_title"><span style="font-weight:700" ><h3>{{$key1->album_title}}</h3></span></label>
                     </div>
                     </div>
                     <hr>
                   <div class="row">
                   <div class="form-group col-md-6">
                        <label for="album_tilte"><span style="font-weight:700">Artist:</span><br>{{$key1->album_artist}}</label>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="album_tilte"><span style="font-weight:700">genre:</span><br>{{$key1->genre}}</label>
                     </div>
                     </div>
                     <div class="row">
                     <div class="form-group col-md-6">
                        <label for="publisher"><span style="font-weight:700">Publisher:</span><br>{{$key1->publisher}}</label>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="label"><span style="font-weight:700">Label:</span><br>{{$key1->label}}</label>
                     </div>
                     </div>
                     <div class="row">
                     <div class="form-group col-md-6">
                        <label for="publisher"><span style="font-weight:700">Release Date:</span><br>{{$key1->date}}</label>
                     </div>
                     </div>
                     <hr>
                     <a href="{{route('submit-edit',$key1->id)}}" class="py-2 px-3 badge btn-primary" >
                     <svg class="inline-block mr-1" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 9.50167V12.0017H2.5L9.87333 4.62833L7.37333 2.12833L0 9.50167ZM11.8067 2.695C12.0667 2.435 12.0667 2.015 11.8067 1.755L10.2467 0.195C9.98667 -0.065 9.56667 -0.065 9.30667 0.195L8.08667 1.415L10.5867 3.915L11.8067 2.695Z" fill="currentColor"></path>
                    </svg>Edit </a>
                     <a href="{{route('premium',$key1->id)}}" class="py-2 px-3 badge btn-primary" >
                     <svg class="inline-block mr-1" width="15" height="13" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M4.45625 8.43182L1.11535 5.09091L0.00170898 6.20455L4.45625 10.6591L14.0017 1.11364L12.8881 0L4.45625 8.43182Z" fill="currentColor"></path>
                    </svg>Submit</a>
                    <a href="{{route('premium',$key1->id)}}" class="py-2 px-3 badge btn-primary" >
                     <svg class="inline-block mr-1" width="15" height="13" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M4.45625 8.43182L1.11535 5.09091L0.00170898 6.20455L4.45625 10.6591L14.0017 1.11364L12.8881 0L4.45625 8.43182Z" fill="currentColor"></path>
                    </svg>Add Track</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>






    <script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/1041425229/?random=1645506530196&amp;cv=9&amp;fst=1645506530196&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;eid=375603261&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=7&amp;u_tz=300&amp;u_java=false&amp;u_nplug=5&amp;u_nmime=2&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Fcid.adrev.net%2Fupload&amp;ref=https%3A%2F%2Fcid.adrev.net%2Falbums%2Fcreate&amp;tiba=Users%20%7C%20YouTube%20Content%20ID%20administration&amp;hn=www.googleadservices.com&amp;rfmt=3&amp;fmt=4"></script>
</main>

@endsection
@extends('layouts.usermaster')
@section('content') 
<main class="xl:ml-52 px-4 py-16 pb-4 xl:p-10 flex flex-col min-h-screen">
    <div class="flex flex-wrap items-end">
        <h1 class="flex-grow my-5 pr-2 text-gray-900 text-2xl xl:text-4xl" style="border-bottom-style: solid">Welcome /<span class="font-medium text-secondary" style="color:#00b9f2!important"> ACR__Helper Media </span>
        </h1>
    </div>
    <div class="h-0.5 bg-primary mt-1.5 div "></div>
    <div class="mt-7 flex flex-wrap -mx-4 -mb-4">
        <div class="row">
            <div class="w-full md:w-4/12 px-4 mb-4 col-md-4">
                <div class="rounded-3xl p-3 bg-white shadow-lg h-full redbg" style="border-radius: 1.5rem">
                    <div class="border-b border-gray-900 pb-2 flex items-center justify-between" style="border-bottom-style: dotted">
                        <h6>Intro</h6>
                    </div><br>
                    <h4 class="mt-6 text-2xl 2xl:text-2xl">Monetize Unauthorized Videos Using Your Music on YouTube</h4>
                    <h5 class="mt-2 text-lg">Choose your upload method<br> below and start earning revenue</h5>
                    <p class="mt-4 text-sm xl:mt-5">*Remixes for which you are not the owner of the original recording, and any creative commons tracks are strictly prohibited.
                        Any uploads of this material will result in the immediate termination of your account</p>
                </div>
            </div>

            <div class="w-full md:w-4/12 px-4 mb-4 col-md-4">
                <div class="rounded-3xl p-3 bg-white shadow-lg h-full redbg" style="border-radius: 1.5rem">
                    <div class="border-b border-gray-900 pb-2 flex items-center justify-between" style="border-bottom-style: dotted">
                        <h6>Prohibited Uploads</h6>
                    </div>
                    <div>
                        <br>
                        <ul class="md:list-disc">
                            <li>files containing watermarks</li>
                            <li>remixes</li>
                            <li>creative commons</li>
                            <li>samples</li>
                            <li>any 3rd party content</li>
                            <li>nature sounds</li>
                            <li>sound effects</li>
                            <li>audiobooks</li>
                            <li>drum loops</li>
                            <li>soundscapes</li>
                            <li>podcasts</li>
                            <li>spoken word</li>
                            <li>any beats that are licensed and unlicensed<br> (all beats must be originally composed)</li>
                            <li>tracks produced for other artists<br> (you must own the master and/or publishing)</li>
                        </ul>
                    </div>

                    <div id="legend-container"></div>
                </div>
            </div>
            <div class="w-full md:w-4/12 px-4 mb-4 flex flex-col col-md-4">
                <div class="rounded-3xl p-3 bg-white shadow-lg flex-1 redbg" style="border-radius: 1.5rem">
                    <div class="border-b border-gray-900 pb-2 flex items-center justify-between" style="border-bottom-style: dotted">
                        <h6>Supported File Formats</h6>
                    </div>
                    <p class="mt-4">
                        Our browser uploader currently supports files no larger than 50MB. If your files are over 50MB, please use Dropbox, Soundcloud, or FTP to upload </p>
                    <div id="legend-container"></div>
                </div>
                <div class="rounded-3xl p-2 bg-white shadow-lg mt-4 flex-1 redbg col-md-12" style="border-radius: 1.5rem">
                    <div class="border-b border-gray-900 pb-2 flex items-center justify-between" style="border-bottom-style: solid">
                        <h6>
                            Covers/Parodies </h6>
                    </div>
                    <p class="mt-4">
                        If uploading covers and/or parodies, you must secure mechanical licenses and the songs must be commercially available. Unsure if you meet these requirements? Email us at <a href="mailto:support@musyic.com">contact@example.com</a>. </p>
                    <div id="legend-container"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="mt-6 flex flex-wrap items-center -mx-4 -mb-4 col-md-6">
            <div class="w-full sm:w-2/4 2xl:w-1/2 px-4 mb-4">
                <div class="rounded-3xl p-5 bg-white shadow-lg redbg hover:shadow-xl transition" style="border-radius: 1.5rem">
                    <div class="h-48 lg:h-72 flex justify-center items-center p-5">
                        <form action="{{route('track-store')}}" enctype="multipart/form-data" name="trackstore" method="post" id="upload_form">
                            @csrf
                            <label for="fileinput" class="inline-block text-secondary text-3xl lg:text-4xl font-semibold text-center hover:text-primary transition-colors duration-300 cursor-pointer" style=" color:#00b9f2!important">
                                <svg class="inline-block" width="89" height="89" viewBox="0 0 89 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M44.63 87.53C68.323 87.53 87.53 68.323 87.53 44.63C87.53 20.937 68.323 1.72998 44.63 1.72998C20.937 1.72998 1.73001 20.937 1.73001 44.63C1.73001 68.323 20.937 87.53 44.63 87.53Z" stroke="currentColor" stroke-width="1.47" stroke-miterlimit="10"></path>
                                    <path d="M41.09 33.54L36.94 37.54L33.33 41.04C33.0161 41.3686 32.6169 41.6034 32.1772 41.7182C31.7375 41.833 31.2745 41.8232 30.84 41.6899C30.4375 41.595 30.0717 41.3844 29.7874 41.0841C29.5031 40.7838 29.3128 40.407 29.24 40C29.1576 39.6175 29.1811 39.2199 29.308 38.8498C29.4349 38.4798 29.6603 38.1514 29.96 37.9L36.2 31.9L43.2 25.15L43.43 24.95L43.68 25.17L57.19 37.8699C57.4751 38.0904 57.6996 38.3796 57.8425 38.7104C57.9854 39.0413 58.042 39.403 58.007 39.7617C57.9721 40.1204 57.8467 40.4643 57.6426 40.7613C57.4384 41.0583 57.1623 41.2987 56.84 41.4599C56.3909 41.7111 55.8734 41.8126 55.3627 41.7497C54.852 41.6867 54.3747 41.4626 54 41.11C53 40.21 52.06 39.2999 51.09 38.3899L46.15 33.77L45.83 33.49V33.9199C45.83 41.7066 45.85 49.4933 45.89 57.2799C45.916 57.816 45.747 58.3432 45.4143 58.7642C45.0815 59.1853 44.6075 59.4715 44.08 59.57C43.7498 59.6524 43.4056 59.6619 43.0714 59.5976C42.7372 59.5334 42.421 59.397 42.1449 59.198C41.8688 58.9991 41.6394 58.7422 41.4728 58.4455C41.3061 58.1488 41.2062 57.8193 41.18 57.4799C41.18 57.3399 41.18 57.21 41.18 57.07C41.18 49.3766 41.16 41.6866 41.12 34L41.09 33.54Z" fill="currentColor"></path>
                                    <path d="M43.7 60.22H55.64C56.1906 60.1731 56.7395 60.3277 57.1846 60.6551C57.6297 60.9825 57.9408 61.4604 58.06 62C58.1071 62.3143 58.0864 62.635 57.9995 62.9406C57.9125 63.2463 57.7612 63.5298 57.5557 63.7722C57.3502 64.0146 57.0953 64.2103 56.808 64.3462C56.5207 64.482 56.2078 64.5549 55.89 64.56H55.55L31.81 64.62C31.2921 64.6653 30.7737 64.5392 30.3346 64.2609C29.8955 63.9826 29.5601 63.5677 29.38 63.08C29.273 62.7364 29.2507 62.3721 29.315 62.018C29.3794 61.6639 29.5284 61.3307 29.7495 61.0468C29.9705 60.7628 30.257 60.5366 30.5845 60.3874C30.912 60.2382 31.2707 60.1705 31.63 60.19C33.26 60.19 34.88 60.19 36.51 60.19L43.7 60.22Z" fill="currentColor"></path>
                                </svg>
                                <span class="block mt-4" style="color:#00b9f2!important"> Select Files</span>
                            </label>
                            <div class="fileuploader" style="padding: 0px; height: 0px; margin: 0px;"><input type="hidden" name="fileuploader-list-song"><input type="file" name="song[]" id="input_file_song" accept="audio/mp3, audio/wav, audio/flac" multiple="multiple" style="position: absolute; z-index: -9999; height: 0px; width: 0px; padding: 0px; margin: 0px; line-height: 0; outline: 0px; border: 0px; opacity: 0;"></div>
                            <input type="file" id="fileinput" name="myfile" accept=".mp3"  style="display: none;">
                            <input type="submit" class="btn btn-primary" id="sbt" style="display: none;">
                        </form>
                    </div>
                    
                    <span id="uploadError" style="color:red!important; display: none!important;"> 
                           Uploading Error:  The track duration is less than 20 sec. Please upload the longer one.
                        </span>
                </div>

            </div>
        </div>
 
    </div>

    <script>
        // Add a change event listener to the file input
        document.getElementById("fileinput").addEventListener('change', function() {

            // Obtain the uploaded file, you can change the logic if you are working with multiupload
            var file = this.files[0];
 
            // Create instance of FileReader
            var reader = new FileReader();

            // When the file has been succesfully read
            reader.onload = function(event) {

                // Create an instance of AudioContext
                var audioContext = new(window.AudioContext || window.webkitAudioContext)();

                // Asynchronously decode audio file data contained in an ArrayBuffer.
                audioContext.decodeAudioData(event.target.result, function(buffer) {
                    // Obtain the duration in seconds of the audio file (with milliseconds as well, a float value)
                    var duration = buffer.duration; 
                    console.error("An error ", buffer);
                    // example 12.3234 seconds
                    console.log("The duration of the song is of: " + duration + " seconds");
                    // Alternatively, just display the integer value with
                  
                    if(parseInt(duration)<20){
                      alert('duration is less then 30 second'); 
                      $("#uploadError").show();
                      
                    }else{ 
                        $("#uploadError").hide();
                        $('#sbt').click();

                        
                    }
                    // 12 seconds
                });
            };

            // In case that the file couldn't be read
            reader.onerror = function(event) {
                console.error("An error ocurred reading the file: ", event);
            };

            // Read file as an ArrayBuffer, important !
            reader.readAsArrayBuffer(file);
        }, false);

    </script>
    @endsection
@extends('layouts.usermaster')
@section('title')
    Track Edit Dashboard
@endsection
@section('content')
    <style>  
        /* Optional: Add some styles for better visibility */
        #hiddenSection {
          display: <?php echo  $data->publishing ? 'block' : 'none'; ?>;
          margin-top: 10px;
          padding: 10px;
          border: 1px solid #ccc;
        }
    </style>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card redbg">
                <div class="card-header redbg">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title"> Edit/YouTube Content ID</h4>
                            @if($errors->any())
                                <div>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div> 
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{ route('track-update', ['id' => $data->id]) }}" method="post"
                            enctype='multipart/form-data'>
                            @csrf
                            <div class="form-group">
                                <label for="title">Song Title:<span class="text-danger" id="error-title">@error('title') {{ $message }} @enderror</span></label> 
                                <input type="text" name="title" value="{{ old('title', $data->title) }}" class="form-control"  id="title" required>
                            </div>
                            <div class="form-group">
                                <label for="artist">Artist:<span class="text-danger" id="error-artist">@error('artist') {{ $message }} @enderror</span></label>
                                <input type="text" name="artist" value="{{ old('artist', $data->artist) }}" class="form-control"  id="artist" required>
                            </div>
                            <div class="form-group">
                                <label for="genre">Genre:</label>
                                <select class="form-control select2" id="selectUser" name="genre" required  >
                                    <option value="" disabled selected>Please select genre</option>
                                    @foreach ($generies as $genre)
                                        <option value="{{ $genre->id }}" {{ $genre->id == $data->genre ? 'selected' : '' }}> {{ $genre->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="label">label:<span class="text-danger" id="error-label">@error('label') {{ $message }} @enderror</span></label>
                                <input type="text" name="label" value="{{ old('label', $data->label) }}" class="form-control"
                                    id="label">
                            </div>
                            <div class="form-group"> 
                                <label for="album_title">Album Title: <span class="text-danger" id="error-album_title" >@error('album_title') {{ $message }} @enderror</span></label>
                                <input type="text" name="album_title" value="{{ old('album_title', $data->album_title) }}"
                                    class="form-control" id="album_title">
                            </div>
                            <div class="form-group">
                                <label for="upc">Album Upc:<span class="text-danger" id="error-upc">@error('upc') {{ $message }} @enderror</span></label>
                                <input type="text" name="upc" value="{{ old('upc', $data->upc) }}" class="form-control"
                                    id="upc">
                            </div>
                            <div class="form-group">
                                <label for="isrc">isrc:<span class="text-danger" id="error-isrc">@error('isrc') {{ $message }} @enderror</span></label>
                                <input type="text" name="isrc" value="{{ old('isrc', $data->isrc) }}" class="form-control"
                                    id="isrc">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="publishing" value="0"> 
                                <input type="checkbox" id="toggleCheckbox" name="publishing" {{ old('publishing',$data->publishing) ? 'checked' : '' }} value="1">
                                <label for="toggleCheckbox">Publishing Controlled:</label>   
                            </div>
                            <div id="hiddenSection">
                                <div class="form-group">
                                    <label for="compos_title">Composition Title:<span class="text-danger" id="error-compos_title">@error('compos_title') {{ $message }} @enderror</span></label>
                                    <input type="text" name="compos_title" value="{{ old('compos_title', $data->compos_title) }}"
                                        class="form-control" id="compos_title">
                                </div>
                                <div class="form-group">
                                    <label for="compos_writter">Writer:<span class="text-danger" id="error-compos_writter">@error('compos_writter') {{ $message }} @enderror</span></label>
                                    <input type="text" name="compos_writter" value="{{ old('compos_writter', $data->compos_writter) }}"
                                        class="form-control" id="compos_writter">
                                </div>
                                <div class="form-group">
                                    <label for="compos_publisher">Publisher:<span class="text-danger" id="error-compos_publisher">@error('compos_publisher') {{ $message }} @enderror</span></label>
                                    <input type="text" name="compos_publisher" value="{{ old('compos_publisher', $data->compos_publisher) }}"
                                        class="form-control" id="compos_publisher">
                                </div>
                                <div class="form-group">
                                    <label for="compos_owner_percentage">Owner Percentage:</label>
                                    <input type="number" min="0" max="100" step="0.1"
                                        name="compos_owner_percentage" value="{{ old('compos_owner_percentage', $data->compos_owner_percentage) }}"
                                        class="form-control" id="compos_owner_percentage">
                                </div>
                                <div class="form-group">
                                    <label for="related_isrc">Related ISRC:<span class="text-danger" id="error-related_isrc">@error('related_isrc') {{ $message }} @enderror</span></label>
                                    <input type="text" name="related_isrc" value="{{ old('related_isrc', $data->related_isrc) }}"
                                        class="form-control" id="related_isrc">
                                </div>
                                <div class="form-group">
                                    <label for="iswc">ISWC:<span class="text-danger" id="error-iswc">@error('iswc') {{ $message }} @enderror</span></label>
                                    <input type="text" name="iswc" value="{{ old('iswc', $data->iswc) }}" class="form-control" maxlength="11" id="iswc">
                                </div>
                                <div class="form-group">
                                    <label for="ipi_cae">IPO/CAE:<span class="text-danger" id="error-ipi_cae">@error('ipi_cae') {{ $message }} @enderror</span></label>
                                    <input type="text" name="ipi_cae" value="{{ old('ipi_cae', $data->ipi_cae) }}" class="form-control"
                                        id="ipi_cae">
                                </div>
                                <div class="form-group">
                                    <label for="hfa_code">HFA Code:<span class="text-danger" id="error-hfa_code">@error('hfa_code') {{ $message }} @enderror</span></label>
                                    <input type="text" name="hfa_code" value="{{ old('hfa_code', $data->hfa_code) }}"  maxlength="6" class="form-control" id="hfa_code">
                                </div>
                            </div>
                            <div class="form-group text-center pt-4">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    // Get the checkbox and hidden section elements
    var toggleCheckbox = document.getElementById('toggleCheckbox');
    var hiddenSection = document.getElementById('hiddenSection');
    function toggleVisibility() {
        // If the checkbox is checked, show the hidden section; otherwise, hide it
        if (toggleCheckbox.checked) {
            hiddenSection.style.display = 'block';
        } else {
            hiddenSection.style.display = 'none';
        }
    }

    // Call the toggleVisibility function on page load
    document.addEventListener('DOMContentLoaded', function() {
        toggleVisibility();
    });

    // Add an event listener for the 'change' event on the checkbox
    toggleCheckbox.addEventListener('change', toggleVisibility);
    
    function validateIsrc() {
        // Clear previous error messages
        clearErrorMessages();

        // Get form values
        var isrcInput = $('#isrc');
        var isrcErrorDiv = $('#isrcError');

        // Validate ISRC on input change
        if (!isValidIsrc(isrcInput.val())) {
            isrcErrorDiv.text('Invalid ISRC format');
        } else {
            isrcErrorDiv.text('Valid ISRC format');
        }
    }
    function isValidIsrc(isrc) {
        // Simple ISRC validation logic
        var isrcRegex = /^[a-z]{2}\-?[a-z0-9]{3}\-?[0-9]{2}\-?[0-9]{5}$/i;
        return isrcRegex.test(isrc);
    }

    function clearErrorMessages() {
        $('#isrcError').text('');
        // Clear other error messages as needed
    }
  </script>
@endsection

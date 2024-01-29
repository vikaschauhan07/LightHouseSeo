
<div>
   
<style>
    .active{
        background-color: red;
    }
</style>
<form action="{{ route('addAds') }}" method="post">
    @csrf <!-- Add this line to include CSRF protection -->
    <label for="heading">Heading:</label>
    <input type="text" name="heading" id="heading">

    <label for="description">Description:</label>
    <textarea name="description" id="description"></textarea>

    <input type="submit" value="Submit">
</form>


@php 
    $ads = \DB::table('adstable')->get();
@endphp

@if (!empty($ads))
    @foreach ($ads as $ad)
        <button id="apnd-{{$ad->id}}" onclick="appendthedata({{$ad->id}})" data-description="{{$ad->description}}">{{$ad->heading}}</button>
    @endforeach
@endif

<textarea id="appendthings"></textarea>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
     function appendthedata(id) {
        $.ajax({
            url: '{{ route("getAds") }}',
            type: 'GET',
            data: { id: id },
            success: function(response) {
                var description = response.ads.description;
                var lineCount = (description.match(/\r\n|\r|\n/g) || []).length + 1;

                var textarea = $('#appendthings');
                var button = $('#apnd-' + id);

                if (button.hasClass('active')) {
                    if(lineCount > 1){
                        description.split(/\r\n|\r|\n/).forEach(function(line) {
                            textarea.val(textarea.val().replace(line + '\n', ''));
                        });
                    } else{
                        textarea.val(textarea.val().replace(description + '\n', ''));
                    }
                    
                    button.removeClass('active');
                } else {
                    textarea.val(textarea.val() + description + '\n');
                    button.addClass('active');
                }
            }
        });
    }
    
</script>

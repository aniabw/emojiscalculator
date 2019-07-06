<h1>Calculator</h1>

<input type="text" name="numbers[numberOne]" id="numberOne" size="5">
<select name="operation">
  @foreach($operations as $key => $operation)
      <option value="{{old('operation', $operation['operation'])}}"> {{$operation['emoji']}}</option>
  @endforeach
</select>
<input type="text" name="numbers[numberTwo]" id="numberTwo" size="5">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<button onclick="showResult()">=</button>
<span id="resultArea"></span>
<div id="error" style="color: red;"></div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript">

function showResult()
{
    var jsonData = '';
    jsonData = { "numbers": { "numberOne":$('input[name="numbers[numberOne]"]').attr('value'), 
                  "numberTwo":$('input[name="numbers[numberTwo]"]').attr('value') }, 
                  "operation": $('select[name="operation"]').attr('value')};  

    let headers = {"X-CSRF-Token": $('input[name="_token"]').attr('value')};

    $( '#resultArea' ).html('');
    $( '#error' ).html('');
    
    $.ajax({
        url: '/api/result',
        type: 'post',
        dataType: 'json',
        data: jsonData,
        headers: headers,
        dataType: 'html',
        success: function (data) {
            var resultData = JSON.parse(data);
            $('#resultArea').append(resultData); 
            if (typeof resultData.errors !== 'undefined') {
                $('#error').append(resultData.errors);
            }
        },
        error: function(jqXHR, textStatus, errorThrown){   
            var errorData = JSON.parse(jqXHR.responseText);
            $.each(errorData, function(key, value){
                $('#error').append(value[0]+"<br />");
            });
        }
    }); 
}
</script>
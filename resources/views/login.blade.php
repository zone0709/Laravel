<?php 
?>
<br>
{{$user_name}}
{{$password}}
<?php foreach($arr as $key =>$value){ ?>
<h1><?=$value?></h1>
<?php } ?>

@if(Session::has('msg'))
    {{Session::get('msg')}}
@endif
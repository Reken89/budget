<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>

@php
    use App\Structure\BlockSection\Admin\Models\Version;
    
    $info = Version::select()
    ->first()
    ->toArray(); 
@endphp

@if($info['status'] == "yes")
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script> 
@endif



    


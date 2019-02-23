<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 22/02/19
 * Time: 08.59
 */
?>
@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

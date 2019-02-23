<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 22/02/19
 * Time: 08.53
 */
?>
@if (\Illuminate\Support\Facades\Session::has('flash_message'))
    <div class="alert alert-success" {{\Illuminate\Support\Facades\Session::has('penting')? 'alert-important':''}}>
        <button type="button" class="clos" data-dismiss="alert" aria-hidden="true">x</button>
        {{\Illuminate\Support\Facades\Session::get('flash_message')}}
    </div>
@endif

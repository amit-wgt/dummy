@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Feed dashboard</div>

                <div class="panel-body">


                    <form class="form-horizontal" method="POST" action="{{route('comment')}}" autocomplete="off">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-6">
                                <input placeholder="Please Leave a comment here" id="comment" type="text" class="form-control" name="comment" value="" required>                                
                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">
                               Leave a Comment
                            </button>
                        </div>
                    </form>
                    <!-- <a href="{{route('liked')}}" class="btn btn-default">Like post</a> 
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif -->                    
                </div>    

            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection
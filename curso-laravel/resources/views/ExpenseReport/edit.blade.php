@extends('layaouts.base')

@section('content')
<div class="row">
        <div class="col">
        <h1> EDIT REPORT {{$report-> id }}</h1>
            <div>
                
            </div>
            <div class="row">
                <div class="col">

                <a class= "btn btn secondary" href="/expense_reports">back</a>

                </div>
            </div>
                <div class="row">
                    <div class="col">

                    <form action="/expense_reports/ {{ $report->id }}" method="POST">
                    {{ csrf_field() }} 
                    {{ method_field('PUT') }}        
                    <div class="formgroup">
                        <label for="title">title</label>
                        <input type="text" name="title" id="title"class="form-control" placeholder="Type in Title" value="{{ $report->title }}">
                    </div>
                    <button class= "btn-btn primary" type= " submit">submit</button>
                </form>
                    </div>
                </div>
          
    </div>
</div>
@endsection
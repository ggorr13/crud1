@if($errors->any())
    @foreach($errors->all() as $val)
        <div class="alert alert-danger">
            <ul>
                <li>{{$val}}</li>
            </ul>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@elseif(session('update'))
    <div class="alert alert-success">
        {{session('update')}}
    </div>
@elseif(session('delete'))
    <div class="alert alert-success">
        {{session('delete')}}
    </div>
@endif

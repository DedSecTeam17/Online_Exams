
@if(\Illuminate\Support\Facades\Session::has('success'))
    <article class="message is-info" style="margin-top: 5%">
        <div class="message-header">
            Info
            <button class="delete"></button>
        </div>
        <div class="message-body">
            <strong>Sucess:</strong> {{ Session::get('success')}}
        </div>
    </article>
    @endif

@if(count($errors)>0)
    <div class="notification is-danger" style="margin-top: 5%">
        <button class="delete"></button>
        <strong>Error ocurr:</strong>
        @foreach($errors->all() as $error)
            <ul>

                <li>{{$error}}</li>

            </ul>

        @endforeach
    </div>



    @endif
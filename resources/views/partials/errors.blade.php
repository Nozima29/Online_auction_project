@if ( count ( $errors -> all ()))
    <div class ="row">
        <div >
            <div class ="alert alert-danger">
                <ul >
                    @foreach ( $errors -> all () as $error )
                        <li >{{ $error }} </li >
                    @endforeach
                </ul >
            </div >
        </div >
    </div >
@endif
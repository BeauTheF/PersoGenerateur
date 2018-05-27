<div id="contact_form">
    {{Form::model($user)}}
        {{Form::label('prenom', 'Prenom')}}
        {{Form::text('prenom',null,['class' => 'input_field'])}}
        
        {{Form::label('nom', 'Nom')}}
        {{Form::text('nom',null,['class' => 'input_field'])}}
        
        {{Form::label('email', 'Email')}}
        {{Form::email('email',null,['class' => 'input_field'])}}
        
        {{Form::label('password', 'Password')}}
        {{Form::password('password',['class' => 'input_field'])}}
        
        {{Form::label('citation', 'Citation')}}
        {{Form::textarea('citation',null,['id' => 'text'])}}
        <div class="cleaner h20"></div>
        {{Form::submit('Crée un compte', ['class' => 'submit_btn float_l'])}}
    {{Form::close()}}
</div>
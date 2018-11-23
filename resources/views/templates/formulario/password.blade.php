<label>
        <span>{{ $label ?? $input ?? 'ERRO' }}</span>
        {{!! Form::password($input, $attributes) !!}}
    </label>
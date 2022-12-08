<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Card Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('card_code', 'Card Code:') !!}
    {!! Form::text('card_code', null, ['class' => 'form-control']) !!}
</div>
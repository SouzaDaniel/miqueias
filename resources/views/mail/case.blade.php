@extends('layouts.mail')

@section('content')
  <div style="background-color: rgba(9, 44, 76, 0.9); color: white;">
    <div
      style="max-width: 500px; margin: auto; text-align: center; padding: 64px 32px 128px;">
      <img src="{{ asset('images/logo-white.png') }}" alt="Logo"
        style="width: 350px; max-width: 100%; min-height: auto;">
      <h1
        style="text-align: left; margin: 64px 0; font-weight: 400; font-size: 40px; line-height: 1.25;">
        <strong>{{ $contact->nameUser }}</strong>
        acaba
        de registrar um
        interesse em processo.
      </h1>
      <p style="text-align: left; margin: 0; font-size: 18px;">Esta mensagem é
        originada do site
        <i>miqueiascosta.adv.br</i> e não foi gravada
        em banco de dados.
      </p>
    </div>
  </div>
  <div style="max-width: 750px; margin: auto; padding: 48px 24px 64px;">
    <p style="color: #4F4F4F; margin-bottom: 40px">Confira abaixo os dados
      fornecidos para iniciar a demanda de processo.</p>
    <div
      style="padding: 32px; background-color: #F2F2F2; border-radius: 8px; margin-bottom: 24px;">
      <div
        style="color:#828282; padding-bottom: 32px; border-bottom: 1px solid #D9D9D9; margin-bottom: 24px">
        <span>Dados do demandante</span>
        <div style="font-size: 18px;">
          <strong style="color: #4F4F4F;">{{ $contact->nameUser }}</strong>
          - {{ $contact->phoneUser }}
          <a href="mailto:{{ $contact->emailUser }}"
            style="color:#3F89B2; text-decoration: none; font-style: italic;"><i>{{ $contact->emailUser }}</i></a>
        </div>
      </div>
      <div style="color:#828282; margin-bottom: 24px">
        <span>Gostaria de processar</span>
        <div style="font-size: 18px;">
          <strong style="color: #4F4F4F;">{{ $contact->nameCase }}</strong>
        </div>
      </div>
      <div style="color:#828282;">
        <span>Detalhes informados</span>
        <div
          style="padding: 20px; background-color: #EBEBEB; color: #4F4F4F; margin-top: 8px; border-radius: 8px; font-size: 18px;">
          {{ $contact->messageCase }}
        </div>
      </div>
    </div>
    @if ($contact->hasAttachs)
      <span style="color: #DF8877;">Há arquivos em anexo</span>
    @endif
  </div>
@endsection

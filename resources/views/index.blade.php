{{-- lembrar de configurar as variaveis do .env no heroku --}}

@include('site.components.head')

{{-- Swal que aparece após o envio do contato do cliente --}}
@include('site.components.sendemailmessage')

@include('site.components.header')

@include('site.layouts.home')

{{-- @include('site.layouts.copywriting') --}}

{{-- REFORMULAR A ESTRUTURA DO HTML PARA O PADRÃO --}}
@include('site.layouts.benefits')

{{-- AINDA NÃO FINALIZADA --}}
@include('site.layouts.network') 

{{-- AINDA NÃO FINALIZADA --}}
@include('site.layouts.gallery')

{{-- ABOUT PAGE JÁ ESTA FINALIZADA --}}
@include('site.layouts.about')

{{-- CONCEPT PAGE JÁ ESTA FINALIZADA --}}
@include('site.layouts.concept')

{{-- BUSINESS NICHES PAGE JÁ ESTA FINALIZADA --}}
@include('site.layouts.business_niches')

{{-- DEVE SER VERIFICADO PARA A EXCLUSAO POSTERIORMENTE --}}
@include('site.layouts.sustainability')

{{-- CUSTOMERS PAGE JÁ ESTA FINALIZADA --}}
@include('site.layouts.customers')

{{-- LOCALIZATION PAGE JÁ ESTA FINALIZADA --}}
@include('site.layouts.localization')

{{-- CONTACT PAGE JÁ ESTA FINALIZADA --}}
@include('site.layouts.contact')
 
@include('site.components.footer')

@include('site.components.script')
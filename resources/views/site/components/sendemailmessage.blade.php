{{-- Message displayed after sending the email --}}
@if(session('nameLead'))
<script>
  swal("Obrigado {{ session('nameLead') }}.", "Seu email foi enviado, entraremos em contato em breve !", "success");
</script>
@endif

{{-- Message displayed after sending the email --}}
@if(session('erroForm'))
<script>
  swal("Ocorreu um erro inexperado!", " {{ session('erroForm') }}", "error");
</script>
@endif
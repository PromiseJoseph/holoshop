<x-mail::message>
<div style="margin:auto; text-align:center; font-size:20px;">
  Welcome  to {{ config('app.name', 'Holoshop') }}  <b>{{$user->name}}</b>  Your Verification Code is <br><br>
 <b >{{ $mailCode}}</b> <br><br>
  please copy 
  <!-- <x-mail::button :url="''">
  Go to page
  </x-mail::button> -->
</div>
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

<x-mail::message>
# Introduction
hello you have a new messege;
<h1>name: {{ $data['fname'] }} </h1>
<h1>email: {{ $data['email'] }} </h1>

<h1>message: {{ $data['message'] }} </h1>



<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

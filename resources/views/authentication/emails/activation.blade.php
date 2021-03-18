<h1>Hallo</h1>

<p>
	Harap untuk mengaktifkan akun anda dengan mengunjungi link dibawah ini
	<a href="{{ env('APP_URL')}}/activate/{{$user->email}}/{{$code}}">Aktifkan akun</a>
</p>
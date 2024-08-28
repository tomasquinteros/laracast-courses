<h2> {{ $job->title }}</h2>
<p>Your Post has been create.</p>
<a href="{{url('/jobs/' . $job->id )}}">View Your Job</a>
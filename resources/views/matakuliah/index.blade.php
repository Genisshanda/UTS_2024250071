@include("layout.header")


<h1> Halaman List Mata Kuliah</h1>

<ol>
@foreach ($matakuliah as $key => $value)



@endforeach
</ol>

@include("layout.footer")
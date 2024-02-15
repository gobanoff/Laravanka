
<ul>

@forelse ($uztvunkos as $uztvunka)
<li>
<div><h1 style="color:rgb(242, 10, 10);">ID:{{$uztvunka->id}}</h1></div>
    <div><h1 style="color:rgb(32, 21, 21);" >Juodi:{{$uztvunka->juodi}}</h1></div>
    <div><h1  style="color:rgb(183, 144, 35);">Rudi:{{$uztvunka->rudi}}<h1></div></li>
        <h1>  <a href="{{route('uztvunka-edit',$uztvunka)}}">edit</a></h1>
@empty
    <li>uztvunku nera</li>
@endforelse
</ul>
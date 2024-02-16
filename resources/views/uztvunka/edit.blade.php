
<h1>Juodieji:{{$uztvunka->juodi}}  Rudieji:{{$uztvunka->rudi}}</h1>

<form action="{{route('uztvunka-save',$uztvunka)}}" method="post">

<div>Juodieji:<input type="text" name="j"></div>
<div>Rudieji:<input type="text" name="r"></div>
<div><button type="submit"name="add"value="1">prideti</button></div>
@csrf
</form>



<form action="{{route('uztvunka-save',$uztvunka)}}" method="post">

    <div>Juodieji:<input type="text" name="j"></div>
    <div>Rudieji:<input type="text" name="r"></div>
    <div><button type="submit"name="rem"value="1">atimti</button></div>
    @csrf
    </form>



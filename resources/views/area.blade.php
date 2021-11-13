<h1>Area de un triangulo</h1>
<br>
<form action="{{route('calculaarea')}}" method="POST">
        {{csrf_field()}}
        <div class="mb-3" class="rounded-pill border border-dark border-4" >
            <label for="inbase" class="form-label"><h3>Base</h3></label>
            <input type="text" class="form-control" name="inbase" id="inbase" >
        </div>
        <br>
        <div class="mb-3">
            <label for="inaltura" class="form-label"><h3>Altura</h3></label>
            <input type="text" class="form-control" name="inaltura" id="inaltura">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<div class="row">
<div class="col-6">
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="titolo" value="{{$comic->title ?? ''}}">
    </div>
</div>
<div class="col-6">
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Prezzo" step="0.01" value="{{$comic->price ?? ''}}">
    </div>
</div>
<div class="col-3">
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data di Vendita:</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Data di Vendita" value="{{$comic->sale_date ?? ''}}">
    </div>
</div>
<div class="col-9">
    <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Link immagine" value="{{$comic->thumb ?? ''}}">
    </div>
</div>
<div class="col-6">
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Serie" value="{{$comic->series ?? ''}}">
    </div>
</div>
<div class="col-6">
    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Tipo" value="{{$comic->type ?? ''}}">
    </div>
</div>
<div class="col-12">
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="10">{{$comic->description ?? ''}}</textarea>
    </div>
</div>
<div class="col-12 d-flex justify-content-end">
   <button type="submit" class="btn btn-success">Esegui</button>
</div>
</div>







